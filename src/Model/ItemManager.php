<?php

// src/Model/ItemManager.php

namespace Model;

require __DIR__ . '/../../app/db.php';


Class ItemManager
{
    // récupération de tous les items
    public function selectAllItems(): array
    {
        $pdo = new \PDO(DSN, USER, PASS);
        $query = "SELECT * FROM item";
        $res = $pdo->query($query);
        return $res->fetchAll();
    }

    // récupération d'un seul item
    public function selectOneItem(int $id) : array
    {
        $pdo = new \PDO(DSN, USER, PASS);
        $query = "SELECT * FROM item WHERE id = :id";
        $statement = $pdo->prepare($query);
        $statement->bindValue(':id', $id, \PDO::PARAM_INT);
        $statement->execute();
        return $statement->fetch();
    }
}
?>