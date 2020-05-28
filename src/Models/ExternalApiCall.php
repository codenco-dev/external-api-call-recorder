<?php

namespace CodencoDev\ExternalApiCallRecorder\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class ExternalApiCall extends Model
{
    protected $fillable = [
        'sent_payload',
        'received_payload',
        'path',
        'body',
        'return',
        'token',
        'status',
        'external_api_id'
    ];

    protected $dates = [
        'created_at',
        'updated_at',
    ];

    public function external_api():BelongsTo
    {
        return $this->belongsTo(ExternalApi::class);
    }

}
