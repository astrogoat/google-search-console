<?php

use Spatie\LaravelSettings\Migrations\SettingsMigration;

class CreateGoogleSearchConsoleSettings extends SettingsMigration
{
    public function up(): void
    {
        $this->migrator->add('google-search-console.enabled', false);
        $this->migrator->add('google-search-console.site_verification', false);
    }

    public function down()
    {
        $this->migrator->delete('google-search-console.enabled');
        $this->migrator->delete('google-search-console.site_verification');
    }
}
