<?php
include "connection.php";
if(isset($_POST['login'])){
	$login=$_POST['login'];
}else{$login="";}
if(isset($_POST['pwd']))
{$password=$_POST['pwd'];}else{$password="";} ?>
<div id = "leftdiv">
	<div id="login">
    	<h4 >Authorization</h4>
    	<form method="POST">
    	<h5 class="mp">Login: <input type="text" name="login">
		<br> Password: <input type="password" name="pwd"></br>
	</h5> <br><input type="submit" value="Sign in"></br>
    	</form>

      <?php
        $query="SELECT * from users where login='$login'";
        $qwe=mysql_query($query);
				$row=mysql_fetch_array($qwe,MYSQL_ASSOC);
				$res=$row['password'];
				if($res==$password and $password!=""){
					$_SESSION['login']=$login;
					$_SESSION['password']=$password;
				}else{echo"incorrect";}
			?>
    	<a href="index.php?link=registration"><h5 class="mp">Registration>>></h5></a>
	</div>
</div>
