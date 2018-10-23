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
<main>
    <h1>Categorie<?= $category['name'] ?></h1>
    <ul>
        <li>Id : <?= $category['id'] ?></li>
    </ul>
    <a href="'../categories'>Back to list</a>"
</main>
</body>

</html>