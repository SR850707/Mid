<?php

$db = mysql_connect("localhost", "root", "123456");

mysql_select_db(""); 

$sql = "SELECT * FROM ";
$rows = mysql_query($sql); 
$num = mysql_num_rows($rows); 

mysql_close($db); 

?>

<!DOCTYPE html>

<html>

<head>
<meta charset="utf-8" />
<title>Ch12_3_3.php</title>
</head>

<body>

<h1>帳號刪除</h1><hr/>

<table border="1">
    <thead>
       <tr>
           <th>Id</th>
           <th>Password</th>
           <th>Email</th>
       </tr>
    </thead>
    
    <tbody>
       <?php
       if ($num > 0) {         
           for ($i = 0;$i < $num; $i++ ) {
            
              $id = mysql_result($rows, $i, "id");
              $password = mysql_result($rows, $i, "password");
              $email = mysql_result($rows, $i, "email");
            
              echo "<tr>";
              echo "<td>" .$id. "</td>";
              echo "<td>" .$password. "</td>";
              echo "<td>" .$email. "</td>";
              echo "<td>";
              echo "Id=".$id."刪除";
              echo "</td>";
              echo "</tr>";            
           }
       }
       ?>
     </tbody>

</table>

</body>

</html>