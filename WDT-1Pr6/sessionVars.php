<?php
    //  Start a new session or resume the existing session
    session_start();

    // Set session variables
    $_SESSION['username'] = "Atharv Naik";
    $_SESSION['email'] = "atharvnaik@email.com";
    $_SESSION['user_id'] = 16022004;

    // Access and display session variables
    echo "Welcome, " . $_SESSION['username'] . "<br>";
    echo "Your email is: " . $_SESSION['email'] . "<br>";

    // Checking for session variables
    if (isset($_SESSION['user_id'])) {
        echo 'User ID = ' . $_SESSION['user_id'] . '<br>';
    } else {
        echo 'User ID not set. <br>';
    }
    
    // Modify session variables
    $_SESSION['email'] = "email@sample.com";
    echo "Updated email: " . $_SESSION['email'] . "<br>";

    // Unset or remove a specific session variable
    unset($_SESSION['email']);
    echo "Email unset: " . (isset($_SESSION['email']) ? "Email is set. <br>" : "Email is not set <br>");

    // Destroy the session
    session_destroy();
    echo "Session destroyed.";
?>
