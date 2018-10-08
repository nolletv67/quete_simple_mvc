<?php
/**
 * Created by PhpStorm.
 * User: nollet
 * Date: 01/10/18
 * Time: 15:22
 */
namespace Controller;

// src/Controller/ItemController.php
//require __DIR__ . '/../Model/ItemManager.php';

use Model;

/**
 * Class ItemController
 * @package Controllerd
 */
class ItemController{

    public function index(){
        $itemManager = new Model\ItemManager();
        $items = $itemManager->selectAllItems();
        require __DIR__ . '/../View/item.php';
        return $items;
    }
}

?>