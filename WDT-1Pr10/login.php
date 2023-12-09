<!DOCTYPE html>
<html>
    <head>
        <title>Login</title>
    </head>
    <body>
        <form action="process_login.php" method="post">
            <label for="username">Username:</label>
            <input type="text" name="username" required><br><br>

            <label for="password">Password:</label>
            <input type="password" name="password" required><br><br>

            <input type="submit" name="login" value="Login">
        </form>
    </body>
</html>