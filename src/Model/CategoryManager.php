<?php

namespace Model;



class CategoryManager extends AbstractManager
{

    const TABLE = 'category';

    public function __construct(\PDO $pdo)
    {
        parent::__construct(self::TABLE, $pdo);
    }

}


?>