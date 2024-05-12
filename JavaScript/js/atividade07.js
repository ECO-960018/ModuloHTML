function idade(idade) {
	if (idade < 12) {
		return "Criança";
	} else if (idade >= 12 && idade < 18) {
		return "Adolescente";
	} else {
		return "Adulto";
	}
}

		console.log(idade(7));
		document.getElementById("07").innerHTML = idade(7);