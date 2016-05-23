<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>ART organization</title>
<link rel = "stylesheet" type="text/css" href="style.css">
</head>
<body>


<?php echo"<style>
body{background-image:url(images2/bckg.jpg);}
</style>" ?>
<div id = "content">

<div id = "shapka">
	<a href="#"><img src="./images/wapka.jpg" alt="Место для логотипа" name="Insert_logo" width="1000" height="200" id="Insert_logo"/></a>
</div>

<div id="ikonki">
    <ul>
      <li><a href="index.php?link=main">Main Page</a></li>
      <li><a href="index.php?link=hoc">Our offers</a></li>
      <li><a href="index.php?link=bestday">New Events</a></li>
      <li><a href="index.php?link=gallery">Gallery</a></li>
    </ul>
</div>

<?php
if(empty($_SESSION['login']) or empty($_SESSION['password']))include "login.php";
else{ echo"<a href='index.php?link=logout'>Logout</a>";}
 ?>

<?php include"content.php"; ?>
<div id="footer">

</div>
</body>
