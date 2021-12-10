15. Read an array and find out how many elements are prime.

<?php
// PHP program to find count
// of primes in given array.

// Function to find count of prime
echo "<center><br>";
function primeCount($arr, $n)
{
	// Find maximum value in the array
	$max_val = max($arr);

	// Use Sieve to find all Prime Numbers
	// less than or equal to max_val
	// Create a boolean array "prime[0..n]". A
	// value in prime[i] will finally be false
	// if i is Not a prime, else true.
	$prime = array_fill(0, $max_val + 1, true);

	// Remaining part of SIEVE
	$prime[0] = false;
	$prime[1] = false;
	for ($p = 2; $p * $p <= $max_val; $p++)
	{

		// If prime[p] is not changed,
		// then it is a prime
		if ($prime[$p] == true)
		{

			// Update all multiples of p
			for ($i = $p * 2;
				$i <= $max_val; $i += $p)
				$prime[$i] = false;
		}
	}

	// Find all primes in arr[]
	$count = 0;
	for ($i = 0; $i < $n; $i++)
		if ($prime[$arr[$i]])
			$count++;

	return $count;
}

// Driver code
$arr = array(1, 2, 3, 4, 5, 6, 7);
$n = sizeof($arr);

echo "<b>".primeCount($arr, $n);

// This code is contributed by mits
?>
