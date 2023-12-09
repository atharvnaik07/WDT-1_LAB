<!DOCTYPE html>
<html>
    <head>
        <title>Registration Data</title>
    </head>
    <body>
        <h1>Registration Data</h1>
        <?php
            if($_SERVER["REQUEST_METHOD"] === "POST"){
                $first_name = $_POST["first_name"];
                $last_name = $_POST["last_name"];
                $gender = $_POST["gender"];
                $email = $_POST["email"];
                $country = $_POST["country"];
                $interests = isset($_POST["interests"]) ? implode(", ", $_POST["interests"]) : "None selected";

                echo "<p><strong>First Name:</strong> $first_name</p>";
                echo "<p><strong>Last Name:</strong> $last_name</p>";
                echo "<p><strong>Gender:</strong> $gender</p>";
                echo "<p><strong>Email:</strong> $email</p>";
                echo "<p><strong>Country:</strong> $country</p>";
                echo "<p><strong>Interests:</strong> $interests</p>";
            } else {
                echo "<p>No data submitted.</p>";
            }
        ?>
    </body>
</html>