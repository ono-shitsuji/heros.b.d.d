<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        header($_SERVER["SERVER_PROTOCOL"]." 404 Not Found", true, 404);
        include("notFound.php");
    ?>