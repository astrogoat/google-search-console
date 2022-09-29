@php($settings = resolve(Astrogoat\GoogleSearchConsole\Settings\GoogleSearchConsoleSettings::class))

@if($settings->isEnabled() && ! blank($verification = $settings->site_verification))
    <meta name="google-site-verification" content="{{ $verification }}" />
@endunless
