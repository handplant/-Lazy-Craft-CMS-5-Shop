<?php

use craft\config\GeneralConfig;
use craft\helpers\App;

$isDev = App::env('CRAFT_ENVIRONMENT') === 'dev';
$isProd = App::env('CRAFT_ENVIRONMENT') === 'production';

return GeneralConfig::create()
    ->isSystemLive(App::env('IS_SYSTEM_LIVE') ?? false)
    ->enableTemplateCaching(App::env('TEMPLATE_CACHE') ?? true)
    ->defaultWeekStartDay(1)
    ->omitScriptNameInUrls()
    ->devMode(App::env('DEV_MODE') ?? false)
    ->preloadSingles()
    ->allowAdminChanges(App::env('ALLOW_ADMIN_CHANGES') ?? false)
    ->disallowRobots(App::env('DISALLOW_ROBOTS') ?? false)
    ->preventUserEnumeration()
    ->maxUploadFileSize('10M')
    ->errorTemplatePrefix("_errors/")
    ->allowedFileExtensions(['jpg', 'png', 'jpeg', 'gif', 'svg', 'mp4', 'wov', 'mp3', 'wav', 'pdf', 'json'])
    ->cacheDuration(0)
    ->aliases([
        '@webroot' => dirname(__DIR__) . '/web',
    ]);
