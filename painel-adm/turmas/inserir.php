<?php 
require_once("../../conexao.php");
require_once("campos.php");

$cp1 = $_POST[$campo1];
$cp2 = $_POST[$campo2];
$cp3 = $_POST[$campo3];
$cp4 = $_POST[$campo4];

//VALIDAR CAMPO
$query = $pdo->query("SELECT * from $pagina where turma = '$cp2' and escola = '$cp1'");
$res = $query->fetchAll(PDO::FETCH_ASSOC);
$total_reg = @count($res);
$id_reg = @$res[0]['id'];
if($total_reg > 0 and $id_reg != $id){
	echo 'Este registro já está cadastrado!!';
	exit();
}

$id = $_POST['id'];

if($id == ""){
	$query = $pdo->prepare("INSERT INTO $pagina set escola = :campo1, turma = :campo2, turno = :campo3, capacidade = :campo4");
}else{
	$query = $pdo->prepare("UPDATE $pagina set escola = :campo1, turma = :campo2, turno = :campo3, capacidade = :campo4 WHERE id = '$id'");
}

$query->bindValue(":campo1", "$cp1");
$query->bindValue(":campo2", "$cp2");
$query->bindValue(":campo3", "$cp3");
$query->bindValue(":campo4", "$cp4");
$query->execute();

echo 'Salvo com Sucesso';

 ?>