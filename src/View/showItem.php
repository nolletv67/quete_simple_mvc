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
    <h1>Item <?= $item['title'] ?></h1>
    <ul>
        <li>Id : <?= $item['id'] ?></li>
    </ul>
    <a href='../?route=items'>Back to list</a>
</main>
</body>

</html>