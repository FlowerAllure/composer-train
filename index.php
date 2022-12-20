<?php

use FlowerAllure\ComposerUtils\App\Services\WeatherServer;

require __DIR__ .'/vendor/autoload.php';

$weather = new WeatherServer('353dcf19d90f33f3ccd62e50105410f2');

echo "获取实时天气：\n";

$response = $weather->getWeather('深圳');
echo json_encode($response, JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT);

echo "\n\n获取天气预报：\n";

$response = $weather->getWeather('深圳', 'all');
echo json_encode($response, JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT);


echo "\n\n获取实时天气(XML)：\n";

echo $weather->getWeather('深圳', 'base', 'xml');
