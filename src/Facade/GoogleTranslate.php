<?php

namespace GNAHotelSolutions\LaravelGoogleTranslate\Facade;

use Illuminate\Support\Facades\Facade;

/**
 * @see \GNAHotelSolutions\LaravelGoogleTranslate\GoogleTranslate
 */
class GoogleTranslate extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor(): string
    {
        return 'google-translate';
    }
}
