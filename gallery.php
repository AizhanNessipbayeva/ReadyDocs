
<head>
<script type="text/javascript" src="gallery/gallery.js"></script>
<link rel="stylesheet" type="text/css" href="mystyle.css" />
</head>

<body background="images2/background.jpg"><a href="index.php"><img src="gallery/tomain=.jpg" style="float: left;"/> </a>
<div id = "content" style="margin-left:140px;">
<center><span>Gallery</span></center>
<center>
<table>
<tr>
<td>
<img src="gallery/arrowleft.jpg" id="leftarrow" onMouseOver="if (left){this.src='gallery/arrowleftmouseon.jpg'}" onMouseOut="if(left){this.src='gallery/arrowleft.jpg'}" onClick="if(left){moveleft();}" />
</td>
<td>
	<img  src="images/1.jpg" id="id0" onMouseOver="maximize(this.id)" />
</td>
<td>
	<img src="images/2.jpg" id="id1" onMouseOver="maximize(this.id)" />
</td>
<td>
	<img  src="images/3.jpg" id="id2" onMouseOver="maximize(this.id)" />
</td>
<td>
	<img src="images/4.jpg" id="id3" onMouseOver="maximize(this.id)" />
</td>
<td>
	<img src="images/5.jpg" id="id4" onMouseOver="maximize(this.id)" />
</td>
<td>
<img src="gallery/arrowrightdisabled.jpg" id="rightarrow" onMouseOver="if(right){this.src='gallery/arrowrightmouseon.jpg'}" onMouseOut="if(right){this.src='gallery/arrowright.jpg'}" onClick="if(right){moveright();}" />
</td>
</tr>
</table>
</center>
</div>
</body>
