<html>

<head>
<meta charset="utf-8"/>
</head>

<body>

<form action="form.php" method="post">

<?

$time=Getdate($time);

$number=strlen($total);

?>

<table border=1>
 <tr>
   <td>名稱: </td>
   <td><input type="text" name="" size="19" maxlength="10"></td>
 </tr>

 <tr>
   <td>網址路徑: </td>
   <td><input type="text" name="" size="100" maxlength="200"></td>
 </tr>

 <tr>
   <td>短網址</td>
   <td><input type="text" name=""size="50" maxlength="100"></td>
 </tr>

 <tr>
   <td>上傳時間:</td>
   <td>".$time[year]."年".$time[mon]."月".$time[mday]."日".$time[hours].":".$time[minutes].":".$time[seconds]."</td>
 </tr>

 <tr>
   <td>瀏覽次數</td>
   <td>
 </tr>

</table><br/>


</form>

</body>

</html>