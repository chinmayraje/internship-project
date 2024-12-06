<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Faculty Login</title>
    <link rel="stylesheet" href="../css/styles.css">
</head>
<body>
    <div class="login-page">
        <h2>Faculty Login</h2>
        <form action="../php/login.php" method="post">
            <label for="email">Email (Somaiya ID):</label>
            <input type="email" id="email" name="email" required>
            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required>
            <input type="hidden" name="role" value="hod">
            <button type="submit">Login</button>
        </form>
    </div>
</body>
</html>