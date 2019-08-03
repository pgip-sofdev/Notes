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
        <p> test form for prime enter number</p>
<form>
<input name="number" type ="text">
<input  type ="submit" value="Go!">
</form>
        <?php
        // put your code here
       
        
       if(is_numeric($_GET['number']) && $_GET['number'] > 0 && $_GET['number']  == round($_GET['number'], 0)) {
               
               /*&& $value > 0 && $value == round($value, 0)){*/
        
        
            $i= 2;
        $isprime = true;
        while($i < $_GET['number']){
            
            if($_GET['number'] % $i ==0){
                // number not prime
                $isprime = false;
                
            }
         $i++;   
        }
        if($isprime) {
            echo "<p>".$i."is prime</p>";
        }
        else {
            echo "<p>".$i."not prime</p>";
        }
        }
       else if ($_GET){
           echo "<p> not whole positive number</p>";
       }
         
        ?>
        
    </body>
</html>
