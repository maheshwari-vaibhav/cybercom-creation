<?php
    /*
        author  : vaibhav maheshwari
        date    : 25-01-2021
    */

    // Video - 35 - String Functions Part 1

    //word count

    $string = 'hello i am vaibhav maheshwari.';

    echo str_word_count($string); //return the count of word
    echo '<br>';
    echo str_word_count($string,0); //return the count of word
    echo '<br>';
    print_r(str_word_count($string,1)); //return the array of word with number
    echo '<br>';
    print_r(str_word_count($string,2)); //return the array of word with position
    echo '<br>';

    // Video - 36 - String Functions Part 2

    echo '<br>';

    //string shuffle

    echo str_shuffle($string);

    echo '<br>';

    //substr and strlen function
    $half = substr(str_shuffle($string), 0,strlen($string)/2);
    echo $half;
    echo '<br>';

    //strrev function

    echo strrev($string);

    echo '<br>';

    // Video - 37 - String Functions Part 3

    $string_one = 'hello i am vaibhav maheshwari.';
    $string_two = 'hello i am renil soni.';

    similar_text($string_one, $string_two, $result);
    echo $result;

    echo '<br>';

    // Video - 38 - String Functions Part 4

    //trim,rtrim,ltrim

    $stringdata = ' Hello ';

    echo strlen($stringdata);
    echo '<br>';

    echo strlen(trim($stringdata));
    echo '<br>';

    echo strlen(rtrim($stringdata));
    echo '<br>';

    echo strlen(ltrim($stringdata));
    echo '<br>';


    //addslashes, stripcslashes and html_entities function


    $data = 'hello this is <img src="abc.jpg">';
    $string_slahed = htmlentities(addslashes($data));
    echo $string_slahed;

    echo '<br>';

    echo stripcslashes($string_slahed);




?>