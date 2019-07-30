<!DOCTYPE html>
<!--
WORKING WITH VARIABLES 
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>TODO supply a title</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <h1>php arrays</h1>
        <?php



$arrayone = array("mike" , "shaq", "blake", "forest");

echo " This would return error :echo $arrayone;";

?>
        <p><b>instead use<b/> print_r and use echo $varable[2] to get an element</p>
        
        <?php
        print_r($arrayone);
        ?>
        <br>
        <?php
        echo $arrayone[2];
        
        $arraytwo[0] = "rob";
        $arraytwo[1] = "dickens";
        $arraytwo[5] = "Knob";
        $arraytwo["string"] = "yeah its cool";
        ?>
        <br>
        <?php
        print_r($arraytwo);
       
        $codelanguagearray = array("oop1" => "C#", "oop2" => "Java", "Web" => "php", "Web2" => "html");
        ?>
        <br>
        <?php
        print_r($codelanguagearray);
        
        ?>
        <p><br> use sizeof to get array size in php</p>
        <?php
        echo sizeof($arraytwo);
        print_r($arrayone);
        $arrayone [] = "kelly";
        ?>
        <br>
        <?php
        print_r($arrayone);
        unset($arrayone[4]);
        
        ?>
        <br>
        <?php
        print_r($arrayone);
        ?>
        <h1>If statements in PHP</h1>
        <p>for if statements you will always need : if(condition){what to do if condition met} </p>
        <?php
        
        $isblack = TRUE;
        if($isblack == TRUE)
            {
            echo "pot cant talk";
            }
            else{
                echo "pot can talk crap to kettle";
            }
            ?>
        <br>
        <h2>can a 19 year old buy beer and drive a car?</h2>
        <?php
            $age = 19;
        if($age >= 21 && $age >= 16)
            {
            echo "you can buy beer and drive ";
            }
            elseif($age >= 16 ){
                echo "you cant buy beer but can drive";
            }
            else
                {
                echo "you can not buy beer";
            }
        if ($age > 21 || $age > 16){
            echo "alost there";
        }
        
        ?>
    </body>
</html>


