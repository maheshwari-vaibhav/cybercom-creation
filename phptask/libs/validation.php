<?php 
	/*
        author  : vaibhav maheshwari
        date    : 10-02-2021
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


        function fnameValidation($value) {
            $value = $this->input($value);
            $reg = '/^[A-z ]+$/i';
            if (empty($value) && !$value) {
                $_SESSION['fnameerror'] = 'This field is required.';
            } else if (!preg_match($reg, $value)) {
                $_SESSION['fnameerror'] = "Only allowed letter and whitespace.";
            } else {
                if (isset($_SESSION['fnameerror'])) {
                    unset($_SESSION['fnameerror']);
                }
            }
            return $value;
        }

        function lnameValidation($value) {
            $value = $this->input($value);
            $reg = '/^[A-z ]+$/i';
            if (empty($value) && !$value) {
                $_SESSION['lnameerror'] = 'This field is required.';
            } else if (!preg_match($reg, $value)) {
                $_SESSION['lnameerror'] = "Only allowed letter and whitespace.";
            } else {
                if (isset($_SESSION['lnameerror'])) {
                    unset($_SESSION['lnameerror']);
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

        function infoValidation($value){
            $value = $this->input($value);
            if (empty($value) && !$value) {
                $_SESSION['infoerror'] = 'This Field is required.';
            } else {
                if (isset($_SESSION['infoerror'])) {
                    unset($_SESSION['infoerror']);
                }
            }
            return $value;
        }

        function prefixValidation($value){
            $value = $this->input($value);
            if (empty($value) && !$value) {
                $_SESSION['prefixerror'] = 'This Field is required.';
            } else {
                if (isset($_SESSION['prefixerror'])) {
                    unset($_SESSION['prefixerror']);
                }
            }
            return $value;
        }

        function passwordValidation($value){
            $value = $this->input($value);
            if (empty($value) && !$value) {
                $_SESSION['passworderror'] = 'This Field is required.';
            } elseif (strlen($value) < 6) {
                $_SESSION['passworderror'] = 'Password must 6 character long.';
            } else {
                if (isset($_SESSION['passworderror'])) {
                    unset($_SESSION['passworderror']);
                }
            }
            return $value;
        }

        function cpasswordValidation($password,$cpassword){
            $cpassword = $this->input($cpassword);
            if (empty($cpassword) && !$cpassword) {
                $_SESSION['cpassworderror'] = 'This Field is required.';
            } elseif ($password != $cpassword) {
                $_SESSION['cpassworderror'] = 'password and confirm password must be same.';
                
            } else {
                if (isset($_SESSION['cpassworderror'])) {
                    unset($_SESSION['cpassworderror']);
                }
            }
            return $cpassword;
        }
        
    }
?>