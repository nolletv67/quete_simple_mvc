<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <meta name ="viewport" content="width=device-width", initial-scale="1">

    <title>MVC 3</title>

    <link rel="stylesheet" href="/assets/css/style.css">
    <link rel="icon" href="/assets/images/favicon.png">
</head>

<body>
    <section>
        <h1>Items</h1>
            <ul>
            <?php foreach ($items as $item): ?>
                <li><?= $item['title'] ?></li>
            <?php endforeach ?>
            </ul>
    </section>
</body>

</html>




