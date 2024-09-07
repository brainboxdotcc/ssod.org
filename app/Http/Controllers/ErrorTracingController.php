<?php

namespace App\Http\Controllers;

use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class ErrorTracingController extends Controller
{
    public function sentryProxy(Request $request): JsonResponse
    {
        $envelope = $request->getContent();
        if (!str_contains($envelope, "\n")) {
            return response()->json(["status" => 0]);
        }
        $envelopeParts = json_decode(explode("\n", $envelope)[0]);
        if (!property_exists($envelopeParts, "dsn")) {
            return response()->json(["status" => 0]);
        }
        $dsn = parse_url($envelopeParts->dsn);
        $postUrl = sprintf("%s://%s/api%s/envelope/?sentry_key=%s&sentry_version=7&sentry_client=%s/%s", $dsn["scheme"], $dsn["host"], $dsn["path"], $dsn["user"], $envelopeParts?->sdk?->name ?? 'sentry.javascript.browser', $envelopeParts?->sdk?->version ?? '7.119.0');
        $response = Http::withBody($envelope)->post($postUrl);
        return response()->json(["destination" => $postUrl, "dsn" => $dsn, "id" => $response->json("id"), "status" => $response->status()]);
    }
}
