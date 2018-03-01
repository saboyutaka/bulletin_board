<?php

use Slim\Http\Request;
use Slim\Http\Response;

// Routes

$app->get('/', function(Request $request, Response $response, array $args) {

    $sql = 'SELECT * FROM comments ORDER BY created_at DESC';
    $query = $this->db->prepare($sql);
    $query->execute();

    $comments = $query->fetchAll(PDO::FETCH_ASSOC);

    return $this->renderer->render($response, 'index.php', compact("comments"));
});

$app->post('/', function(Request $request, Response $response) {
    $body = $request->getParsedBody();
    $name = $body['name'] ?: "名無し";
    $body = $body['body'];

    $params = ["name" => $name, "body" => $body];
    $stmt = $this->db->prepare("INSERT INTO comments (name, body) VALUES (:name, :body)");
    $stmt->execute($params);

    return $response->withRedirect('/');
});
