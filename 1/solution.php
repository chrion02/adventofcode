<?php
//get kint
require_once('../kint.phar');
//get data
$data = array_map('intval', array_values(array_filter(file('data.txt'))));
//1 december - part #1
foreach($data as $number) :
    foreach($data as $number1) :
        if($number + $number1 == 2020) :
            echo $number.' + '.$number1.'= 2020';
            echo '<br>';
            echo $number*$number1.' is the answer';
            die;
        endif;
    endforeach;
endforeach;
//1 december - part #2
foreach($data as $number) :
    foreach($data as $number1) :
        foreach($data as $number2) :
            if($number + $number1 + $number2 == 2020) :
                echo $number.' + '.$number1.' + '.$number2.'= 2020';
                echo '<br>';
                echo $number*$number1*$number2.' is the answer';
                die;
            endif;
        endforeach;
    endforeach;
endforeach;
