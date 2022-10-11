<?php

namespace GNAHotelSolutions\LaravelGoogleTranslate\Tests;

use GNAHotelSolutions\LaravelGoogleTranslate\Facade\GoogleTranslate;
use Google\Cloud\Translate\V2\TranslateClient;

class GoogleTranslateTest extends TestCase
{
    public function test_it_calls_google_package(): void
    {
        app()->singleton(TranslateClient::class, function () {
            return $this->mock(TranslateClient::class, function ($mock) {
                $mock->shouldReceive('translate')
                    ->withArgs(['Hello there!', ['source' => 'en', 'target' => 'es']])
                    ->once()
                    ->andReturn(['text' => 'Hola ahí!']);
            });
        });

        $this->assertEquals('Hola ahí!', GoogleTranslate::from('en')->to('es')->translate('Hello there!'));
    }
}
