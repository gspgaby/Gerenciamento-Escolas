<?php 
@session_start();
require_once("../conexao.php");
require_once("verificar.php");
$id_usuario = $_SESSION['id_usuario'];

//RECUPERAR DADOS DO USUÁRIO
$query = $pdo->query("SELECT * from usuarios where id = '$id_usuario' ");
$res = $query->fetchAll(PDO::FETCH_ASSOC);
$nome_usuario = @$res[0]['nome'];
$email_usuario = @$res[0]['email'];
$senha_usuario = @$res[0]['senha'];
$nivel_usuario = @$res[0]['nivel'];

//MENUS DO PAINEL
$menu1 = 'home';
$menu2 = 'escolas';
$menu3 = 'turmas';
$menu4 = 'usuarios';
$menu5 = 'niveis';


if(@$_GET['pag'] == ""){
	$pag = $menu1;
}else{
	$pag = $_GET['pag'];
}


?>

<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
	  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css">
	  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
	  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	  <link rel="stylesheet" type="text/css" href="../DataTables/datatables.min.css"/>
	  <link rel="stylesheet" type="text/css" href="../css/style.css"/>
    <title><?php echo $nome_sistema ?></title>
  </head>
  <body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
  <div class="container-fluid">
    <a class="navbar-brand" href="index.php?pag=<?php echo $menu2 ?>">SME-RJ</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarSupportedContent">
				<ul class="navbar-nav me-auto mb-2 mb-lg-0">
					<li class="nav-item">
						<a class="nav-link active" aria-current="page" href="index.php?pag=<?php echo $menu1 ?>">Home</a>
					</li>
					<li class="nav-item">
						<a class="nav-link active" aria-current="page" href="index.php?pag=<?php echo $menu2 ?>">Escolas</a>
					</li>
					<li class="nav-item">
						<a class="nav-link active" aria-current="page" href="index.php?pag=<?php echo $menu3 ?>">Turmas</a>
					</li>
					<li class="nav-item">
						<a class="nav-link active" aria-current="page" href="index.php?pag=<?php echo $menu4 ?>">Usuários</a>
					</li>
					<li class="nav-item">
						<a class="nav-link active" aria-current="page" href="index.php?pag=<?php echo $menu5 ?>">Níveis</a>
					</li>
				</ul>
				<div class="d-flex mr-4">					
          <a class="btn btn-primary" href="../logout.php">Sair</a>		
				</div>
			</div>
		</div>
	</nav>

	<div class="container-fluid mb-4 mx-4">
		<?php 		
		require_once($pag.'.php');
		?>
	</div>
</body>
</html>
