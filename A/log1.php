<?php

session_start();

$id="";
$password="";
$email="";
$phone="";

$msg="";

if(isset($_POST["Id"])){
	$username=$_POST["Id"];
}
if(isset($_POST["Password"])){
	$password=$_POST["Password"];
}

if($id !="" || $password !=""){
	$db=mysql_connect("localhost","root","123456");
	mysql_select_db("");

	$sql="SELECT * FROM user WHERE password=''";
	$sql.=$password."'AND id='".$id."'";
	$rows=mysql_query($sql);

	if(mtsql_fetch_row($rows) !=false){
	    $_SESSION["login_session"]=true;
	    $_SESSION["id"]=$id;

	    header("Location:index.php");
	}
	else{
	    $msg="使用者名稱或帳號有誤<br/>";
	}

	mysql_close($db);
}

?>

!DOCTYPE html>

<html>

<head>
<meta charset="utf-8" />
<title>登入網站</title>
</head>

<body>

<h2>輸入帳號和密碼登入</h2><hr/>

<form action="login.php" method="post">

<table>
 <tr>
   <td>帳號: </td>
   <td><input type="text" name="Id" size="19" maxlength="10"></td>
 </tr>

 <tr>
   <td>密碼 : </td>
   <td><input type="password" name="Password" size="20" maxlength="10"></td>
 </tr>

 <tr>
   <td>email</td>
   <td><input type="text" name="Email"size="20" maxlength="30"></td>
 </tr>

 <tr>
   <td>電話</td>
   <td><input type="phone" name="Phone" size="20" maxlength="20"></td>
 </tr>

 <tr>
   <td>登入次數</td>
   <td>
 </tr>

 <tr>
   <td>上一次登入時間</td>
   <td>".$time[year]."年".$time[mon]."月".$time[mday]."日".$time[hours].":".$time[minutes].":".$time[seconds]."</td>
 </tr>

</table><br/>
<input type="submit" value="登入網站"><br/><br/>
<small><a href="register.php">註冊新使用者</a></small>

</form>

<p><?php echo $msg; ?></p>

</body>

</html>