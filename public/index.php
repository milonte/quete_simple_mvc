<?php
    require __DIR__ . '/../vendor/autoload.php';
    //require __DIR__ . '/../src/Controller/ItemController.php';
    //use Controller\ItemController;


    $items = new \Controller\ItemController();
    $items->index(); 
    
?>