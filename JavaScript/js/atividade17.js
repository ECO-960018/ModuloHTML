function calculaFatorial(f) {
	for (i = f-1; i > 0; i--) {
		f*=i
	}
	return f
}

console.log("17! = " + calculaFatorial(17));
document.getElementById("17").innerHTML = "17! = " + calculaFatorial(17);