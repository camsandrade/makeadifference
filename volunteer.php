<?php include("cabecalho.php");?>

<?php
$nome = $_GET["nome"];
$idade = $_GET["idade"];
$cpf = $_GET["cpf"];
$telefone = $_GET["telefone"];
$descricao = $_GET["descricao"];
$email = $_GET["email"];
$conexao = mysqli_connect('localhost', 'root', '', 'make_a_difference');

$query = "INSERT INTO usuario (nome_voluntario,email_voluntario,telefone_voluntario,descricao_voluntario,cpf,idade) values ('{$nome}', '{$email}', '{$telefone}', '{$descricao}', '{$cpf}', '{$idade}')";
if(mysqli_query($conexao, $query)){ ?>
	<p class="alert-success">
	Usuario <?=$nome;?> adicionado com sucesso!
	</p>	 
<?php } else { ?>
	<p class="aleert-danger">O usuario <?= $nome ?> nao foi adicionado.</p>
<?php 
}
?>

?>

<?php include("rodape.php");?>