<?php


namespace CodencoDev\ExternalApiCallRecorder\Tests;


use CodencoDev\ExternalApiCallRecorder\ExternalApiCallRecorderServiceProvider;

class TestCase extends \Orchestra\Testbench\TestCase
{
    public function setUp(): void
    {
        parent::setUp();
        // additional setup
    }

    protected function getPackageProviders($app)
    {
        return [
            ExternalApiCallRecorderServiceProvider::class,
        ];
    }

    protected function getEnvironmentSetUp($app)
    {
        // perform environment setup
    }
}
