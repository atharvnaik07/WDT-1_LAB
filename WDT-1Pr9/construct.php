<?php
    // Define a class
    class Car {
        // Properties (variables)
        public $brand;
        public $model;
        public $year;

        // Constructor method
        public function __construct($brand, $model, $year){
            $this->brand = $brand;
            $this->model = $model;
            $this->year = $year;
        }

        // Method to display car information
        public function displayInfo(){
            echo "Brand: " . $this->brand . "<br>";
            echo "Model: " . $this->model . "<br>";
            echo "Year: " . $this->year . "<br>";
        }
    }

    // Create objects (instances) of the class
    $car = new Car("Dodge", "Demon", 2023);

    // Call methods on objects
    echo "Car Details:<br>" ;
    $car->displayInfo();
?>