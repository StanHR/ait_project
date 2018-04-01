<?php
$points=0;
if(isset($_GET['counte'])){
	$a = $_GET['counte'];
	$pa = $a*10;
	$points = $points + $pa;
}
if (isset($_GET['countg'])) {
	$b = $_GET['countg'];
	$pb = $b*8;
	$points = $points + $pb;
}
if (isset($_GET['counts'])) {
	$c = $_GET['counts'];
	$pc = $c*4;
	$points = $points + $pc;
}
$arr = array($pa,$pb,$pc,$points);
echo json_encode($arr);
?>