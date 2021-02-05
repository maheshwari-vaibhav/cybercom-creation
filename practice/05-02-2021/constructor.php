<?php
    /*
        author  : vaibhav maheshwari
        date    : 05-02-2021
        
        video - 195 - Class Constructor
    */

    class BankAccount {
        public $balance = 1000;
        /*
        simple constructor
        public function __construct()
        {
            echo $this->balance;
        }
        */

        //parameterised constructor
        public function __construct($balance)
        {
            echo $balance;
        }
    }
    
    $vaibhav = new BankAccount(1000);
    

?>