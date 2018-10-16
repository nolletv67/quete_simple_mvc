<?php
/**
 * Created by PhpStorm.
 * User: nollet
 * Date: 15/10/18
 * Time: 17:06
 */
?>


<!DOCTYPE html>
<html>
<head> ... </head>
<body>
   <main>
    <h1>Item <?= $item['title'] ?></h1>
<ul>
    <li>Id : <?= $item['id'] ?></li>
</ul>
<a href='index.php?route=items'>Back to list</a>
</main>
</body>
</html>