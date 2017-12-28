<?php

use Slim\Http\Request;
use Slim\Http\Response;

// Routes

$app->get('/hello', App\Controllers\Question::class);

$app->get('/[{name}]', function (Request $request, Response $response, array $args) {
    // Sample log message
    $this->logger->info("Slim-Skeleton '/' route");

    // Render index view
    return $this->renderer->render($response, 'index.phtml', $args);
});