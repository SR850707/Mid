<html>

<head>
<meta charset="utf-8"/>
<title>計算機</title>

<?
function add(){
	
	$count=func_num_args();
	echo "個數:$count<br/>";

	for($i=0 ; $i < $count ; $i++){
		$para=func_get_arg($i);
		echo "$i => $para";
	}

	$total=0;
	$array=func_get_args();

	for($i=0 ; $i < $count ; $i++){
		$total += $array[$i];
	}

	echo "<br/>總和:<br/>";
}

?>

<?
function dec(){
	
	$count=func_num_args();
	echo "個數:$count<br/>";

	for($i=0 ; $i < $count ; $i++){
		$para=func_get_arg($i);
		echo "$i => $para";
	}

	$total=0;
	$array=func_get_args();

	for($i=0 ; $i < $count ; $i++){
		$total -= $array[$i];
	}

	echo "<br/>總和:<br/>";
}

?>

<?

function sum(){

	$count=func_num_args();
	echo "個數:$count<br/>";

	for($i=0 ; $i < $count ; $i++){
		$para=func_get_arg($i);
		echo "$i => $para";
	}

	$total=0;
	$array=func_get_args();

	for($i=0 ; $i < $count ; $i++){
		$total *= $array[$i];
	}

	echo "<br/>總和:<br/>";

}

?>

<?

function de(){

	$count=func_num_args();
	echo "個數:$count<br/>";

	for($i=0 ; $i < $count ; $i++){
		$para=func_get_arg($i);
		echo "$i => $para";
	}

	$total=0;
	$array=func_get_args();

	for($i=0 ; $i < $count ; $i++){
		$total /= $array[$i];
	}

	echo "<br/>總和:<br/>";

}

?>


<?
function b3(){

	if{
		(a+b)*(a+b)=(a*100+b);
	}

	echo "a=";
	echo "b=";
	echo "(100*a+b)=";
}

?>

</head>

<body>

<?php
echo "總和:".$func()."<br/>";
?>

</body>

</html>