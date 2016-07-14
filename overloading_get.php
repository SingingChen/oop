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
        echo $a->var1."\n"."<br>";//找不到var1 ,找get__ 把var1丟進$name裡 var1===var1  ,return "abc"
        echo $a->var2."\n"."<br>";//找不到var1 ,找get__ 把var2丟進$name裡 var2不等於var1  , return "var2"
        
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