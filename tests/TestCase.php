<?php

namespace GNAHotelSolutions\LaravelGoogleTranslate\Tests;

use GNAHotelSolutions\LaravelGoogleTranslate\GoogleTranslateServiceProvider;
use Orchestra\Testbench\TestCase as OrchestraTestCase;

class TestCase extends OrchestraTestCase
{
    protected function getPackageProviders($app): array
    {
        return [GoogleTranslateServiceProvider::class];
    }
}
