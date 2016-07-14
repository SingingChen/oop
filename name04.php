<?php
namespace Name01\Name02;
include 'name03.php';
 
use Name01\Name02\Name03\Demo as Another;


const DEMO = 4;
function demo() {
    return 5;
}
class Demo {
    static function do_something() {
        return 6;
    }
}
 
echo demo() . " Name04之中的demo()<br>"; 
echo Demo::do_something() . " Name04之中的demoClass<br>"; 
echo DEMO . " Name04之中的demo常數<br>"; 
 
echo Name03\demo() . " Name03之中的demo()<br>"; 
echo Another::do_something() . "<br>"; 
echo Name03\DEMO . "<br>"; 
                                   
echo \Name01\Name02\Name03\demo() . "<br>"; 
echo Another::do_something() . "<br>"; 
 

echo \Name01\Name02\Name03\DEMO; 

/* 《程式語言教學誌》的範例程式
    http://pydoing.blogspot.com/
    檔名：name04.php
    功能：示範 PHP 程式 
    作者：張凱慶
    時間：西元 2013 年 2 月 */
?>
