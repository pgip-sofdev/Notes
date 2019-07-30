<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
 echo 'hi, Welcome'; ?>
<!doctype html>
<html>
<head>
<title></title>   
</head>

<body>

<header>
<img src="images/logo.jpg" alt="Logo that says Pat's Hause" width="200" height="63">
<h1>More Practice w/ PHP</h1>
</header>

<!--<nav>
<ul>
<li><a href="index.html">Home</a></li>
<li><a href="aboutus.html">About Us </a></li>
</ul>
</nav>-->


<main>
    <h2>Looping through integers</h2>
   <?php
   for ($i = 0; $i <= 15; $i++ )
   {
   echo $i.":, ";
       
   }
   
   for ($i = 0; $i <= 30; $i = $i+2 )
   {
   echo $i."<br>";
       
   }
   
   ?>
    <h2>Looping through arrays</h2>
    <?php
    $family = array("Raq", "Shaq", "Anne", "Benny");
            for ($i = 0; $i < sizeof($family); $i++ )
   {
   echo$family[$i].":, ";
       
   }
   foreach ($family as $key => $value){
       echo " <br>the".$key."value is : ".$value.", " ;
   }
   foreach ($family as $key => $value){
       $family[$key] = $value." Bailey";
       echo " < : the".$key."value is : ".$value.", " ;
   }
    ?>
    <h2>While loops</h2>
    <?php
    $w = 0;
    while($w < 10)
    {
        echo  $w.": ,";
        $w++;
    }
    $f = 5;
    while($f < 50)
    {
        echo  $f.": ,";
        $f = $f+5;
    }
    $test = array("we", "qw", "as", "df");
    $z= 0;
    while($z < sizeof($test)){
        echo $test[$z]."<br>";
        $z++;
    }
    ?>
        
</main>
<footer></footer>  
</body>
</html>