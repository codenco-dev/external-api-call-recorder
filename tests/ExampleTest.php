<?php

namespace CodencoDev\ExternalApiCallRecorder\Tests;

use Orchestra\Testbench\TestCase;
use CodencoDev\ExternalApiCallRecorder\ExternalApiCallRecorderServiceProvider;

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
