<?php

namespace GNAHotelSolutions\LaravelGoogleTranslate;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Gnahotelssolutions\LaravelGoogleTranslate\Skeleton\SkeletonClass
 */
class LaravelGoogleTranslateFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'laravel-google-translate';
    }
}
