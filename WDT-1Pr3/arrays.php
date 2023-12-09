<?php
    /*Indexed Arrays*/
    // Creating an indexed array
    $fruits = array("Apple", "Banana", "Cherry", "Date");
    // Accessing elements
    echo "The first fruit is " . $fruits[0]; // Outputs: The first fruit is Apple
    // Modifying an element
    $fruits[1] = "Orange";
    // Adding an element
    $fruits[] = "Grapes";
    // Iterating through an indexed array
    echo "<br>";
    foreach ($fruits as $fruit) {
        echo $fruit . ", ";
    }
    echo "<br><br>";
    // Outputs: Apple, Orange, Cherry, Date, Grapes,

    /*Associative Arrays*/
    // Creating associative array
    $person = array(
        "name" => "Krishna",
        "age" => 19,
        "email" => "sample@email.com"
    );
    // Accessing elements
    echo "Name: " . $person["name"];
    echo ", Age: " . $person["age"];
    // Modifying an element
    $person["email"] = "email@sample.com";
    //Adding an element
    $person["city"] = "Pune";
    // Iterating through an associative array
    echo "<br>";
    foreach($person as $key => $value){
        echo "$key: $value, ";
    }
    echo "<br><br>";

    /*Multidimensional Array*/
    $employees = array(
        array("Krishna", 19, "krishna@email.com"),
        array("Atharv", 17, "atharv@email.com"),
        array("Mohit", 20, "mohit@email.com")
    );
    // Accessing elements
    echo "First employee's name: " . $employees[0][0];
    echo ", Second employee's email: " . $employees[1][2];
    //Iterating through a multidimensional array
    echo "<br>";
    foreach($employees as $employee){
        echo "Name: " . $employee[0] . ", Age: " . $employee[1] . ", Email: " . $employee[2] . "<br>";
    }
?>