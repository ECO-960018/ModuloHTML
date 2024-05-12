function diaDaSemana(x) {
	switch (x) {
		case 1:
			return "Segunda-Feira";
		break;
		case 2:
			return "Terça-Feira";
		break;
		case 3:
			return "Quarta-Feira";
		break;
		case 4:
			return "Quinta-Feira";
		break;
		case 5:
			return "Sexta-Feira";
		break;
		case 6:
			return "Sábado";
		break;
		case 7:
			return "Domingo";
		break;
	}
}

		console.log(diaDaSemana(new Date().getDay()));
		document.getElementById("08").innerHTML = diaDaSemana(new Date().getDay());