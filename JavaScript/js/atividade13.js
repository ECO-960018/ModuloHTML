function inverteString(st) {
	var sti = "";
	for (i = st.length - 1; i >= 0; i--) {
		sti += st.charAt(i);
	}
	return sti;
}

console.log("Exercício 13 | " + inverteString("Exercício 13"));
document.getElementById("13").innerHTML = "Exercício 13 | " + inverteString("Exercício 13");
