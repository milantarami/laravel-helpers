<?php

use Orchestra\Testbench\TestCase;

class LaravelHelpersTest extends TestCase
{

    public function setup(): void
    {
        parent::setUp();
    }

    protected function getEnvironmentSetUp($app)
    {
        $app['config']->set('app.key', 'base64:d0XorrzY1+BCuLDrzHP5QjGdQMVfBBIrpBRpxlNZI+Y=');
        $app['config']->set('database.default', 'testing');
        $app['config']->set('database.connections.testing', [
            'driver'   => 'sqlite',
            'database' => ':memory:',
            'prefix'   => '',
        ]);
    }

    protected function getPackageProviders($app)
    {
        // return [ServiceProvider::class];
    }

    /** @test */
    public function generate_filename_helper()
    {
        generate_filename('name.jpg');
        $this->assertTrue(true);
    }

    /** @test */
    public function current_datetime_string_helper()
    {
        current_datetime_string();
        $this->assertTrue(true);
    }

    /** @test */
    public function file_build_path_helper()
    {
        file_build_path('folder1', 'nested-folder', 'filename.jpg');
        $this->assertTrue(true);
    }


    /** @test */
    public function create_dir_in_storage_path_helper()
    {
        create_dir_in_storage_path('milan/tarami');
        $this->assertTrue(true);
    }

    /** @test */
    public function begin_transaction_helper()
    {
        begin_transaction();
        $this->assertTrue(true);
    }

    /** @test */
    public function commit_transaction_helper()
    {
        commit_transaction();
        $this->assertTrue(true);
    }

    /** @test */
    public function rollback_transaction_helper()
    {
        rollback_transaction();
        $this->assertTrue(true);
    }
}
