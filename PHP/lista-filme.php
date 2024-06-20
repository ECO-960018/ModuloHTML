<?php
include("conexão.php");
$stmt = $conn->prepare("SELECT * FROM tbfilmes");
$stmt->execute();
$arrValues = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<html>

	<head>
	<meta charset="utf-8">
	<title>Listar Filmes</title>
	<style>
		body {
			width: 1280px;
			margin: auto;
			background: AliceBlue;
		}
		table, th, td {
		  border: 1px solid black;
		  border-collapse: collapse;
		  text-align: left;
		  padding: 0px 10px;
		}
		div {
			border: 1px solid black;
			border-radius: 10px;
			margin: 2px 2px 10px 2px;
			padding: 6px;
			background: Snow;
		}
		p {
			margin-top: -15px;
		}
	</style>
	</head>
	
	<body>
		<table>
			<tr>
				<th>ID</th>
				<th>Título</th>
				<th>Duração</th>
				<th>Valor da Locação</th>
				<th>Categoria</th>
			</tr>

			<?php
			foreach ($arrValues as $row){
				print "<tr>";
				foreach ($row as $key => $val){
					print "<td>$val</td>";
				}
				print "</tr>\n";
			}
			?>

		</table>
	</body>
</html>