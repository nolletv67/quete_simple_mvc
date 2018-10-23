<?php

namespace Controller;
use Model;

class CategoryController {

    public function index() {
        $itemManager = new Model\CategoryManager();
        $categories = $itemManager->selectAllCategories();

        require __DIR__ . '/../View/categories.php';
    }

    public function show(int $id) {
        $itemManager = new Model\CategoryManager();
        $category = $itemManager->selectOneCategory($id);

        require __DIR__ . '/../View/showCategory.php';
    }
}