#### Vanilla PHP helper functions

1. [file_build_path](/vanilla-php-helper-functions?id=file_build_path)
2. [current_datetime_string](/vanilla-php-helper-functions?id=current_datetime_string)
3. [generate_filename](/vanilla-php-helper-functions?id=generate_filename)

&nbsp;

1. <h5 id="file_build_path">file_build_path</h5>
    Builds a file path with the appropriate directory separator.

   ```
    /**
    * @param string $segments,... unlimited number of path segments
    * @return string Path
    */
    function file_build_path(...$segments)
    {
        return join(DIRECTORY_SEPARATOR, $segments);
    }
   ```

   > 👌 usage of 👉 **file_build_path(...$segments)**

   ```
    file_build_path('folder1', 'folder2', 'folder3', 'filename.jpg')

    // return "folder1/folder2/folder3/filename.jpg"
   ```

2. <h5 id="current_datetime_string">current_datetime_string</h5>

   Get current datetime string with milliseconds

   ```
   /**
    * @param string $timezone
    * @return string Y-m-d H:i:s.milliseconds
    */
    function current_datetime_string($timezone = null)
    {
        if ($timezone)
            date_default_timezone_set($timezone);
        return date('Y-m-d H:i:s.') . gettimeofday()['usec'];
    }
   ```

   > 👌 usage of 👉 **current_datetime_string($timezone = null)**

   ```
   current_datetime_string()
    // return "2021-02-10 16:48:58.960727"

   current_datetime_string('Asia/Kathmandu')
    // return "2021-02-10 16:48:58.960727"
   ```

3. <h5 id="generate_filename">generate_filename</h5>
   Generate a filename prefixed with current time with milliseconds

   ```
    /**
    * @param string $originalFilename
    * @return string
    */
    function generate_filename($originalFilename)
    {
        $filename = urlencode(current_datetime_string()) . '_' . $originalFilename;
        return $filename;
    }
   ```

   > 👌 usage of 👉 **generate_filename($originalFilename)**

   ```
    generate_filename('filename.pdf')
    // return "2021-02-10+11%3A31%3A53.19800_filename.pdf"
   ```
