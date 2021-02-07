<?php

if (!function_exists('begin_transaction')) {
    /**
     * begin a transaction
     * @return void
     */
    function begin_transaction()
    {
        \Illuminate\Support\Facades\DB::beginTransaction();
    }
}



if (!function_exists('commit_transaction')) {
    /**
     * commit a transactions
     * @return void
     */
    function commit_transaction()
    {
        \Illuminate\Support\Facades\DB::commit();
    }
}


if (!function_exists('rollback_transaction')) {
    /**
     * rollback a transactions
     * @return void
     */
    function rollback_transaction()
    {
        \Illuminate\Support\Facades\DB::rollBack();
    }
}



if (!function_exists('create_dir_in_storage_path')) {

    /**
     * create dir recursively in storage_path
     * @param string $path
     * @param string $disk = "public"
     * @param string $dirSeparator = null
     * @return string
     */
    function create_dir_in_storage_path($path, $disk = 'public', $dirSeparator = null)
    {
        $filePathArr = explode($dirSeparator ? $dirSeparator : DIRECTORY_SEPARATOR, $path);
        foreach ($filePathArr as $key => $name) {
            $path = join(DIRECTORY_SEPARATOR, array_slice($filePathArr, 0, $key + 1));
            if (!\Illuminate\Support\Facades\Storage::disk($disk)->exists($path)) {
                \Illuminate\Support\Facades\Storage::disk($disk)->makeDirectory($path, 775, true);
            }
        }
        return $path;
    }
}
