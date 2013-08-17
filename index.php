<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        
        function chargerClasse($class){
            
            require $class . '.class.php';
        }
        
        spl_autoload_register('chargerClasse');
        
        $perso1 = new Personnage;
        echo Personnage::hello();
        
        /*$perso2 = new Personnage;
        echo Personnage::hello();*/
        ?>
    </body>
</html>
