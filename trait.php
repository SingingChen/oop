<?php
trait animalDidest
{
    function digest($foodName)
    {
        echo"正在消化$foodName<br>";
    }
}
class cat
{
    use animalDidest;
}
class dog
{
    use animalDidest;
}
class whale
{
    use animalDidest;
}

$petCat =new cat();
$petCat->digest("fish~");

$petDog =new dog();
$petDog->digest("bone~");

?>