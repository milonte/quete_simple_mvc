<?php

namespace Model;

// src/Model/CategoryManager.php
require __DIR__ . '/../../app/db.php';


class CategoryManager 
{
    // récupération de tous les Categorys
    public function selectAllCategory() :array
    {
        $pdo = new \PDO(DSN, USER, PASS);
        $query = "SELECT * FROM categorie";
        $res = $pdo->query($query);
        return $res->fetchAll();
    }

    public function selectOneCategory(int $id) : array
    {
        $pdo = new \PDO(DSN, USER, PASS);
        $query = "SELECT * FROM categorie WHERE id = :id";
        $statement = $pdo->prepare($query);
        $statement->bindValue(':id', $id, \PDO::PARAM_INT);  
        $statement->execute();
        // contrairement à fetchAll(), fetch() ne renvoie qu'un seul résultat
        return $statement->fetch();
    }
}





?>