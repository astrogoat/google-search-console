<?php

namespace Astrogoat\GoogleSearchConsole\Actions;

use Helix\Lego\Apps\Actions\Action;

class GoogleSearchConsoleAction extends Action
{
    public static function actionName(): string
    {
        return 'GoogleSearchConsole action name';
    }

    public static function run(): mixed
    {
        return redirect()->back();
    }
}
