<?php
namespace mvc;
class Triangle{
    private $bottom;
    private  $height;

    public function __construct($bottom, $height)
    {
        $this->bottom=$bottom;
        $this->height=$height;
    }

    public function getBottom()
    {
        return $this->bottom;
    }

    public function getHeight()
    {
        return $this->height;
    }

    /**
     * @param mixed $bottom
     */
    public function getArea()
    {
        return $this->bottom * $this->height /2 ;
    }
}

?>