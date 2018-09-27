<?php
echo "enter the numbers\n";
$handle = fopen ("php://stdin","r");
$number1 = fgets($handle);
$number2 = fgets($handle);
$number3 = fgets($handle);
$number4 = 1;

while ($number4 <= $number3) {
	if (($number4 % $number2) && ($number4 % $number1)) {
		echo $number4;
	}
	 elseif (($number4 % $number1 == 0) && ($number4 % $number2 ==0)) {
		echo "FB";
	}
	 elseif ($number4 % $number1 == 0) {
		echo "F";
	}
	 elseif ($number4 % $number2 == 0) {
		echo "B";
	} echo " ";
	
	$number4++;
}