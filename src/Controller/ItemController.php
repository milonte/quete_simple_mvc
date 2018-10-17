<?php

namespace Controller;

use Model\Item;
use Model\ItemManager;

class ItemController extends AbstractController
{

    public function index()
    {
        $itemManager = new ItemManager($this->pdo);
        $items = $itemManager->selectAll(); // recup tt les items de la BDD

        $template = $this->twig->load('item.html.twig');
        return $template->render(['items' => $items]);

        // ou
        // return $this->twig->render('item.html.twig', ['items' => $items]);
    }

    public function show(int $id)
    {
        $itemManager = new ItemManager($this->pdo);
        $item = $itemManager->selectOneById($id);

        return $this->twig->render('showItem.html.twig', ['item' => $item]);
    }

    public function add()
    {
        if (!empty($_POST)) {
            // TODO : validations des valeurs saisies dans le form
            // création d'un nouvel objet Item et hydratation avec les données du formulaire 
            $item = new Item();
            $item->setTitle($_POST['title']);

            $itemManager = new ItemManager($this->getPdo());
        // l'objet $item hydraté est simplement envoyé en paramètre de insert()
            $itemManager->insert($item);
        // si tout se passe bien, redirection 
            header('Location: /');
            exit();
        }
        // le formulaire HTML est affiché (vue à créer)
        return $this->twig->render('Item/add.html.twig');
    }

     /**
     * Display item edition page specified by $id
     *
     * @param int $id
     * @return string
     * @throws \Twig_Error_Loader
     * @throws \Twig_Error_Runtime
     * @throws \Twig_Error_Syntax
     */
    public function edit(int $id): string
    {
        $itemManager = new ItemManager($this->getPdo());
        $item = $itemManager->selectOneById($id);

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $item->setTitle($_POST['title']);
            $itemManager->update($item);
        }

        return $this->twig->render('Item/edit.html.twig', ['item' => $item]);
    }

    public function delete(int $id)
    {
        $itemManager = new ItemManager($this->getPdo());
        $itemManager->delete($id);
        header('Location:/');
    }

}

?>