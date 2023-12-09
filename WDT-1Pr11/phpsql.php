<?php
    // Database connection settings
    $servername = "localhost";
    $username = "boot";
    $password = "bingo";
    $database = "kspdb";

    // Create a connection to MySQL
    $conn = new mysqli($servername, $username, $password, $database);

    // Check the connection
    if($conn->connect_error){
        die("Connection failed: " . $conn->connect_error);
    }

    // INSERT operation
    if(isset($_POST["insert"])){
        $name = $_POST["name"];
        $email = $_POST["email"];

        $sql = "INSERT INTO users (name, email) VALUES ('$name', '$email')";

        if($conn->query($sql) === TRUE){
            echo "New record created successfully.";
        } else{
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    }

    // UPDATE operation
    if(isset($_POST["update"])){
        $id = $_POST["id"];
        $newName = $_POST["new_name"];
        $newEmail = $_POST["new_email"];

        $sql = "UPDATE users SET name='$newName', email='$newEmail' WHERE id=$id"; 
        if($conn->query($sql) === TRUE){
            echo "Record updated successfully.";
        } else {
            echo "Error updating record: " . $conn->error;
        }
    }

    // DELETE operation
    if(isset($_POST["delete"])){
        $id = $_POST["id"];

        $sql = "DELETE FROM users WHERE id=$id";

        if($conn->query($sql) === TRUE){
            echo "Record deleted successfully.";
        } else {
            echo "Error deleting record: ". $conn->error;
        }
    }

    $conn->close();
?>

<!DOCTYPE html>
<html>
    <head>
        <title>CRUD Operations</title>
    </head>
    <body>
        <h1>CRUD Operations</h1>
        <!-- Insert Form -->
        <h2>Insert</h2>
        <form action="" method="post">
            <input type="text" name="name" placeholder="Name" required>
            <input type="email" name="email" placeholder="Email" required>
            <input type="submit" name="insert" value="Insert">
        </form>

        <!-- Update Form -->
        <h2>Update</h2>
        <form action="" method="post">
            <input type="number" name="id" placeholder="ID to Update" required>
            <input type="text" name="new_name" placeholder="New Name" required>
            <input type="email" name="new_email" placeholder="New Email" required>
            <input type="submit" name="update" value="Update">
        </form>

        <!-- Delete Form -->
        <h2>Delete</h2>
        <form action="" method="post">
        <input type="number" name="id" placeholder="ID to Delete" required>
        <input type="submit" name="delete" id="Delete">
        </form>
        
    </body>
</html>
