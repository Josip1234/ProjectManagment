<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calendar </title>
    <?php 
       ini_set('display_errors',0);
    
    ?>
</head>
<body>
<section id="year">
<style>
 #content{
     display:block;
     
 }
</style>

<?php  
   for ($i=1960; $i < 2030; $i++) { 
       echo  " <span id='content'>". $i."</span>";
   }


?>
</section>
    
</body>
</html>