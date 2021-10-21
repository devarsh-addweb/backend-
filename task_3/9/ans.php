<?php
// PHP implementation of the above approach

if(isset($_POST['submit']))
{
	$upr=$_POST['num1'];
	$low=$_POST['num2'];
	$sym=$_POST['num3'];

	if ($upr >= 'A' && $upr <= 'Z')
	{
		echo "This Is UpperCase --- $upr"."<br>";
	}
	else if ($upr >= 'a' && $upr <= 'z')
	{
		echo "This Is LowerCase --- $upr"."<br>";
	}
	else
	{
		echo "This Is Symbol --- $upr"."<br>";
	}

	if ($low >= 'A' && $low <= 'Z')
	{
		echo "This Is UpperCase --- $low"."<br>";
	}
	else if ($low >= 'a' && $low <= 'z')
	{
		echo "This Is LowerCase --- $low"."<br>";
	}
	else
	{
		echo "This Is Symbol --- $low"."<br>";
	}

	if ($sym >= 'A' && $sym <= 'Z')
	{
		echo "This Is UpperCase --- $sym"."<br>";
	}
	else if ($sym >= 'a' && $sym <= 'z')
	{
		echo "This Is LowerCase --- $sym"."<br>";
	}
	else
	{
		echo "This Is Symbol --- $sym"."<br>";
	}


}

// // Driver Code

// // Get the character
// $ch = 'A';

// // Check the character
// check($ch);

// // Get the character
// $ch = 'a';

// // Check the character
// check($ch);

// // Get the character
// $ch = '0';

// // Check the character
// check($ch);

// // This code is contributed by mits
?>
