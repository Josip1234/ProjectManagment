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
<a href="#nextyear">Next year</a>
<a href="#previousyear">Previous year</a>
<a href="#firstyear">First year</a>

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
<?php 

for ($i=1960; $i < 2030; $i++) { 
    echo  "<a id='content' href='". $i."'>".$i."</a>";
}

?>
</section>
<style>
#square{
    margin-left:50%;
    margin-top:-180%;
    
}
</style>
<section id="square">
<p>Some text</p>

</section>
</body>
</html>