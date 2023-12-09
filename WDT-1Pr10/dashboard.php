<?php
    session_start();

    if(!isset($_SESSION['username'])){
        header("Location: login.php"); // Redirect to the login page if not logged in
        exit();
    }

    // Display dashboard content here
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Dashboard</title>
    </head>
    <body>
        <h1>Welcome, <?php echo $_SESSION['username']; ?>!</h1>
        <p>This is your dashboard content.</p>
        <a href="logout.php">Logout</a>
    </body>
</html>