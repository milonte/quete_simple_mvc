<?php

namespace Controller;
use Twig_Loader_Filesystem;
use Twig_Environment;


use Model\CategoryManager;

class CategoryController
{

    public function __construct()
    {
        $loader = new Twig_Loader_Filesystem(__DIR__.'/../View');
        $this->twig = new Twig_Environment($loader);
    }

    public function index() 
    {
        $categoryManager = new CategoryManager();
        $categorys = $categoryManager->selectAllCategory();
        
        $template = $this->twig->load('category.html.twig');
        return $template->render(['categories' => $categorys]);
    }

    public function show(int $id) 
    {
        $categoryManager = new categoryManager();
        $category = $categoryManager->selectOneCategory($id);

        $template = $this->twig->load('showCategory.html.twig');
        return $template->render(['category' => $category]);
    }

}

?>