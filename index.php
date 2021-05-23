<?php

$pattern = '/^[A-Z]/';
$name = 'Thanh nguyen';

function isFirstUpper($pattern,$str){
    if (preg_match($pattern,$str)){
        echo("String's first character is uppercase");
    }else{
        echo("String's  first character isn't uppercase");
    }
}

isFirstUpper($pattern,$name);