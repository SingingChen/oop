<?php


function printHeader()
{
    echo "+-------+-------+-------+<br>";
    echo "| 形狀 | 參數 | 面積 |<br>";
    echo "+-------+-------+-------+<br>";
}

function printItem($item, $parameter)
{
    switch($item)
    {
        case "正方形":
            $area = $parameter *$parameter;
            break;
        default:
            $item = "沒有定義$item";
            $area = "無法計算";
            break;
    }
    echo "| $item | $parameter | $area |<br>";
    echo "+-------+-------+-------+<br>";
}
//printHeader();
//printItem("正方形",3);
//printItem("三角形",4);
//printItem("正方形",5);
//printItem("正方形",6);
//printItem("正方形",7);


include "List ShapArea.php";
include_once "circle.php";
include_once "triangle.php";

use mvc\ListShapeArea;
use mvc\Circle;
use mvc\Triangle;


$list = new ListShapeArea();
//$list->addItem(new Circle(10));
$list->addItem(new Triangle(2,2));

$list->listItem();
?>