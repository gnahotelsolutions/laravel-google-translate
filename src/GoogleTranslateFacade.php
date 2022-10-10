<?php

namespace GNAHotelSolutions\LaravelGoogleTranslate;

use Illuminate\Support\Facades\Facade;

/**
 * @see \GNAHotelSolutions\LaravelGoogleTranslate\GoogleTranslate
 */
class GoogleTranslateFacade extends Facade
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
