<?php 
	/*
        author  : vaibhav maheshwari
        date    : 06-02-2021
    */
    session_start();

    class Validate {
        
        function __construct()
        {
            # code...
        }

        function input($data) {
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlentities($data);
            return $data;
        }


        function nameValidation($value) {
            $value = $this->input($value);
            $reg = '/^[A-z ]+$/i';
            if (empty($value) && !$value) {
                $_SESSION['nameerror'] = 'This field is required.';
            } else if (!preg_match($reg, $value)) {
                $_SESSION['nameerror'] = "Only allowed letter and whitespace.";
            } else {
                if (isset($_SESSION['nameerror'])) {
                    unset($_SESSION['nameerror']);
                }
            }
            return $value;
        }

        function emailValidation($value) {
            $value = $this->input($value);
            if (empty($value) && !$value) {
                $_SESSION['emailerror'] = 'This field is required.';
            } else if (!filter_var($value, FILTER_VALIDATE_EMAIL)) {
                $_SESSION['emailerror'] = "Use valid email format.";
            } else {
                if (isset($_SESSION['emailerror'])) {
                    unset($_SESSION['emailerror']);
                }
            }
            return $value;
        }

        function phoneValidation($value) {
            $value = $this->input($value);
            if (empty($value) && !$value) {
                $_SESSION['phoneerror'] = 'This Field is required.';
            } else if (strlen($value) != 10) {
                $_SESSION['phoneerror'] = 'Phone must be 10 characters.';
            } else {
                if (isset($_SESSION['phoneerror'])) {
                    unset($_SESSION['phoneerror']);
                }
            }
            return $value;
        }

        function titleValidation($value){
            $value = $this->input($value);
            if (empty($value) && !$value) {
                $_SESSION['titleerror'] = 'This Field is required.';
            } else {
                if (isset($_SESSION['titleerror'])) {
                    unset($_SESSION['titleerror']);
                }
            }
            return $value;
        }
        function dateValidation($value){
            $value = $this->input($value);
            if (empty($value) && !$value) {
                $_SESSION['dateerror'] = 'This Field is required.';
            } else {
                if (isset($_SESSION['dateerror'])) {
                    unset($_SESSION['dateerror']);
                }
            }
            return $value;
        }
    }
?>