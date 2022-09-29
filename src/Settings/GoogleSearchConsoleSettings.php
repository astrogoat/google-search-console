<?php

namespace Astrogoat\GoogleSearchConsole\Settings;

use Helix\Lego\Settings\AppSettings;

class GoogleSearchConsoleSettings extends AppSettings
{
    public string $site_verification;

    public function rules(): array
    {
        return [
            'site_verification' => 'string',
        ];
    }
    public function description(): string
    {
        return 'Interact with Google Search Console.';
    }

    public static function group(): string
    {
        return 'google-search-console';
    }
}
