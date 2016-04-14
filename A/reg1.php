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
      mysql_query($sql) or die("SQL字串執行錯誤!<br>");

      $msg  = "註冊成功!<br/>";
      $msg .= "使用者密碼: ".$password."<br/>";
      $body = "使用者帳號: ".$id."\r\n";
      $body.= "使用者密碼: ".$password."\r\n";

      if(mail($email,"密碼通知"))
   
   else{
   	  $msg =  "使用者名稱已經存在!<br/>";
   }
    
   mysql_close($db); 
}

?>

<!DOCTYPE html>

<html>

<head>
<meta charset="utf-8" />
<title>註冊會員</title>
</head>

<body>

<h2>輸入名稱和電郵註冊會員</h2><hr/>



<form action="register.php" method="post">

<table>
  <tr>
    <td>帳號: </td>
    <td><input type="text" name="Id" size="20" maxlength="15"></td>
  </tr>

  <tr>
   <td>密碼 : </td>
   <td><input type="password" name="Password" size="20" maxlength="10"></td>
  </tr>

  <tr>
    <td>email: </td>
    <td><input type="text" name="Email"size="20" maxlength="30"></td>
  </tr>

  <tr>
    <td>電話</td>
    <td><input type="phone" name="Phone" size="20" maxlength="20"></td>
  </tr>

   <tr>
   <td>註冊時間</td>
   <td>".$time[year]."年".$time[mon]."月".$time[mday]."日".$time[hours].":".$time[minutes].":".$time[seconds]."</td>
 </tr>

</table><br/>

<input type="submit" value="註冊"><br/><br/>
<small>密碼將使用電子郵件寄出
<a href="login.php">登入網站</a></small>

</form>
<p><?php echo $msg; ?></p>

</body>

</html>