<?php require "./db/database.php" ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/index.css">
    <title>Document</title>
</head>
<body>
    <h1>Hier zie je een lijst met verdachte links en het telefoonnummer van de verdachte.</h1>

    <?php
        $sql = "SELECT * FROM links";
        $query = $conn->query($sql);
        $posts = $query->fetchAll(2);
    ?>

    <ul>
        <?php foreach($posts as $post): ?>
        <div class="data">
            <li>Link: <?= $post['links'] ?></li>
            <br>
            <li>Telefoonnummer: <?= $post['telefoonnummer'] ?></li>
        </div>
        <?php endforeach ?>
    </ul>
</body>
</html>