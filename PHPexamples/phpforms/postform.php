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
    <p> what is your name</p>
<form method="post">
    <p><input name="name" type ="text"></p>
    <p><input  type ="submit" value="Submit"></p>
</form>

<?php
    if($_POST){
        
        $fam = array("me", "myself", "Anee", "I");
        $isknown = false;
        foreach($fam as $value){
            if($value == $_POST['name']){
            
                $isknown = true;
            }
        }
        if($isknown){
            echo "We Know you are here :".$_POST['name']." stay forever";
        }
        else {
            echo "tell me more so I may know you";
        }
    }
    
    ?>
    </body>
    </html>
