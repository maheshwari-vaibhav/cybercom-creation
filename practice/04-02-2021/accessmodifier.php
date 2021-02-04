<?php
    /*
        author  : vaibhav maheshwari
        date    : 03-02-2021

        video - 193 - public, private, and protected
       
        public - camel case $name
        protected - $_Tname
        private - $_name

    */
    class BankAccount {
        public $name = ''; //access every where 
        private $_balance = 0; //access to only in class 
        protected $_Temail = ''; //access to in class and it's sub class only
    }

?>