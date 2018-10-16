<?php
/**
 * Created by PhpStorm.
 * User: nollet
 * Date: 15/10/18
 * Time: 17:36
 */

// routing.php
$routes = [
    'Item' => [ // Controller
        ['index', '/', 'GET'], // action, url, HTTP method
        ['show', '/item/{id}', 'GET'], // action, url, HTTP method
    ],
];