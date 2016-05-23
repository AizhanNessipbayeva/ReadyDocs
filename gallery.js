var a=Array();

a[0]="1";
a[1]="2";
a[2]="3";
a[3]="4";
a[4]="5";
a[5]="6";
a[6]="7";
a[7]="8";


var right=false;
var left=true;
var counter=0;
var cur = 2;
function moveleft(){
	counter--;
	if (counter < 0) counter = 7;
	for (var i = 0; i < 5; i++) {
		var c = document.getElementById("id" + i);
		c.src = "./images2/" + a[(counter + i) % 8] + ".jpg";
	}
	if (counter == 5) {
		left = false;
		var c = document.getElementById("leftarrow");
		c.src = "gallery/arrowleftdisabled.jpg";
	}
	if (counter != 0) {
		right = true;
		var c = document.getElementById("rightarrow");
		c.src = "gallery/arrowright.jpg";
	}
	//var c = document.getElementById("comment");
	//c.innerText = a[(counter + cur) % 8];
}

function moveright(){
	counter = (counter + 1) % 8;
	for (var i = 0; i < 5; i++) {
		var c = document.getElementById("id" + i);
		c.src = "./images2/" + a[(counter + i) % 8] + ".jpg";
	}
	if (counter != 5) {
		left = true;
		var c = document.getElementById("leftarrow");
		c.src = "arrowleft.jpg";
	}
	if (counter == 0) {
		right = false;
		var c = document.getElementById("rightarrow");
		c.src = "arrowrightdisabled.jpg";
	}
	//var c = document.getElementById("comment");
	//c.innerText = a[(counter + cur) % 8];
}

function maximize(id){
	if (id != "id" + cur) {
		var c1 = document.getElementById(id);
		c1.style.height = "300px";
		c1.style.width = "300px";
		var c2 = document.getElementById("id" + cur);
		c2.style.height = "100px";
		c2.style.width = "100px";
		cur = parseInt(id.substring(id.length - 1, id.length));
		//var c = document.getElementById("comment");
		//c.innerText = a[(counter + cur) % 8];
	}
}
