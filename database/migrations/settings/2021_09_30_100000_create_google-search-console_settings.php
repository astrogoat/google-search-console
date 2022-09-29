<?php

use Spatie\LaravelSettings\Migrations\SettingsMigration;

class CreateGoogleSearchConsoleSettings extends SettingsMigration
{
    public function up(): void
    {
        $this->migrator->add('google-search-console.enabled', false);
        // $this->migrator->add('google-search-console.url', '');
        // $this->migrator->addEncrypted('google-search-console.access_token', '');
    }

    public function down()
    {
        $this->migrator->delete('google-search-console.enabled');
        // $this->migrator->delete('google-search-console.url');
        // $this->migrator->delete('google-search-console.access_token');
    }
}
