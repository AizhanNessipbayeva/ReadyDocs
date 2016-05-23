
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Paris</title>
<link rel = "stylesheet" type="text/css" href="style.css"
</head>

<body bgcolor="#F90">
<div id = "content">

<div id = "shapka">
	<a href="#"><img src="./images/wapka.jpg" alt="Место для логотипа" name="Insert_logo" width="1000" height="200" id="Insert_logo"/></a>
</div>

<div id="ikonki">
    <ul>
      <li><a href="index.php?link=main">Main Page</a></li>
      <li><a href="index.php?link=hoc">Our offers</a></li>
      <li><a href="index.php?link=bestday">New events</a></li>
      <li><a href="index.php?link=gallery">Gallery</a></li>
    </ul>
</div>

    <center style="margin-top: 50px;">
        <div style="border-bottom-style: solid; background:#FAD645; border-width: 1px; width: 220px;"> Autorization: </div>
    <form method="POST" style="padding: 0 10px 0 10px; background:#FAD645; border:1px solid #FFEB70; font-size:90%; visibility:inherit; width: 200px;">
    First name: <input type="text" name="firstname"><br>
    <br>
    Last name: <input type="text" name="lastname"><br>
    <br>
    E-mail: <input type="text" name="login"><br>
    <br>
    Password: <input type="password" name="pwd"><br></h1>
    <br>
    <input type="radio" name="wtf" value="male">Male<br>
    <br>
    <input type="radio" name="wtf" value="female">Female<br>
    <br>
    <form name="input" action="html_form_action.asp" method="get">
        <input type="submit" value="Registration">
    </form>
    <?php
     if(isset($_POST['firstname']) and isset($_POST['lastname']) and isset($_POST['login']) and isset($_POST['pwd'])){
        $name=$_POST['firstname'];
        $lastname=$_POST['lastname'];
        $login=$_POST['login'];
        $password=$_POST['pwd'];
        $gender=$_POST['wtf'];
        if(existLogin($login)){
        $query="INSERT INTO users(name,lastname,login,password,gender) values('$name','$lastname','$login','$password','$gender')";
        mysql_query($query);
        $_SESSION['login']=$login;
        $_SESSION['password']=$password;
      }
        else {echo "Such login exist";}
     }
     ?>
    </center>


</div>
<div id="footer">

</div>
</body>
