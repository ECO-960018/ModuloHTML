function maiorIdade(idade) {
	
	if (idade >= 18) {
		return "Maior de idade";
	} else {
		return "Menor de idade";
	}

}
		console.log(maiorIdade(6));
		document.getElementById("06").innerHTML = maiorIdade(6);