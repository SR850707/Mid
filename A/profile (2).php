<?php

$db = mysql_connect("localhost", "root", "123456");
mysql_select_db("mybooks"); // ��ܸ�Ʈw

$sql = "SELECT * FROM ";
$rows = mysql_query($sql); 
$num = mysql_num_rows($rows);  
mysql_close($db); 

?>

<!DOCTYPE html>

<html>

<head>
<meta charset="utf-8"/>
<title>�ק�ӤH���</title>
</head>

<body>

<h1>�ק�ӤH���</h1><hr/>

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
        		echo "<td>"�ק�"</td>";
        		echo "</tr>";
        	}
        }

        ?>
    </tbody>

</body>

</html>