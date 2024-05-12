let na = [93, 97, 78, 70, 62, 88, 81, 13, 47, 49, 26];
let s = 0;

for (i = 0; i < na.length; i++ ) {
  s += na[i];
}
	console.log(s/na.length);
	document.getElementById("11").innerHTML = s/na.length;
	
