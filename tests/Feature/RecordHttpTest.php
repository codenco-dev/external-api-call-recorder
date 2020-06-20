<?php


namespace CodencoDev\ExternalApiCallRecorder\Tests\Unit;

use CodencoDev\ExternalApiCallRecorder\Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\Http;
use Thomasdominic\EloquentModelTestor\HasModelTestor;

class RecordHttpTest extends TestCase
{
    use HasModelTestor,RefreshDatabase;

    /** @notest */
    public function it_can_record_request()
    {
        $result = Http::get('https://www.google.fr');
        dd($result);
    }
}
