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



// if (!function_exists('array_map_assoc')) {
//     /**
//      * array map associative array
//      * @param callable $f
//      * @param array $a
//      * @return array
//      *
//      */
//     function array_map_assoc(callable $f, array $a)
//     {
//         return array_column(array_map($f, array_keys($a), $a), 1, 0);
//     }
// }


if (!function_exists('current_datetime_string')) {
    /**
     * get current datetime string with milliseconds
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
