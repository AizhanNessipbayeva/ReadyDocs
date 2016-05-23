<?php if(isset($_GET['link'])){$link=$_GET['link'];
}else{$link="main";}
session_start();
include "connection.php";include "function.php"; ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<?php
 if($link=="main"){include "main.php";}
 if($link=="hoc"){include "hoc.php";}
 if($link=="bestday"){include "bestday.php";}
 if($link=="gallery"){include "gallery.php";}
 if($link=="registration"){include "registration.php";}
 if($link=="logout"){include "logout.php";}
  ?>

</html>
