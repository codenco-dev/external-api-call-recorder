<?php

namespace CodencoDev\ExternalApiCallRecorder\Tests;

use CodencoDev\ExternalApiCallRecorder\ExternalApiCallRecorderServiceProvider;
use Orchestra\Testbench\TestCase;

class ExampleTest extends TestCase
{
    protected function getPackageProviders($app)
    {
        return [ExternalApiCallRecorderServiceProvider::class];
    }
    
    /** @test */
    public function true_is_true()
    {
        $this->assertTrue(true);
    }
}
