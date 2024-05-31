<?php

use Framework\Session;

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://www.phptutorial.net/app/css/style.css">
    <title>Welcome page</title>
</head>
<body>
<main>
    <?php if (Session::has('user')): ?>
        <h1>Welcome to My Website
            <?= Session::get('user')['username'] ?>!
        </h1>

        <a href="/home">Log out</a>
    <?php endif; ?>
</main>
</body>
</html>