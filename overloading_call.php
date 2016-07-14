<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Document</title>
    </head>
    <body>
        <?php

        class a {
            function __call($name, $args) {
                echo $name . " : " . print_r($args, true) . "\n";
            }
        }
        $a = new a;
        $a->func1('abc', 'def');//找不到func1 就找__call, $name=func1 , $args=('abc', 'def') ,
        echo "<br>";

        class b {
            /**
             * @param $name
             * @param $args
             * @return int|string
             * @throws Exception
             */
            function __call($name, $args) {
                switch($name) {
                    case 'add':
                        if(count($args)===2) {
                            if(is_numeric($args[0]) && is_numeric($args[1]))
                                return $args[0]+$args[1];
                            if(is_string($args[0]) && is_string($args[1]))
                                return $args[0].$args[1];
                        }else
                        {  return "飛飛飛<br>";}
                        
                    default:
                        throw new Exception("[warning] b::$name method not found.\n");
                }
            }
        }

        $b = new b;
        echo $b->add(2,3)."\n<br>";
        echo $b->add('hello', ' world.')."\n";
        echo "<br>";
        echo $b->add(2,3,4)."\n";
        
        try {
            echo $b->add(2, ' world.')."\n";  
        }
        catch (Exception $e) {
            echo $e->getMessage();
        }

        ?>
    </body>
</html>