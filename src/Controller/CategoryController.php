<?php

namespace Controller;
use Twig_Loader_Filesystem;
use Twig_Environment;

use Model\CategoryManager;

class CategoryController extends AbstractController
{

    public function index() 
    {
        $categoryManager = new CategoryManager($this->pdo);
        $categorys = $categoryManager->selectAll();
        
        $template = $this->twig->load('category.html.twig');
        return $template->render(['categories' => $categorys]);
    }

    public function show(int $id) 
    {
        $categoryManager = new categoryManager($this->pdo);
        $category = $categoryManager->selectOneById($id);

        $template = $this->twig->load('showCategory.html.twig');
        return $template->render(['category' => $category]);
    }

}

?>