<?php
/**
 * Created by PhpStorm.
 * User: nollet
 * Date: 01/10/18
 * Time: 15:23
 */
namespace Model;

// src/Model/ItemManager.php
require __DIR__ . '/../../app/db.php';

/**
 * Class itemManager
 */

class itemManager{
    // récupération de tous les items
    public function selectAllItems()
    {
        $pdo = new \PDO(DSN, USER, PASS);
        $query = "SELECT * FROM item";
        $res = $pdo->query($query);
        return $res->fetchAll();
    }
}

?>