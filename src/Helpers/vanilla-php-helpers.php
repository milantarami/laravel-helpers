<?php

if (!function_exists('file_build_path')) {
    /**
     * Builds a file path with the appropriate directory separator.
     * @param string $segments,... unlimited number of path segments
     * @return string Path
     */
    function file_build_path(...$segments)
    {
        return join(DIRECTORY_SEPARATOR, $segments);
    }
}



if (!function_exists('current_datetime_string')) {
    /**
     * get current datetime string with milliseconds
     * @param string $timezone
     * @return string Y-m-d H:i:s.milliseconds
     *
     */
    function current_datetime_string($timezone = null)
    {
        if ($timezone)
            date_default_timezone_set($timezone);
        return date('Y-m-d H:i:s.') . gettimeofday()['usec'];
    }
}


if (!function_exists('generate_filename')) {
    /**
     * generate a filename
     * @param string $originalFilename
     * @return string
     */
    function generate_filename($originalFilename)
    {
        $filename = urlencode(current_datetime_string()) . '_' . $originalFilename;
        return $filename;
    }
}
