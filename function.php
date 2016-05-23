<?php
include "connection.php";
function existLogin($login){
$query="SELECT * from users";
$result=mysql_query($query);
$t=true;
while($row=mysql_fetch_array($result,MYSQL_ASSOC)){
     if($row['login']==$login)$t=false;
}
return $t;
}
 ?>
