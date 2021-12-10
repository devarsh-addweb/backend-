13. Read an array and print sum of elements stored at even indexes.

<?php
// PHP program to find out
// Sum of elements at even and
// odd index positions separately

// Function to calculate sum
echo "<br><center>";
function EvenOddSum($arr, $n)
{
	$even = 0;
	$odd = 0;
	for ($i = 0; $i < $n; $i++)
	{
		
		// Loop to find even, odd sum
		if ($i % 2 == 0)
			$even += $arr[$i];
		else
			$odd += $arr[$i];
	}

	echo("Odd index positions sum " . $even."<br>");
	echo("Even index positions sum " . $odd);
}

// Driver Code
$arr = array( 1, 2, 3, 4, 5, 6 );
$n = sizeof($arr);

EvenOddSum($arr, $n);

// This code is contributed by Ajit.
?>
