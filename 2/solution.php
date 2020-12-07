<?php
//get kint
require_once('../kint.phar');
//get data
$data = array_filter(file('data.txt'));
//2 december - part #1
function part1($data){
    $invalid_passwords = 0;
    //make password objects
    foreach($data as $password) :
        $data2 = str_replace(':','',explode(' ',$password));
        $data_objects[] = (object)['count' => $data2[0], 'letter' => $data2[1], 'pass' => $data2[2]];
    endforeach;
    //find invalid passwords
    foreach ($data_objects as $object) :
        $letter_count = substr_count($object->pass,$object->letter);
        if($letter_count >= explode('-',$object->count)[0] && $letter_count <= explode('-',$object->count)[1]) :
            $invalid_passwords++;
        endif;
    endforeach;
    echo $invalid_passwords;
}

//2 december - part #2
function part2($data){
    $invalid_passwords = 0;
    //make password objects
    foreach($data as $password) :
        $data2 = str_replace(':','',explode(' ',$password));
        $data_objects[] = (object)['count' => $data2[0], 'letter' => $data2[1], 'pass' => $data2[2]];
    endforeach;
    //find invalid passwords
    foreach ($data_objects as $object) :
        $first_number = explode('-',$object->count)[0] - 1;
        $second_number = explode('-',$object->count)[1] -1;
    
        $first_number_check = substr_count($object->pass,$object->letter,$first_number,1);
        $second_number_check = substr_count($object->pass,$object->letter,$second_number,1);
    
        if($first_number_check == 1 && $second_number_check == 0 || $first_number_check == 0 && $second_number_check == 1) :
            $invalid_passwords++;
        endif;
    endforeach;
    echo $invalid_passwords;
}
part1($data);