<?php

use Illuminate\Support\Facades\Storage;

if (!function_exists('file_system_url')) {
    function file_system_url($path)
    {
        return Storage::url($path);
    }
}