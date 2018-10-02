<?php

namespace Controller;

use Model\CategoryManager;

class CategoryController
{
    public function index() 
    {
        $categoryManager = new CategoryManager();
        $categorys = $categoryManager->selectAllCategory();
        require __DIR__ . '/../View/category.php';
    }

    public function show(int $id) 
    {
        $categoryManager = new categoryManager();
        $category = $categoryManager->selectOneCategory($id);

        require __DIR__ . '/../View/showCaterogy.php';
    }

}

?>