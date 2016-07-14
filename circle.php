<?php
namespace mvc;
class Circle
{
    private $radius;
    public function __construct($radius)
    {
        $this->radius =$radius;
    }

    /**
     * @return mixed
     */
    public function getRadius()
    {
        return $this->radius;
    }
    public function getArea()
    {
        return $this->radius * $this->radius * 3.14;
    }
    public function printInfo()
    {
        echo"+--------+-------+---------+<br>";
    }
    

}

?>