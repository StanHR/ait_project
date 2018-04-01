<?php
$points=0;
if(isset($_GET['total'])){
	$a = $_GET['total'];
	$b = $a/2;
	if($a<100){
		$points = $b;
	}elseif ($a>=100 && $a<=110) {
		$points = 50;
	}else{
		$points = 60;
	}
}
echo $points;
?>