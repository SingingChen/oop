<?php
class A
{
    public function __destruct()
    {
       echo"a要被消滅了<br>";
    }

}
class B
{
    public function __destruct()
    {
        echo"B要被消滅了<br>";
    }

}
class C
{
    public function __destruct()
    {
        echo"C要被消滅了<br>";
    }

}

$a=new A();//城市結束時執行desstrucr
$a2=$a;
//echo"準備不在用到 物件a()<br>";
$a=null;//A() 不在被連結
//echo"已經不在用到A()<br>";
$b=new B();
$c=new C();

echo "~end~<br>";//

?>