<?php

$a = 10;
$b = 6;
$operator = "%";
if (is_numeric($a)==false){
    echo "Первая переменная не является числом";
}elseif (is_numeric($b)==false){
    echo "Вторая переменная не является числом";
}else{
    if ($operator=='+'){
        echo "$a {$operator} $b = ",$a+$b;
    }elseif ($operator == '-'){
        echo "$a {$operator} $b = ",$a-$b;
    }elseif ($operator =='*'){
        echo "$a {$operator} $b = ",$a*$b;
    }elseif ($operator=='/'){
        if ($b!=0){
            echo "$a {$operator} $b = ",$a/$b;
        }else{
            echo "На ноль делить нельзя!";
        }
    }elseif ($operator=='%'){
        if ($b!=0){
            echo "$a {$operator} $b = ",$a%$b;
        }else{
            echo "Нельзя узнать остаток от деления на ноль";
        }
    }else{
        echo "Непрвильный ввод оператора";
    }
}




//
//else {
//    echo "Неправильный ввод оператора";
//}
