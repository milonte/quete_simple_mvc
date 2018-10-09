<?php

namespace Controller;

use Model\ItemManager;
use Twig_Loader_Filesystem;
use Twig_Environment;

class ItemController
{

    public function __construct()
    {
        $loader = new Twig_Loader_Filesystem(__DIR__.'/../View');
        $this->twig = new Twig_Environment($loader);
    }

    public function index() 
    {
        $itemManager = new ItemManager();
        $items = $itemManager->selectAllItems(); // recup tt les items de la BDD
        //require __DIR__ . '/../View/item.php';

        $template = $this->twig->load('item.html.twig');
        return $template->render(['items' => $items]);

        // ou
        // return $this->twig->render('item.html.twig', ['items' => $items]);
    }

    public function show(int $id) 
    {
        $itemManager = new ItemManager();
        $item = $itemManager->selectOneItem($id);

        $template = $this->twig->load('showItem.html.twig');
        return $template->render(['item' => $item]);
    }

}

?>