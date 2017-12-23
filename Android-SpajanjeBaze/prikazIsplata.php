<?php
mysql_connect('sql5.freesqldatabase.com','sql578316','hM9%jX1!') or die("Neuspjelo spajanje na bazu!");
mysql_select_db("sql578316");
$sql=mysql_query("select * from isplata");
while($row=mysql_fetch_assoc($sql))
$output[]=$row;
print(json_encode($output));
mysql_close();
?>

