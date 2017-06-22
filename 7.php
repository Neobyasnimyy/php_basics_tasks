<?php
/**
 * Created by PhpStorm.
 * User: Andrey
 * Date: 22.06.2017
 * Time: 13:30
 */
$age = 26;
if (0<=$age and $age<=17){
    print "Вам еще рано работать";
} elseif (18<=$age and $age<=59) {
    print "Вам еще работать и работать.";
} elseif ($age>59) {
    print "Вам пора на пенсию";
}
