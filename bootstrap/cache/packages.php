<?php return array (
  'auth0/login' => 
  array (
    'providers' => 
    array (
      0 => 'Auth0\\Login\\LoginServiceProvider',
    ),
    'aliases' => 
    array (
      'Auth0' => 'Auth0\\Login\\Facade\\Auth0',
    ),
  ),
  'beyondcode/laravel-dump-server' => 
  array (
    'providers' => 
    array (
      0 => 'BeyondCode\\DumpServer\\DumpServerServiceProvider',
    ),
  ),
  'fideloper/proxy' => 
  array (
    'providers' => 
    array (
      0 => 'Fideloper\\Proxy\\TrustedProxyServiceProvider',
    ),
  ),
  'laravel/nexmo-notification-channel' => 
  array (
    'providers' => 
    array (
      0 => 'Illuminate\\Notifications\\NexmoChannelServiceProvider',
    ),
  ),
  'laravel/slack-notification-channel' => 
  array (
    'providers' => 
    array (
      0 => 'Illuminate\\Notifications\\SlackChannelServiceProvider',
    ),
  ),
  'laravel/tinker' => 
  array (
    'providers' => 
    array (
      0 => 'Laravel\\Tinker\\TinkerServiceProvider',
    ),
  ),
  'nesbot/carbon' => 
  array (
    'providers' => 
    array (
      0 => 'Carbon\\Laravel\\ServiceProvider',
    ),
  ),
  'nunomaduro/collision' => 
  array (
    'providers' => 
    array (
      0 => 'NunoMaduro\\Collision\\Adapters\\Laravel\\CollisionServiceProvider',
    ),
  ),
);