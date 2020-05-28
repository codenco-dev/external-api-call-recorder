<?php

namespace CodencoDev\ExternalApiCallRecorder;

use Illuminate\Support\Facades\Facade;

/**
 * @see \CodencoDev\ExternalApiCallRecorder\Skeleton\SkeletonClass
 */
class ExternalApiCallRecorderFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'external-api-call-recorder';
    }
}
