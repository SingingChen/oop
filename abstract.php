<?php
abstract class animal
{
    private $animalType;
    public function  setAnimalType($animalType)
    {
        $this->animalType=$animalType;
    }
    public function getAnimalType()
    {
        return$this->animalType;
    }
    abstract public function move($x,$y);//抽象類別疣子類別實現
    public function getFood($foodName){
        echo"得到".$foodName."<br>";
    }
}
class whale extends animal{
    private $position;
    public function __construct()
    {
        $this->setAnimalType("鯨魚");
        $this->position=['x'=>0,'y=>0'];
    }
    public function move($x,$y)
    {
        $this->position['x']+=$x;
        $this->position['y']+=$y;

        return $this->position;
    }
}
$whale=new whale();
