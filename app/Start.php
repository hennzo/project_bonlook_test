<?php

require dirname(__DIR__).'/vendor/autoload.php';

$settings = require BASE_ROOT.'/app/Config/Settings.php';

$app = new \Slim\App($settings);

// Get container
$container = $app->getContainer();

// Register all services providers
foreach ($container['providers'] as $provider) {
	$service_provider = new $provider($container);
	
	$service_provider->register();
}

// Load all routes that will handle all the HTTP requests within the App
foreach ($container['routes'] as $route) {
	require $container['app_routes'].$route.'.php';
}

$app->run();
