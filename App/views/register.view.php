<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://www.phptutorial.net/app/css/style.css">
    <title>Register</title>
</head>
<body>
<main>
    <form action="/register" method="POST">
        <h1>Sign Up</h1>
        <div>
            <label for="username">Username:</label>
            <input type="text" name="username" id="username" value="<?= htmlspecialchars($user['username'] ?? '') ?>">
        </div>
        <?= loadPartial('errors', ['errors' => $errors ?? []]) ?>
        <div>
            <label for="email">Email:</label>
            <input type="email" name="email" id="email" value="<?= htmlspecialchars($user['email'] ?? '') ?>">
        </div>
        <div>
            <label for="password">Password:</label>
            <input type="password" name="password" id="password">
        </div>
        <div>
            <label for="password_confirm">Password Again:</label>
            <input type="password" name="password_confirm" id="password_confirm">
        </div>
        <div>
            <label for="agree">
                <input type="checkbox" name="agree" id="agree" value="yes"/> I agree
                with the
                <a href="#" title="term of services">term of services</a>
            </label>
        </div>
        <button type="submit">Register</button>
        <footer>Already a member? <a href="/login">Login here</a></footer>
    </form>
</main>
</body>
</html>