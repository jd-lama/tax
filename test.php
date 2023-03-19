<?php
	// $username = "nima tamang";

	// echo $username;
	// $team = array('bill','jd');
	// echo $team[1];
	// $oxo = array(1,array('eat','sleep','drink','think about sara'));
	// echo $oxo[1][2];
	// if ($oxo == "think about sara") echo "and learn as much as u can to be something in her eyes";
	// echo "not just that". $team ."be a decent person";
	// echo "learn everything until otaku jatra comes - $team.";
	// define("THE_GIRL","sara");
	// $name = THE_GIRL;
	// echo $name;
	// function longdate($timestamp){
	// 	$temp = date("L F jS Y",$timestamp);
	// 	return "The date is $temp";
	// }
	// echo longdate(time());
	// $num1 = 10;
	// $num2 = 20;
	
	// echo $num1 + $num2;
	// function additiones($num1,$num2){
	// 	echo $num1 + $num2;

	// }
	// additiones(3,5);
	// function additions($num1,$num2,$op){
	// 	if ($op == '-'){
	// 		echo $num1-$num2;
	// 	}
	// }
	// additions(10,20,'-');
	$page = "mon";
	switch($page){
		case "home":
			echo "YOu selected home";
			break;
		case "mon":
			echo "monday";
			break;
		case "tue":
			echo "tuesday";
		break;
		default:
			echo "not a value";
}	
$fuel = 10;
while($fuel > 1){
	echo "there's enough fuel";
	$fuel = $fuel - 1;

}
if($fuel < 1){
	echo "refuel";
}
for($i = 0; $i < 10; ++$i){
	if ($i > 5) break;
	echo $i;
}
?>