<?php

namespace GNAHotelSolutions\LaravelGoogleTranslate;

use Illuminate\Support\Facades\Http;

class GoogleTranslate
{
    protected $from;

    protected $to;

    protected $apiUrl = 'https://translation.googleapis.com/language/translate/v2';

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
        return Http::withToken(config('google-translate.key'))
            ->post($this->apiUrl, [
                'source' => $this->from,
                'target' => $this->to,
                'format' => 'text',
                'q' => $text,
            ])->json('data')->translations[0]->translatedText;
    }
}
