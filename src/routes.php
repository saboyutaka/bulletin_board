<?php

use Slim\Http\Request;
use Slim\Http\Response;

// Routes

$app->get('/', function(Request $request, Response $response, array $args) {

    $comments = [
        ["name" => "hoge", "body" => "hogehgoe", "created_at" => date('Y/m/d H:i:s')],
        ["name" => "fuga", "body" => "fugafuga", "created_at" => date('Y/m/d H:i:s')],
        ["name" => "fizz", "body" => "fizzfizz", "created_at" => date('Y/m/d H:i:s')]
    ];

    return $this->renderer->render($response, 'index.php', compact("comments"));
});

$app->post('/', function(Request $request, Response $response) {
    return $this->renderer->render($response, 'index.php');
});
