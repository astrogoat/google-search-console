<?php

namespace Astrogoat\GoogleSearchConsole;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Astrogoat\GoogleSearchConsole\GoogleSearchConsole
 */
class GoogleSearchConsoleFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'google-search-console';
    }
}
