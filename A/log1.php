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
	    $msg="�ϥΪ̦W�٩αb�����~<br/>";
	}

	mysql_close($db);
}

?>

!DOCTYPE html>

<html>

<head>
<meta charset="utf-8" />
<title>�n�J����</title>
</head>

<body>

<h2>��J�b���M�K�X�n�J</h2><hr/>

<form action="login.php" method="post">

<table>
 <tr>
   <td>�b��: </td>
   <td><input type="text" name="Id" size="19" maxlength="10"></td>
 </tr>

 <tr>
   <td>�K�X : </td>
   <td><input type="password" name="Password" size="20" maxlength="10"></td>
 </tr>

 <tr>
   <td>email</td>
   <td><input type="text" name="Email"size="20" maxlength="30"></td>
 </tr>

 <tr>
   <td>�q��</td>
   <td><input type="phone" name="Phone" size="20" maxlength="20"></td>
 </tr>

 <tr>
   <td>�n�J����</td>
   <td>
 </tr>

 <tr>
   <td>�W�@���n�J�ɶ�</td>
   <td>".$time[year]."�~".$time[mon]."��".$time[mday]."��".$time[hours].":".$time[minutes].":".$time[seconds]."</td>
 </tr>

</table><br/>
<input type="submit" value="�n�J����"><br/><br/>
<small><a href="register.php">���U�s�ϥΪ�</a></small>

</form>

<p><?php echo $msg; ?></p>

</body>

</html>