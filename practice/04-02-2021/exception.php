<?php
    /*
        author  : vaibhav maheshwari
        date    : 03-02-2021

        video - 185 - Throwing an Exception
        video - 186 - try, throw, catch

    */

    $age = 11;


    try {
        if ($age > 18) {
            echo 'ok';
        } else {
            throw new Exception('Somthing went wrong!');
        }
    } catch (Exception $ex) {
        echo 'Error : '.$ex->getMessage();
    }
    

?>