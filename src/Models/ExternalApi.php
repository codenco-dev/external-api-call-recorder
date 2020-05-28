<?php

namespace CodencoDev\ExternalApiCallRecorder\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class ExternalApi extends Model
{
    protected $fillable = [
        'name',
        'url',
    ];

    protected $dates = [
        'created_at',
        'updated_at',
    ];

    public function external_api_calls(): HasMany
    {
        return $this->hasMany(ExternalApiCall::class);
    }
}
