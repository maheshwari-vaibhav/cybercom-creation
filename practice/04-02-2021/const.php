<?php
    /*
        author  : vaibhav maheshwari
        date    : 03-02-2021

        video - 194 - Constants
       

    */
    class Circle {
        const pi = 3.14;

        public function area($radius)
        {
            return self::pi * ($radius * $radius); //access const in class self::const_name
        }
    }
    $circle = new Circle;

    // echo Circle::pi; //to access const outside class class_name::const_name
    echo $circle->area(100);
?>



