<?php
    /*
        author  : vaibhav maheshwari
        date    : 25-01-2021
    */

    /*
        $type - for type of password 
            1- combination of small number sybmol capital
            2- combination of small number sybmol 
            3- combination of small number capital
            4- combination of small sybmol capital
            5- combination of number sybmol capital
        $length - length of password to be generate

    */
    function generatePassword($type,$length)
    {
    	$small = 'abcdefghijklmnopqrstuvwxyz';
        $num = '0123456789';
        $symbol = '!@#$%^&()';
        $capital = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $str = '';
        switch ($type) {
            case 1:
                $str = $small.$num.$symbol.$capital;
                break;
            case 2:
                $str = $small.$num.$symbol;
                break;
            case 3:
                $str = $small.$num.$capital;
                break;
            case 4:
                $str = $small.$symbol.$capital;
                break;
            case 5:
                $str = $num.$symbol.$capital;
                break;

            default:
                $str = $small.$num;
                break;
        }

        return substr(str_shuffle($str), 0, $length);
    }

    echo 'Your Password is : <b>'.generatePassword(1,6).'</b>';
   
?> 