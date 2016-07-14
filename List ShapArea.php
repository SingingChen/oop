<?php
namespace mvc;
class ListShapeArea
{
    private  $items= array();//宣告一個陣列 先東西放進來
    public function addItem($item) //放東西的方法
    {
        array_push($this->items, $item);
    }

    public function listItem()
    {
        echo "+-------------+---------------+-------------- -+<br>";
        echo "|    形狀     |      參數     |       面積     |<br>";
        echo "+-------------+---------------+----------------+<br>";

        for($i=0, $n = sizeof($this->items); $i<$n ;$i++)
        {
            if($this->items[$i] instanceof  Circle)
            {
                echo "|      圓形    |" . $this->items[$i]->getRadius()."| ".$this->items[$i]->getArea()."|<br>";
             }
            else if ($this->items[$i] instanceof Triangle)
            {
                echo "|   三角形   | 底:".$this->items[$i]->getBottom()."| 高:".$this->items[$i]->getHeight()."| 面積:".$this->items[$i]->getArea(). "|<br>";
              }
            echo "+--------+-----------+-----------+<br>";

        }
    }
}



?>