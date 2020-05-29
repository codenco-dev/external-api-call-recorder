<?php


namespace CodencoDev\ExternalApiCallRecorder\Tests\Unit;


use CodencoDev\ExternalApiCallRecorder\Models\ExternalApi;
use CodencoDev\ExternalApiCallRecorder\Models\ExternalApiCall;
use CodencoDev\ExternalApiCallRecorder\Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Thomasdominic\EloquentModelTestor\HasModelTestor;

class ExternalApiCallTest extends TestCase
{
    use HasModelTestor,RefreshDatabase;



    public function test_have_models_structures()
    {
        $this->modelTestable(ExternalApi::class)

            ->assertHasColumns(['id', 'name', 'url'])
            ->assertCanFillables(['name', 'url'])
            ->assertHasHasManyRelation(ExternalApiCall::class)
        ;

        $this->modelTestable(ExternalApiCall::class)
            ->assertHasColumns([
                'id', 'created_at', 'updated_at', 'sent_payload', 'received_payload', 'path', 'body', 'return', 'token','status',
            ])
            ->assertCanFillables(['sent_payload', 'sent_payload', 'path', 'body', 'return', 'token'])
            ->assertHasBelongsToRelation(ExternalApi::class)
        ;
    }

}
