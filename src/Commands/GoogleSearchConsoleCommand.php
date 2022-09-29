<?php

namespace Astrogoat\GoogleSearchConsole\Commands;

use Illuminate\Console\Command;

class GoogleSearchConsoleCommand extends Command
{
    public $signature = 'google-search-console';

    public $description = 'My command';

    public function handle()
    {
        $this->comment('All done');
    }
}
