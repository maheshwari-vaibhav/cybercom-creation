<?php
    /*
        author  : vaibhav maheshwari
        date    : 05-02-2021
        
        video - 197 - extends Part 1
        video - 198 - extends Part 2


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

    class SavingAcoount extends BankAccount {
        
    }
    
    
    $vaibhav = new BankAccount;
    $vaibhav->deposite(1100);
    echo 'vaibhav : '.$vaibhav->displayBalance();
    echo '<br>';
    $vaibhav_saving = new SavingAcoount;
    $vaibhav_saving->deposite(1000);
    echo 'vaibhav_saving : '.$vaibhav_saving->displayBalance();

?>