<?php

namespace GNAHotelSolutions\LaravelGoogleTranslate;

use Google\Cloud\Translate\V2\TranslateClient;

class GoogleTranslate
{
    protected $from;

    protected $to;

    public function from(string $locale): self
    {
        $this->from = $locale;

        return $this;
    }

    public function to(string $locale): self
    {
        $this->to = $locale;

        return $this;
    }

    public function translate(string $text): string
    {
        return app(TranslateClient::class)
            ->translate($text, [
                'source' => $this->from,
                'target' => $this->to
            ])['text'];
    }
}
