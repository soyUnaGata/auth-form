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
    <h1>Welcome to My Website
        <?= htmlspecialchars($username) ?>!
    </h1>
</main>
</body>
</html>