<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Document</title>
    </head>
    <body>


        <?php
        class a {
            function __get($name) {
                if($name==='var1') return 'abc';
                else return $name;
            }
        }
        
        $a = new a;
        echo $a->var1."\n"."<br>";
        echo $a->var2."\n"."<br>";
        
        class b {
            private $var1 = 'abc';
            private $var2 = 'def';
            function __get($name) {
                switch($name) {
                    case 'var1': 
                        return $this->var1;
                        break;
                    case 'var2':
                        return 'ghi';
                        break;
                }
            }
        }
        $b = new b;
        echo $b->var1."\n";
        echo $b->var2."\n";
        class c {}
        $c = new c;
        echo $c->var1."\n";
        ?>
    </body>
</html>