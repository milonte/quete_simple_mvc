<?php
    require __DIR__ . '/../vendor/autoload.php';

    $items = new \Controller\ItemController();
    $items->index(); 
    
?>