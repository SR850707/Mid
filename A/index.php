<?php

$msg = "";
session_start();  

if ($_SESSION["login_session"] != true){
	header("Location: login.php");
}
else{
	$msg = $_SESSION["id"] ."歡迎回來!<br/>";

	$time=Getdate($time);
}
    
?>

<!DOCTYPE html>

<html>

<head>
<meta charset="utf-8"/>
<title>登入</title>
</head>

<body>

<?php

echo $msg;

echo "<tr><td bgcolor=yellow>時間</td><td>".$time[year]."年".$time[mon]."月".$time[mday]."日".$time[hours].":".$time[minutes].":".$time[seconds]."</td><tr>";

?>

</body>

</html>