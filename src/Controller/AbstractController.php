<?php

namespace Controller;

use Twig_Loader_Filesystem;
use Twig_Environment;
use App\Connection;

abstract class AbstractController
{
    protected $twig;
    protected $pdo;

    public function __construct()
    {
        // instanciation de Twig
    $loader = new Twig_Loader_Filesystem(APP_VIEW_PATH);
    $this->twig = new Twig_Environment($loader, [
                  'cache' => !APP_DEV,
                  'debug' => APP_DEV,
                ]
    );
    $this->twig->addExtension(new \Twig_Extension_Debug());

    // instanciation de la connexion à la BDD
    $connection = new Connection();
    $this->pdo = $connection->getPdoConnection();
    }

       /**
     * Get the value of pdo
     */ 
    public function getPdo()
    {
        return $this->pdo;
    }
}