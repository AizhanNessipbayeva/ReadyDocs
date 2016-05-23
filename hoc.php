<head>
<title>Task</title>
<script type="text/javascript">
var s = "In Canada, a series of artist-run organizations often known as parallel galleries or artist-run centres (ARCs) have developed in cities across the country since the 1960s to encourage the exhibition of contemporary works by Canadian and international artists. The purpose is often to provide alternative spaces for exhibition for emerging artists and contemporary artists outside the commercial gallery system. Canadian ARCs usually pay a fee and de-emphasize the selling of work, although this will vary from gallery to gallery. A recommended schedule of payment is provided by the Canadian Artists' Representation (CARFAC), an artists' advocacy group."
var i = 0;
var j = 0;
var s1 = "";
var ok = true;

function go1() {
	var c = document.getElementById("content");
	c.innerHTML = s1 + "_";
}

function go() {
	var c = document.getElementById("content");
	s1 += s[j]; j += 1;
	if (s1.length == s.length) return;
        c.innerHTML = s1;
	t1=setTimeout("go1()", 3);
	t1=setTimeout("go()", 9);
}
</script>
</head>

<body background="images2/foniii.jpg" onload="go();"><a href="index.php"><img src="history/tomain=.jpg" style="float: left;"/> </a>
<p id = "content" style="width:710px; position: absolute; top: 100px; left: 300px;"> </p>
</body>
