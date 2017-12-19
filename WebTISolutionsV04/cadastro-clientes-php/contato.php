<?php
require_once('conexao.inc.php');
$db = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8",$user, $pass);


$name = $_POST["name"];
$email = $_POST["email"];
$telefone = $_POST["telefone"];
$assunto = $_POST["assunto"];
$comentario = $_POST["mensagem"];

echo '<p>Mensagem enviada com sucesso!</p>';

$sql = 'INSERT INTO usuarios 
		(nome, email, telefone, assunto, comentario)
		VALUES (:nome, :email, :telefone, :assunto, :comentario)';

$stm = $db->prepare($sql);
$stm->execute(['nome'=>$name, 'email'=>$email, 'telefone'=>$telefone, 'assunto'=>$assunto, 'comentario'=>$comentario]);
$ultimo_id = $db->lastInsertId();

/*
$sql = 'SELECT * FROM alunos WHERE id = :id';
$stmt = $db->prepare($sql);
$stmt->execute(['id'=>$ultimo_id]);
$regs =  $stmt->fetchAll();
foreach ($regs as $reg) {
	echo '<h3>Registro '.$reg['nome'].' inserido com sucesso! </h3>'; 
};
echo '<a href="CRUD_PHP.html">Voltar</a>';

$sql = 'SELECT * FROM alunos ORDER BY nome';

$media = [];
$i= 0;
echo '<br/><dvi id="dados">';
echo '<table><th><tr><td>Cod.</td><td>Nome</td><td>Nota1</td><td>Nota2</td><td>Média</td></tr></th>';
foreach($db->query($sql) as $row) {
	# code...
	echo '<tr><td>'.$row['id'].'</td>';
	echo '<td>'.$row['nome'].'</td>';
	echo '<td>'.$row['nota1'].'</td>';
	echo '<td>'.$row['nota2'].'</td>';	

	$media[$i] = ( $row['nota1'] + $row['nota2'] ) / 2;
	echo '<td>'.$media[$i].'</td>';
	$i += 1;

	echo '<td><a href="scriptPHP_SGBD.php?id='.$row['id'].'> - Excluir - <a/></td></tr>';
};

echo '</table>';
echo '</div>';

$id = $_GET["id"]; 

if ($id != '') {

	$sql = 'DELETE FROM alunos
		WHERE id = :id';
		$stmt= $db->prepare($sql);
		$stmt->execute(['id'=> $id]);

	$sql = 'SELECT nome FROM alunos
			WHERE id = :id';	
	$stmt = $db->prepare($sql);
	$stmt->execute(['id'=>$id]);
	$regs = $stmt->fetchAll();

	echo '<h1>Registro '. $regs['nome'] .' apagado com sucesso<h1>';
};
*/
