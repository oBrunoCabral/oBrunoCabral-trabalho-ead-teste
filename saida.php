<!DOCTYPE html>
<html>
<meta charset="utf-8">
<head>
	<title>Site da Banda <?php echo $nomeBanda = $_POST['bandaNome']; ?> </title>
	<style type="text/css">
		body {
			background-color: <?php echo $corDaPagina = $_POST['corDeFundo']; ?>;
			color: <?php echo $corDoTexto = $_POST['corTexto']; ?>;
		}
		table, td {
			margin: 0 auto;			
			border: solid 2px;
		}
		.container {
			width: 960px;
			margin: 0 auto;
		}
		.titulo {
			text-align: center;
		}
		.parag{
			text-align: justify;
		}
		.imagem {
			width: 100%;
			height: auto;
		}
	</style>

</head>
<body>
	<div class="container">

		<h1 class="titulo"><?php echo $nomeBanda; ?></h1>

		<figure>
			<img src="<?php echo $imgHero = $_POST['imgBanda']; ?>"
				 alt="<?php echo $imgHero = $_POST['imgTit']; ?>"
				 class="imagem">
			<figcaption><?php echo $legendaImg = $_POST['imgDesc'] ?></figcaption>
		</figure>
		
<!--linha--><hr>

		<h1>Biografia da Banda</h1>
		<p class="parag">
			<?php echo $legendaImg = $_POST['biografiaBanda'] ?>
		</p>

<!--linha--><hr>

		<h1>Integrantes</h1>
		<table>
			<thead>
				<th>Nome</th>
				<th>Data de Nascimento</th>
				<th>Instrumento</th>
			</thead>
			<tbody>
				<tr>
					<td> <?php echo $integranteNome1 = $_POST['integNome1'] ?> </td>
					<td> <?php echo $integranteNasc1 = $_POST['integDtNacto1'] ?> </td>
					<td> <?php echo $integranteInst1 = $_POST['integInstrumento1'] ?> </td>			
				</tr>

				<tr>
					<td> <?php echo $integranteNome1 = $_POST['integNome2'] ?> </td>
					<td> <?php echo $integranteNasc1 = $_POST['integDtNacto2'] ?> </td>
					<td> <?php echo $integranteInst1 = $_POST['integInstrumento2'] ?> </td>			
				</tr>

				<tr>
					<td> <?php echo $integranteNome1 = $_POST['integNome3'] ?> </td>
					<td> <?php echo $integranteNasc1 = $_POST['integDtNacto3'] ?> </td>
					<td> <?php echo $integranteInst1 = $_POST['integInstrumento3'] ?> </td>			
				</tr>				
												
			</tbody>
		</table>

	</div>
</body>
</html>

<!--
<?php
	$integranteNome1 = $_POST['integNome1'];
	$integranteNome2 = $_POST['integNome2'];
	$integranteNome3 = $_POST['integNome3'];
	$integranteInst1 = $_POST['integInstrumento1'];
	$integranteInst2 = $_POST['integInstrumento2'];
	$integranteInst3 = $_POST['integInstrumento3'];
	$integranteNasc1 = $_POST['integDtNacto1'];
	$integranteNasc2 = $_POST['integDtNacto2'];
	$integranteNasc3 = $_POST['integDtNacto3'];

	echo $nomesInteg['nome1'];
	echo $nomesInteg['nome2'];
	echo $nomeBanda;
	
	$imgHero = $_POST['imgBanda'];

	$nomesInteg =	array('nome1' => $_POST['integNome1'] ,
						  'nome2' => $_POST['integNome2'] ,
						  'nome3' => $_POST['integNome3'] );

	$dtNacimentos = array('nascto1' => $_POST['integDtNacto1'], 
						  'nascto2' => $_POST['integDtNacto2'], 
						  'nascto3' => $_POST['integDtNacto3'], );

	$instrumentos = array('instrum1' => $_POST['integInstrumento1'] ,
						  'instrum2' => $_POST['integInstrumento2'] ,
						  'instrum3' => $_POST['integInstrumento3'] , );
?>
-->
