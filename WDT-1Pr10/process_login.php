<?php
    session_start();

    if(isset($_POST['login'])){
        $username = $_POST['username'];
        $password = $_POST['password'];

        // Establish a database connection
        $conn = new mysqli("localhost", "boot", "bingo", "kspdb");

        if($conn->connect_error){
            die("Connection failed: " . $conn->connect_error);
        }

        // Query to check if the user exists
        $sql = "SELECT * from users WHERE username = '$username' AND password = '$password'";
        $result = $conn->query($sql);

        if($result->num_rows == 1){
            // User exists, log them in
            $_SESSION['username'] = $username;
            header("Location: dashboard.php"); // Redirect to a dashboard or welcome poge
        } else {
            // User doesn't exist or the credentials are incorrect
            echo "Invalid credentials. <a href='login.php'>Try Again</a>";
        }

        $conn->close();
    }
?>