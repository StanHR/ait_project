<?php
$points=0;
if(isset($_GET['counte'])){
	$a = $_GET['counte'];
	$pa = $a*5;
	$points = $points + $pa;
}
if (isset($_GET['countg'])) {
	$b = $_GET['countg'];
	$pb = $b*4;
	$points = $points + $pb;
}
if (isset($_GET['counts'])) {
	$c = $_GET['counts'];
	$pc = $c*2;
	$points = $points + $pc;
}
$arr = array($pa,$pb,$pc,$points);
echo json_encode($arr);
?>