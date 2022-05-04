<?php 
require_once("../../conexao.php");
require_once("campos.php");

echo <<<HTML
<table id="example" class="table table-striped table-light table-hover my-4">
<thead>
<tr>
<th>{$campo1}</th>
<th>{$campo2}</th>
<th>{$campo3}</th>	
<th>{$campo4}</th>									
<th>Ações</th>
</tr>
</thead>
<tbody>
HTML;


$query = $pdo->query("SELECT * from $pagina order by id desc ");
$res = $query->fetchAll(PDO::FETCH_ASSOC);
for($i=0; $i < @count($res); $i++){
	foreach ($res[$i] as $key => $value){} 

		$id = $res[$i]['id'];
		$cp1 = $res[$i]['escola'];
		$cp2 = $res[$i]['turma'];
		$cp3 = $res[$i]['turno'];
		$cp4 = $res[$i]['capacidade'];

echo <<<HTML
	<tr>
	<td>{$cp1}</td>		
	<td>{$cp2}</td>	
	<td>{$cp3}</td>	
	<td>{$cp4}</td>									
	<td>
	<a href="#" onclick="editar('{$id}', '{$cp1}', '{$cp2}', '{$cp3}', '{$cp4}')" title="Editar Registro">	<i class="bi bi-pencil-square text-primary"></i> </a>
	<a href="#" onclick="excluir('{$id}' , '{$cp1}')" title="Excluir Registro"><i class="bi bi-trash-fill"></i></a>
	</td>
	</tr>
	HTML;
} 
echo <<<HTML
</tbody>
</table>
HTML;

?>

<script>
$(document).ready(function() {    
	$('#example').DataTable({
		"ordering": false
	});

} );


function editar(id, escola, turma, turno, capacidade){
	$('#id').val(id);
	$('#<?=$campo1?>').val(escola);
	$('#<?=$campo2?>').val(turma);
	$('#<?=$campo3?>').val(turno);
	$('#<?=$campo4?>').val(capacidade);
	
	$('#tituloModal').text('Editar Registro');
	var myModal = new bootstrap.Modal(document.getElementById('modalForm'), {		});
	myModal.show();
	$('#mensagem').text('');
}



function limparCampos(){
	$('#id').val('');
	$('#<?=$campo1?>').val('');
	$('#<?=$campo2?>').val('');
	$('#<?=$campo3?>').val('');

	$('#mensagem').text('');
	
}

</script>