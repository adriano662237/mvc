
<?php require_once("../model/banco.php"); ?>

<!DOCTYPE html>
<html lang="pt-br">

<?php include("head.php"); ?>

<body>

	<?php new banco(); ?>
	<?php include("menu.php"); ?>

	<table class="table">

		<thead>
		    <tr>
			<th>Nome</th>
			<th>Autor</th>
			<th>Quantidade de páginas</th>
			<th>Preço</th>
			<th>Data</th>
			<th>Flag</th>
			<th>Opções</th>
		</tr>
	</thead>
    </table>
</body>

</html>