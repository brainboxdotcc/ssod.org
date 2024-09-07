<?php

if (!function_exists("salutation")) {

    function salutation(): string
    {
        $time = date("H");
        if ($time < 12) {
            return "morning";
        } else if ($time < 18) {
            return "afternoon";
        } else {
            return "evening";
        }
    }

}
