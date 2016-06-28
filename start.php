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
        
        class Animal{
            private  $animalType;
            protected  $position;
            public function __construct($animalType) {
                $this->animalType=$animalType;
                 $this->position=[0,0];
            }
            
        }
        
        class Cat extends Animal{
            
            protected $name;
        }
        
        class Cat 
        {
            protected $name;//屬性
            protected $position;
            
              public function __construct($name)//方法 建構子
                    {
                $this-> name = $name;
                $this->position=['x'=>0, 'y'=>0];
            }
            
            public function setName ($name)
            {
                $this->name=$name; 
            }
            public function getName()
                    {
                return $this->name;
            }
            
          
            public function  moveTo($x,$y)
            {
                $this->position['x']=$x;
                $this->position['y']=$y;
                
                return$this->position;             
            }    
            public function resetPosition()
            {
                $this->moveTo(0, 0);
                return $this->position;
            }
        }
        
        $pet = new Cat("kitty");
        $pet->setName('nunu');
             
        echo  $pet->getName();
      
        echo"<br>";

             
        
        $movePosition = $pet->moveTo(3, 5);
                echo "(".$movePosition['x'].",".$movePosition['y'] .")";
                echo"<br>";
                
               $movePosition =$pet->resetPosition();
               echo   "(".$movePosition['x'].",".$movePosition['y'] .")";
       
        ?>
    </body>
</html>
