<?php

$db = mysql_connect("localhost", "root", "123456");
mysql_select_db("mybooks"); // 選擇資料庫

$sql = "SELECT * FROM ";
$rows = mysql_query($sql); 
$num = mysql_num_rows($rows);  
mysql_close($db); 

?>

<!DOCTYPE html>

<html>

<head>
<meta charset="utf-8"/>
<title>修改個人資料</title>
</head>

<body>

<h1>修改個人資料</h1><hr/>

<table border="1">

    <thead>
      <tr>
          <th>Password</th>
          <th>Email</th>
          <th>Phone</th>
      </tr>
    </thead>

    <tbody>
        <?php

        if($num>0){
        	for($i=0 ; $i< $num ;$i++){

        		$password=mysql_result($rows,$i,"Password");
        		$email=mysql_result($rows,$i,"Email");
        		$phone=mysql_result($rows,$i,"Phone");

        		echo "<tr>";
        		echo "<td>".$Password."</td>";
        		echo "<td>".$Email."</td>";
        		echo "<td>".$Phone."</td>";
        		echo "<td>"修改"</td>";
        		echo "</tr>";
        	}
        }

        ?>
    </tbody>

</body>

</html>