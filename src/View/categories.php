<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <meta name ="viewport" content="width=device-width", initial-scale="1">

    <title>MVC 4</title>

    <link rel="stylesheet" href="/assets/css/style.css">
    <link rel="icon" href="/assets/images/favicon.png">
</head>

<body>
    <section>
        <ul>
            <?php foreach ($categories as $category): ?>
                <li><?= $category['name'] ?></li>
            <?php endforeach ?>
        </ul>
    </section>
</body>

</html>