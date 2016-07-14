<?php
class TypeA{
    private $typeName ="typeA";
    public function getTypeName(){
//        return $this->typeName;
        echo $this->typeName;
    }
}
class TypeB{
    private $typeName ="typeA";
    public function getTypeName(){
        return $this->typeName;
    }
}

function testObject(TypeA $type){
    echo $type->getTypeName()."<br>";
}

function testInt( $i){
    echo $i."<br>";
}
testInt(124);
testObject(new TypeA());
//testObject(new TypeB());

$type = new TypeA();
$type->getTypeName();
testObject($type);


function testArray(array  $array)
{
    echo $array[0]."M<br>";
}

testArray(array('這是陣列'));
testArray(array('第一項','第二項'));
testArray(array('0','鑑值0'));

function tryThis(){
    echo"這是callable function";
}
function testCallable(callable $callbleFunction){
    $callbleFunction();
}
testCallable("tryThis");
testCallable(function (){
    echo "匿名涵式"."<br>";
});

testCallable(array(new TypeA(),'getTypeName'));
echo"<br>end"

?>