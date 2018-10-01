<?php
/**
 * Created by PhpStorm.
 * User: nollet
 * Date: 01/10/18
 * Time: 15:23
 */
<!DOCTYPE html>
<html>
<head> ... </head>
<body>
    <section>
        <h1>Items</h1>
            <ul>
            <?php foreach ($items as $item) : ?>
                <li><?= $item['title'] ?></li>
            <?php endforeach ?>
            </ul>
        </section>
</body>
</html>

