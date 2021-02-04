<?php
    /*
        author  : vaibhav maheshwari
        date    : 03-02-2021
        
        video - 189 - Introduction to OOP
        video - 190 - Classes, Properties, and Methods
        video - 191 - Return a Property Value
        video - 192 - Changing a Property Value
    */

    class BankAccount {
        public $balance = 1000;

        public function displayBalance()
        {
            return $this->balance;
        }

        public function withdraw($amount)
        {
            try {
                if ($this->balance < $amount) {
                    throw new Exception('Not sufficient balance!!!');
                } else {
                    $this->balance = $this->balance - $amount;
                }
                
            } catch (Exception $ex) {
                echo $ex->getMessage();
            }
        }
    }
    
    $vaibhav = new BankAccount;
    $vaibhav->withdraw(1100);
    echo $vaibhav->displayBalance();

?>