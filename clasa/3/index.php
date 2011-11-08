#!/usr/bin/php
<?php
echo "Hello World.\n";
echo "8: ";
fscanf(STDIN, "%d\n", $number);
if ($number%2===0) {
	echo $number," is odd .\n";
} else {
	echo $number," is even.\n";
}
die(0);
?>


