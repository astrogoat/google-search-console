<?php

namespace Astrogoat\GoogleSearchConsole\Settings;

use Helix\Lego\Settings\AppSettings;
use Illuminate\Validation\Rule;
use Astrogoat\GoogleSearchConsole\Actions\GoogleSearchConsoleAction;

class GoogleSearchConsoleSettings extends AppSettings
{
    // public string $url;

    public function rules(): array
    {
        return [
            // 'url' => Rule::requiredIf($this->enabled === true),
        ];
    }

    // protected static array $actions = [
    //     GoogleSearchConsoleAction::class,
    // ];

    // public static function encrypted(): array
    // {
    //     return ['access_token'];
    // }

    public function description(): string
    {
        return 'Interact with GoogleSearchConsole.';
    }

    public static function group(): string
    {
        return 'google-search-console';
    }
}
