<?php
class A{
  function __get($undefineVar)//屬性沒有定義時 會進入到這個 magic method,可以屬性多載
  {
    if($undefineVar === "var1")//設置可以依據屬性名稱進一步的處理
    return "觸發 magic method __get()<br>";
   }
    function  __call($methodName, $methodParameter)//方法沒有定義時 會進入這麼magic method 可以作方法的多載
    {
      echo "未定義的方法參數".$methodName."(".print_r($methodParameter,true).")<br>";
    }
}

$a=new A();
//動態宣告
echo $a->var1;//會觸發可用在屬性多載的  magic method 因為沒有在定義類別中

$a->undefinedMethod("參數1","參數2");//會觸發可用在屬性多載的  magic method 因為沒有在定義類別中

class TestOverload
{
    function  __call($methodName,$arguments)
    {

    }
}
$testOverload=new TestOverload();
echo $testOverload->testFunction("參數1");
echo $testOverload->testFunction("參數1","參數2");

echo"~end~";

?>