Program to calculate the volume and surface area of a sphere.
<?php    
    $radius=100;  
    $pi=3.14;
    echo "<br>";  
    $surface_area=4*$pi *($radius*$radius);
    $vol = (4/3) * $pi * $radius * $radius * $radius;
    echo "<center>volume area-------$vol";
    echo "<center><b>Surface area of sphere--------".(int)$surface_area;  
     
?> 