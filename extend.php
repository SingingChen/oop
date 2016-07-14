<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
<head>
    <meta charset="UTF-8">
    <title></title>
</head>
<body>
<?php
interface Action{
    public function  move($x,$y);

}
class Animal{
    private $animalType;
    protected $position;

    /**
     * Animal constructor.
     * @param $animalTypeFromOut
     */
    public function __construct($animalTypeFromOut)
    {
$this->animalType=$animalTypeFromOut;
        $this->position=['x'=>0,'y'=>0];
    }

    public function  moveTo($x, $y)
    {
        $this->position['x']=$x;
        $this->position['y']=$y;

        return$this->position;
    }

    public function getAnimalType()
    {
        return $this->animalType;
    }
    public function eat($foodname){
        $this->chew($foodname);
    }
    protected function chew($foodname){
        echo"咀嚼:".$foodname;
    }
    private function digest($foodname){

    }
}
class Cat extends Animal implements Action{
    protected $name;
    public static $staticproperty="test";//靜態屬性,現在可以給值

    public function __construct($name)
    {
        parent::__construct("貓");//parent::

        $this->name=$name;
$this->position=['x'=>5,'y'=>6];
        self::$staticproperty="static property".$name;//使用靜態術性 self::\
    }

    public function test(){
        $this->chew("測試咀嚼");
    }


    public function setName($name)
    {
        $this->name = $name;
    }
    public function getName()
    {
        return $this->name;
    }


    public function  moveTo($x, $y)
    {
        $this->position[5]=$x;
        $this->position[6]=$y;

        return$this->position;
    }

}

class Dog extends Animal{
    protected $name;
    public function __construct($name)
    {
        parent::__construct("狗");//parent::
        $this->name=$name;
    }

    public function test(){
        $this->chew("測試咀嚼");
    }


    public function setName($name)
    {
        $this->name = $name;
    }
    public function getName()
    {
        return $this->name;
    }
    public function  moveTo($x,$y)
    {
        $this->position['x']=$x*2;
        $this->position['y']=$y*2;

        return$this->position;
    }
}

$petCat=new Cat("kitty");
echo $petCat->getName();
echo $petCat->getAnimalType();
$petCat->eat("小魚");
echo $petCat->test();
//echo $pet->positionCat
     Cat::$staticproperty="124";
    echo Cat::$staticproperty."<br>";

$petDog=new Dog("wangwang");
echo $petDog->getName();
echo $petDog->getAnimalType();
$petDog->eat("雞腿");


echo "<br>end<br>"

?>
</body>
</html>
