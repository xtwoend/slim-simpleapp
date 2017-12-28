<?php

namespace App\Controllers;


use Psr\Container\ContainerInterface;
use Slim\Http\Request;
use Slim\Http\Response;

/**
* 
*/
class Question
{
    protected $app;

    public function __construct(ContainerInterface $app) {
       $this->app = $app;
    }

    public function __invoke(Request $req, Response $res, array $args = [])
    {
        $users = $this->app->db->select('users', '*');
        return $this->app->renderer->render($res, 'users.phtml', compact('users'));
    }
}