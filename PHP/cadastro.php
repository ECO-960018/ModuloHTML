<!DOCTYPE html>
<?php
	define("NOMECLIENTE","Filipe Esmeraldo");
	$endereco = 'QI 6, Conjunto R';
	$bairro = 'Guará I';
	$estado = 'DF';
	$cep = '71010-184';
	$idade = 33; define("RG", "20040091311-xx");
	$fone = '(85) 99166-6597';
?>

<html>

	<head>
	<meta charset="utf-8">
	<title>Trabalhando com Variáveis</title>
	</head>
	
	<body>
		<h1>Informações do Contato</h1>
		<p>Nome completo: <?php echo NOMECLIENTE;?> </p>
		<p>Endereço: <?php echo $endereco;?> </p>
		<p><?php echo "$bairro - $estado - CEP: $cep";?> </p>
		<p> Telefone: <?php echo $fone;?></p>
		<h2>Documentos</h2>
		<?php echo "<p>Idade: $idade | RG: " . RG . "</p>";?>
	</body>

</html>
