<?php
    /*
        author  : vaibhav maheshwari
        date    : 05-02-2021
        
        video - 196 - Multiple Instances of Classes

    */

    class BankAccount {
        public $balance = 0;

        public function displayBalance()
        {
            return $this->balance;
        }

        public function deposite($amount)
        {
            $this->balance = $this->balance + $amount;
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
    $vaibhav->deposite(1100);
    echo 'vaibhav : '.$vaibhav->displayBalance();
    echo '<br>';
    $renil = new BankAccount;
    $renil->deposite(1000);
    echo 'renil : '.$renil->displayBalance();

?>