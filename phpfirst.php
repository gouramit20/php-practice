<?php
$number =$_POST[textbox];
$x=$_POST[button];


	if($x=="prime")
	{
	for($i=2;$i<$number/2;$i++)
	{
		if($number%$i==0)
		{
			$isPrime=1;
			break;
		}
	}
	if($isPrime!=1)
	{
		echo "prime";
	}
	else{
		echo "not prime";
	}
	}

	else if ($x==factorial)
	{
		$result=1;
	for($i=$number;$i>0;$i--)
	{
		
		$result=$result*$i;
	}
	echo $result;
	}
   else if($x==anstrom)
   {
	$originalnumber=$number;
	while($originalNumber!=0)
	{
		$remainder=$originalNumber%10;
		$result += $remainder*$remainder*$remainder;
       $originalNumber /= 10;
	}
	       if($result == $number)
		   {
        echo "%d is an Armstrong number.";
		   }
    else{
       echo "%d is not an Armstrong number.";
	}
   }
   else{
	   echo "please select radio button";
   }

?> 


 