<?php

/* 
 * PHP file that contains a function to display the name of the project
 * in the format xxx.xxx
 */

function titleDisplay($input){
    $p1= strripos($input, " ");
    $sub_string= substr($input, 0,$p1);
    $word = explode(" ",$sub_string);
    $end = substr($input,$p1+1,3);
    
    $short = "";

    foreach ($word as $w) {
        if (!ctype_alnum($w) && !is_numeric($w)){
            $short .= "_";                    
        }
        else{
            
            $short .= $w[0];  
        }
    }
    if(strlen($short) == 1){
        $short = substr($input, 0,3);
    }
    $short .= ".".$end;
    return strtolower($short) ;
}