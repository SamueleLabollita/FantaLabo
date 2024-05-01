<?php
use DI\ContainerBuilder;
use DI\Bridge\Slim\Bridge;

require __DIR__ . '/../vendor/autoload.php';

$containerBuilder = new ContainerBuilder();
$containerBuilder->useAutowiring(true);
$container = $containerBuilder->build();

$container->set('config', function () {
    $config = require_once __DIR__ . '/../src/config.php';
    return $config;
});

$app = Bridge::create($container);
$app->setBasePath('/www/');
$app->addBodyParsingMiddleware();
$app->addErrorMiddleware(true, true, true);

require __DIR__ . '/../src/routes.php';

$app->run();
