<?php
$points=0;
if(isset($_GET['av'])){
	$a = $_GET['av'];
}
if (isset($_GET['cu'])) {
	$b = $_GET['cu'];
}
if ($a <= 95) {
	if ($b > $a) {
		$points = 10;
	}
	elseif (($a-$b)<=2) {
		$points = 8;
	}
	elseif (($a-$b)>=5 && ($a-$b)<2) {
		$points = 6;
	}
	elseif (($a-$b)>5) {
		$points = 5;
	}
}
if ($a >= 95) {
	if (($b-$a)>=2) {
		$points = 10;
	}
	elseif (($b-$a)<=2) {
		$points = 8;
	}
	elseif (($a-$b)>=5 && ($a-$b)<2) {
		$points = 6;
	}
	elseif (($a-$b)>5) {
		$points = 5;
	}
}
echo $points;
?>