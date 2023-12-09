<?php
    // Database connection settings
    $servername = "localhost";
    $username = "boot";
    $password = "bingo";
    $database = "kspdb";

    // Create a connection to MySQL
    $conn = new mysqli($servername, $username, $password, $database);

    // Check the connection
    if ($conn->connect_error) {
        die("Connection failed: ". $conn->connect_error);
    }

    // Select all data from the users table
    $sql = "SELECT * FROM users";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        echo "<h1>User Data</h1>";
        echo "<table border='1'>";
        echo "<tr><th>ID</th><th>Name</th><th>Email</th></tr>";

        // Output data of each row
        while($row = $result->fetch_assoc()) {
            echo "<tr><td>".$row["id"] . "</td><td>".$row["name"] . "</td><td>" . $row["email"] . "</td></tr>";
        }

        echo "</table>";
    } else {
        echo "No records found.";
    }

    $conn->close();
?>