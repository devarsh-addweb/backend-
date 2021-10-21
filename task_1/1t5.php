<?php
// PHP implementation of above approach
 
//function to calculate coin
function coin($totalRupees, $X, $Y, $Z)
{
    $one = 0;
    $fifty = 0;
    $twentyfive = 0;
    $result = 0;
    $total = 0;
         
    // Converting each of them in rupees.
    // As we are given totalRupees = 1800    
    $one = $X * 1;
    $fifty = (($Y * 1) / 2.0);
    $twentyfive = (($Z * 1) / 4.0);
 
    $total = $one + $fifty + $twentyfive;
 
    $result = (($totalRupees) / $total);
 
    return $result;
     
}
 
// Driver Code
$totalRupees = 1800;
$X = 1;
$Y = 2;
$Z = 4;
$Rupees = coin($totalRupees, $X, $Y, $Z);
echo "1 rupess coins = ", $Rupees * 1, "\n";
echo "50 paisa coins = ", $Rupees * 2, "\n";
echo "25 paisa coins = ", $Rupees * 4, "\n";
 
// This code is contributed
// by Shashank_Sharma.
?>