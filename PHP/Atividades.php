<!DOCTYPE html>
<html>

	<head>
	<meta charset="utf-8">
	<title>Atividades PHP</title>
	<style>
		body {
			width: 1280px;
			margin: auto;
			background: AliceBlue;
		}
		table, th, td {
		  border: 1px solid black;
		  border-collapse: collapse;
		  width: 700px;
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
		
		<div>
			<h3>ATIVIDADE 02</h3>
			
			<?php
				$aluno = 'Maria Fernanda';
				$endereco = 'Rua Violeta, 3025';
				$cidade = 'Campinas';
				$estado = 'São Paulo';
				$cep = '13.536-459';
				$telefone = '(19) 8182-9977'; 
				$celular =  '(19) 3854-3695';
				define("RG", "28.569.569-X");
				define("CPF", "123.653.659-98");
				define("PIS", "8452368888");
			?>
			
			<table>
				<tr>
					<th>Nome</th>
					<th>Valores</th>
				</tr>
				<tr>
					<td>Nome do Aluno</td>
					<td><?php echo $aluno;?></td>
				</tr>
				<tr>
					<td>Endereço</td>
					<td><?php echo $endereco;?></td>
				</tr>
				<tr>
					<td>Cidade</td>
					<td><?php echo $cidade;?></td>
				</tr>
				<tr>
					<td>Estado</td>
					<td><?php echo $estado;?></td>
				</tr>
				<tr>
					<td>CEP</td>
					<td><?php echo $cep;?></td>
				</tr>
				<tr>
					<td>Telefone</td>
					<td><?php echo $telefone;?></td>
				</tr>
				<tr>
					<td>Celular</td>
					<td><?php echo $celular;?></td>
				</tr>
				<tr>
					<th>Nome</th>
					<th>Valores</th>
				</tr>
				<tr>
					<td>RG</td>
					<td><?php echo RG;?></td>
				</tr>
				<tr>
					<td>CPF</td>
					<td><?php echo CPF;?></td>
				</tr>
				<tr>
					<td>PIS</td>
					<td><?php echo PIS;?></td>
				</tr>
			</table>
		</div>
		<div>
			<h3>ATIVIDADE 03</h3>
			
			<?php
				$livro = array("cod"=>"8282","livros"=>"PHP - Páginas Dinâmicas","autor"=>"Marcos de Melo","pag"=>"360");
			?>
			
			<table>
				<tr>
					<th>Código</th>
					<th>Livros</th>
					<th>Autor</th>
					<th>Páginas</th>
				</tr>
				<tr>
					<td><?php echo $livro["cod"];?></td>
					<td><?php echo $livro["livros"];?></td>
					<td><?php echo $livro["autor"];?></td>
					<td><?php echo $livro["pag"];?></td>
				</tr>
			</table>
		</div>
		<div>
			<h3>ATIVIDADE 04</h3>
			
			<?php
			$livro = array(array("cod"=>"8282","livros"=>"PHP","autor"=>"Marcos de Melo","pag"=>"360"),array("cod"=>"8283","livros"=>"HTML5","autor"=>"Ernandes Silva","pag"=>"266"),array("cod"=>"8284","livros"=>"JQuery","autor"=>"Nicoly Almeida","pag"=>"159"),array("cod"=>"8285","livros"=>"CSS","autor"=>"Juliana Aparecida","pag"=>"123"));
			?>
			
			<table>
				<tr>
					<th>Código</th>
					<th>Livros</th>
					<th>Autor</th>
					<th>Páginas</th>
				</tr>
				<tr>
					<td><?php echo $livro[0]["cod"];?></td>
					<td><?php echo $livro[0]["livros"];?></td>
					<td><?php echo $livro[0]["autor"];?></td>
					<td><?php echo $livro[0]["pag"];?></td>
				</tr>
				<tr>
					<td><?php echo $livro[1]["cod"];?></td>
					<td><?php echo $livro[1]["livros"];?></td>
					<td><?php echo $livro[1]["autor"];?></td>
					<td><?php echo $livro[1]["pag"];?></td>
				</tr>
				<tr>
					<td><?php echo $livro[2]["cod"];?></td>
					<td><?php echo $livro[2]["livros"];?></td>
					<td><?php echo $livro[2]["autor"];?></td>
					<td><?php echo $livro[2]["pag"];?></td>
				</tr>
				<tr>
					<td><?php echo $livro[3]["cod"];?></td>
					<td><?php echo $livro[3]["livros"];?></td>
					<td><?php echo $livro[3]["autor"];?></td>
					<td><?php echo $livro[3]["pag"];?></td>
				</tr>
			</table>
		</div>
		<div>
			<h3>ATIVIDADE 05</h3>
			
			<?php
				$nome = 'Filipe Esmeraldo';
				$idade = '33 anos';
				$sal = 'R$10.000,00';
			?>
			
			<table>
				<tr>
					<th>Nome</th>
					<th>Idade</th>
					<th>Salário</th>
				</tr>
				<tr>
					<td><?php echo $nome;?></td>
					<td><?php echo $idade;?></td>
					<td><?php echo $sal;?></td>
				</tr>
			</table>
		</div>
		<div>
			<h3>ATIVIDADE 06</h3>
			<p>Adição de dois números. Se maior do que 20, 8 é somado ao resultado. Caso contrário, 5 é subtraído.</p>

			<form method="post">
				<label for="x">Digite um número: </label>
				<input type='text' name="x">
				<label for="y">Digite outro número: </label>
				<input type='text' name="y">
				<input type="submit" name="go" value="Somar">
			</form><br>
			
			  <?php
				if(isset($_POST['x']) or isset($_POST["y"])){
					$x = $_POST['x'];
					$y = $_POST['y'];
					$z = $x+$y;
					$r = $z > 20 ? $z+8 : $z-5;

				echo "<table>
					<tr>
						<th>RESULTADO 1</th>
						<th>RESULTADO 2</th>
					</tr>
					<tr>
						<td>$z</td>
						<td>$r</td>
					</tr>
				</table>";
				}
			?>
		</div>
		<div>
			<h3>ATIVIDADE 07</h3>
			<p>Verifica se um número é divisível por 10, por 5 ou por 2.</p>

			<form method="post">
				<label for="x7">Digite um número: </label>
				<input type='text' name="x7">
				<input type="submit" value="Verificar">
			</form><br>
			
			<?php
				if(isset($_POST['x7'])){
					$x7 = $_POST['x7'];
					if($x7 == 0){
						echo "";
					}
					elseif($x7 % 10 == 0){
						echo "<div>$x7 é divisível por 10.</div>";
					}
					elseif($x7 % 5 == 0){
						echo "<div>$x7 é divisível por 5.</div>";
					}
					elseif($x7 % 2 == 0){
						echo "<div>$x7 é divisível por 2.</div>";
					}
					else{
						echo "<div>$x7 não é divisível por 10, 5 ou 2.</div>";
					}
				}
			?>
		</div>
		<div>
		<h3>ATIVIDADE 08</h3>
		<p>Verifica se uma pessoa é do sexo feminino e menor de 25.</p>

		<form method="post">
			<label for="n8">Nome: </label>
			<input type='text' name="n8">
			<label for="s8">Sexo: </label>
			<select name="s8">
				<option value="0">Masculino</option>
				<option value="1">Feminino</option>
			</select>
			<label for="i8">Idade: </label>
			<input type='text' name="i8">
			<input type="submit" value="Verificar">
		</form><br>
		
		<?php
			if(isset($_POST['s8']) or isset($_POST["i8"])){
				$n8 = $_POST['n8'];
				$s8 = $_POST['s8'];
				$i8 = $_POST['i8'];
				
				
				if($s8 != 1){
					$a8 = "NÃO ACEITA";
				}
				elseif($i8 >= 25){
					$a8 = "NÃO ACEITA";;
				}
				else{
					$a8 = "ACEITA";;
				}

			echo
			"<table>
				<tr>
					<th>Nome</th>
					<th>Status</th>
				</tr>
				<tr>
					<td>$n8</td>
					<td>$a8</td>
				</tr>
			</table>";
			}
		?>
		</div>
		<div>
			<h3>ATIVIDADE 09</h3>
			<p>Pega três números e os coloca em ordem decrescente.</p>
			
			<form method="post">
				<label for="x9">Primeiro número: </label>
				<input type='text' name="x9">
				<label for="y9">Segundo número: </label>
				<input type='text' name="y9">
				<label for="z9">Terceiro número: </label>
				<input type='text' name="z9">
				<input type="submit" value="Verificar">
			</form><br>
			
			<?php
			if(isset($_POST['x9']) or isset($_POST["y9"]) or isset($_POST["z9"])){
				$x9 = $_POST['x9'];
				$y9 = $_POST['y9'];
				$z9 = $_POST['z9'];
				
				if($x9 < $y9 || $x9 < $z9) {
					if ($x9 < $y9 && $x9 < $z9) {
						$a9 = $x9;
						if ($y9 < $z9) {
							$b9 = $y9;
							$c9 = $z9;
						}else{
							$b9 = $z9;
							$c9 = $y9;
						}
					}else{
						$b9 = $x9;
						if ($y9 < $z9) {
							$a9 = $y9;
							$c9 = $z9;
						}else{
							$a9 = $z9;
							$c9 = $y9;
						}
					}
				}else{
					$c9 = $x9;
						if ($y9 < $z9) {
							$a9 = $y9;
							$b9 = $z9;
						}else{
							$a9 = $z9;
							$b9 = $y9;
						}
				}
				
			echo "<div>$a9, $b9, $c9</div>";}
			?>
		</div>

		<div>
			<h3>ATIVIDADE 10</h3>
			<p>Pega três números e diz que tipo de triângulo teria essas dimensões como lados.</p>
			
						<form method="post">
				<label for="x10">Primeiro lado: </label>
				<input type='text' name="x10">
				<label for="y10">Segundo lado: </label>
				<input type='text' name="y10">
				<label for="z10">Terceiro lado: </label>
				<input type='text' name="z10">
				<input type="submit" value="Verificar">
			</form><br>
			
			<?php
			if(isset($_POST['x10']) or isset($_POST["y10"]) or isset($_POST["z10"])){
				$x10 = $_POST['x10'];
				$y10 = $_POST['y10'];
				$z10 = $_POST['z10'];
				
				if($x10 == $y10 || $x10 == $z10) {
					if ($x10 == $y10 && $x10 == $z10) {
						echo "<div>O triângulo é equilátero.</div>";
					}else{
						echo "<div>O triângulo é isóceles.</div>";
					}
				}elseif($y10 == $z10) {
					echo "<div>O triângulo é isóceles.</div>";
				}else{
					echo "<div>O triângulo é escaleno.</div>";
				}}
			?>
		</div>
		
		<div>
			<h3>ATIVIDADE 11</h3>
			<p>Mostra data e hora atual.</p>
			
			<div>
			<?php
				date_default_timezone_set("America/Sao_Paulo");
				echo date("l, d/m/Y");
				echo " - ";
				echo date("H:i:s");
			?>
			</div>
		</div>
		<div>
			<h3>ATIVIDADE 12</h3>
			<p>Capitais do Sul.</p>
			
			<?php
				$estado = array("PR"=>"Curitiba","SC"=>"Florianópolis","RS"=>"Porto Alegre");
			?>
			
			<table>
				<tr>
					<th>Paraná</th>
					<th>Santa Catarina</th>
					<th>Rio Grande do Sul</th>
				</tr>
				<tr>
					<td><?php echo $estado['PR'];?></td>
					<td><?php echo $estado['SC'];?></td>
					<td><?php echo $estado['RS'];?></td>
				</tr>
			</table>
		</div>
		
		<div>
			<h3>ATIVIDADE 13</h3>
			<p>Valor das variáveis $a, $b, $c, $x, $y e $z</p>
			
			<?php
				$a=2;
				$b=4;
				$c=6;
				$x= --
				$c + $b;
				$y= $b++ + $a;
				$z= $a - $b--;
			?>
			
			<table>
				<tr>
					<th>$a</th>
					<th>$b</th>
					<th>$c</th>
					<th>$x</th>
					<th>$y</th>
					<th>$z</th>
				</tr>
				<tr>
					<td><?php echo $a;?></td>
					<td><?php echo $b;?></td>
					<td><?php echo $c;?></td>
					<td><?php echo $x;?></td>
					<td><?php echo $y;?></td>
					<td><?php echo $z;?></td>
				</tr>
			</table>
		</div>
		
		<div>
			<h3>ATIVIDADE 14</h3>
			<p>Curso.</p>
			
			<?php
				$curso = array("Nome"=>"PHP","Data"=>"16/06","Carga"=>"200h","Local"=>"ETG");
				foreach($curso as $x => $y)
			{
				echo "$x: $y <br>";
			}
			echo count($curso);
			?>
		</div>
		
		<div>
			<h3>ATIVIDADE 15</h3>
			<p>Área e perímetro de um retângulo.</p>
			
		<form method="post">
			<label for="ra">Altura: </label>
			<input type='text' name="ra">
			<label for="rc">Comprimento: </label>
			<input type='text' name="rc">
			<input type="submit" value="Calcular">
		</form>
			
		<?php
			if(isset($_POST['ra']) or isset($_POST["rc"])){
				$ra = $_POST['ra'];
				$rc = $_POST['rc'];
				
				$area = $ra*$rc;
				$per = ($ra+$rc)*2;

			echo
			"<table>
				<tr>
					<th>Área</th>
					<th>Perímetro</th>
				</tr>
				<tr>
					<td>$area</td>
					<td>$per</td>
				</tr>
			</table>";
			}
		?>
		</div>
		
	</body>

</html>
