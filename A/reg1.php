<?php

$id="";
$password="";
$email="";
$phone="";

$msg="";

if (isset($_POST["Id"])){
	$username = $_POST["Id"];
}
   
if (isset($_POST["Email"])){
	$email = $_POST["Email"];
}


if ($id != "" && $email != "") {
 
   $db = mysql_connect("localhost","root","123456");
   mysql_select_db(""); 
   $sql = "SELECT * FROM users WHERE id='".$id."'";
   $rows = mysql_query($sql);

   if (mysql_fetch_row($rows) == false) {
   
      $sql="INSERT INTO users(id,password,email) VALUES('".$id."','".$password."','".$email."','"$phone"')";
      mysql_query($sql) or die("SQL�r�������~!<br>");

      $msg  = "���U���\!<br/>";
      $msg .= "�ϥΪ̱K�X: ".$password."<br/>";
      $body = "�ϥΪ̱b��: ".$id."\r\n";
      $body.= "�ϥΪ̱K�X: ".$password."\r\n";

      if(mail($email,"�K�X�q��"))
   
   else{
   	  $msg =  "�ϥΪ̦W�٤w�g�s�b!<br/>";
   }
    
   mysql_close($db); 
}

?>

<!DOCTYPE html>

<html>

<head>
<meta charset="utf-8" />
<title>���U�|��</title>
</head>

<body>

<h2>��J�W�٩M�q�l���U�|��</h2><hr/>



<form action="register.php" method="post">

<table>
  <tr>
    <td>�b��: </td>
    <td><input type="text" name="Id" size="20" maxlength="15"></td>
  </tr>

  <tr>
   <td>�K�X : </td>
   <td><input type="password" name="Password" size="20" maxlength="10"></td>
  </tr>

  <tr>
    <td>email: </td>
    <td><input type="text" name="Email"size="20" maxlength="30"></td>
  </tr>

  <tr>
    <td>�q��</td>
    <td><input type="phone" name="Phone" size="20" maxlength="20"></td>
  </tr>

   <tr>
   <td>���U�ɶ�</td>
   <td>".$time[year]."�~".$time[mon]."��".$time[mday]."��".$time[hours].":".$time[minutes].":".$time[seconds]."</td>
 </tr>

</table><br/>

<input type="submit" value="���U"><br/><br/>
<small>�K�X�N�ϥιq�l�l��H�X
<a href="login.php">�n�J����</a></small>

</form>
<p><?php echo $msg; ?></p>

</body>

</html>