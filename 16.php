<?php
$a =7;
$b =5;
if (is_int($a)==false){
    echo "a должно быть числом";
}elseif (is_int($b)==false) {
    echo "b должно быть числом";
}else{
    if ($a>$b){
        print "$a больше $b";
    }else{
        print "$b больше $a";
    }
}