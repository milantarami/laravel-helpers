<?php

use Orchestra\Testbench\TestCase;

class GenerateFilenameTest extends TestCase
{

    /** @test */
    public function generate_filename_helper()
    {
        echo generate_filename('file name.jpg');
        $this->assertTrue(true);
    }
}
