<?php

function get_types($values):string{
    $types = "";
    foreach($values as $v){
        if(is_int($v)){
            $types .= "i";
        }
        if(is_string($v)){
            $types .= "s";
        }
    }
    return $types;
}
