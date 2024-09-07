<?php

if (!function_exists("botApiRequest")) {

    /**
     * Call the Discord API as the bot using the bots token
     *
     * @param string $url API URL to request from
     * @param string $requestType Request type
     * @param string|null $post POST data, or NULL if no POST data
     * @param array $headers optional additional headers to send
     * @param array $files Array of MIME multipart files to upload with the request
     * @return object|array|null API result
     */
    function botApiRequest(string $url, string $requestType = 'GET', ?string $post = null, array $headers = [], array $files = []): object|array|null
    {
        $ch = curl_init('https://discord.com/api/' . $url);

        curl_setopt($ch, CURLOPT_IPRESOLVE, CURL_IPRESOLVE_V4);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, $requestType);
        curl_setopt($ch, CURLOPT_HEADER, 1);

        $data = '';

        if (!empty($files)) {
            $boundary = uniqid();
            $delimiter = '-------------' . $boundary;

            $data .= "--" . $delimiter . "\r\n"
                . 'Content-Disposition: form-data; name="payload_json"' . "\r\nContent-Type: application/json\r\n\r\n"
                . $post . "\r\n";

            foreach ($files as $name => $content) {
                $data .= "--" . $delimiter . "\r\nContent-Transfer-Encoding: base64\r\n"
                    . 'Content-Disposition: form-data; name="' . $name . '"; filename="' . $name . '"' . "\r\n\r\n"
                    . base64_encode($content) . "\r\n";
            }

            $data .= "--" . $delimiter . "--\r\n";
            $headers[] = 'Content-Type: multipart/form-data; boundary=' . $delimiter;
            curl_setopt_array($ch, [
                CURLOPT_POST => true,
                CURLOPT_POSTFIELDS => $data
            ]);
        } else {
            if (!empty($post)) {
                curl_setopt_array($ch, [
                    CURLOPT_POST => true,
                    CURLOPT_POSTFIELDS => $post
                ]);
            }
            $headers[] = 'Content-Type: application/json';
        }

        $headers[] = 'Accept: application/json';
        $headers[] = 'Authorization: Bot ' . env("BOT_TOKEN");
        $headers[] = 'Content-Length: ' . !empty($post) ? strlen($post) : 0;
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

        $response = curl_exec($ch);

        $r_headers = [];
        $r_header_text = substr($response, 0, strpos($response, "\r\n\r\n"));
        foreach (explode("\r\n", $r_header_text) as $i => $line) {
            if ($i === 0) {
                $r_headers['http_code'] = $line;

            } else {
                list($k, $v) = explode(': ', $line, 2);
                $r_headers[$k] = $v;
            }
        }

        /* Large POSTS create this extra status code, ick */
        while (str_starts_with($response, "HTTP/1.1 100 Continue\r\n\r\n")) {
            $response = substr($response, 25, strlen($response));
        }

        $header_end = strpos($response, "\r\n\r\n") + 4;
        $response = substr($response, $header_end, strlen($response));

        if (isset($r_headers['x-ratelimit-remaining']) && $r_headers['x-ratelimit-remaining'] == 0) {
            /* Sleep and wait until we can send again */
            $now = time() - date('Z');
            $later = $r_headers['x-ratelimit-reset'] - date('Z');
            $seconds = $later - $now + 1;
            if ($seconds > 0 && PHP_SAPI === 'cli') {
                sleep($seconds);
            }
        }

        return json_decode($response);
    }
}
