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
<div id="navigation">

<a href="#nextyear">Next year</a>
<a href="#previousyear">Previous year</a>
<a href="#firstyear">First year</a>
</div>


<section id="year">
<style>
 #content{
     display:inline;
     padding-right: 2px;
     
 }
 #navigation{
position: absolute;
display: block;
margin-left: 78%;
margin-top: 15%;
 }
 #navigation a{
     display: block;
     font-size: 50px;
 }
</style>


<?php 

for ($i=1960; $i < 2030; $i++) { 
    echo  "<a id='content' href='". $i."'>".$i."</a>";
break;
}

?>
</section>
<style>
.square{
    width:25%;
    height: 80%;
    border-style: solid;
    border-color: grey;
    border-width: thin;
    display: inline-block;
    
    
}

</style>
<section class="square">
<p>Month</p>
<p>Day</p>
<p>Project</p>
<p>Phase</p>
<p>Hours predicted for that day</p>
</section>
<section class="square">
<p>Month</p>
<p>Day</p>
<p>Project</p>
<p>Phase</p>
<p>Hours predicted for that day</p>
</section>
<section class="square">
<p>Month</p>
<p>Day</p>
<p>Project</p>
<p>Phase</p>
<p>Hours predicted for that day</p>
</section>
<section class="square">
<p>Month</p>
<p>Day</p>
<p>Project</p>
<p>Phase</p>
<p>Hours predicted for that day</p>
</section>
<section class="square">
<p>Month</p>
<p>Day</p>
<p>Project</p>
<p>Phase</p>
<p>Hours predicted for that day</p>
</section>
<section class="square">
<p>Month</p>
<p>Day</p>
<p>Project</p>
<p>Phase</p>
<p>Hours predicted for that day</p>
</section>
<section class="square">
<p>Month</p>
<p>Day</p>
<p>Project</p>
<p>Phase</p>
<p>Hours predicted for that day</p>
</section>
<section class="square">
<p>Month</p>
<p>Day</p>
<p>Project</p>
<p>Phase</p>
<p>Hours predicted for that day</p>
</section>
<section class="square">
<p>Month</p>
<p>Day</p>
<p>Project</p>
<p>Phase</p>
<p>Hours predicted for that day</p>
</section>
</body>
</html>