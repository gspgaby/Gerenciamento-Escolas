<?php 
require_once("conexao.php");

//CRIAR O USUÁRIO ADMINISTRADOR CASO ELE NÃO EXISTA
$query = $pdo->query("SELECT * from usuarios where nivel = 'Administrador' ");
$res = $query->fetchAll(PDO::FETCH_ASSOC);
$total_reg = @count($res);

//CRIAR O NÍVEL ADMINISTRADOR CASO ELE NÃO EXISTA
$query2 = $pdo->query("SELECT * from niveis where nivel = 'Administrador' ");
$res2 = $query2->fetchAll(PDO::FETCH_ASSOC);
$total_reg2 = @count($res2);

if($total_reg == 0){
  @$pdo->query("INSERT INTO usuarios SET nome = '$nome_adm', email = '$email_adm', senha = '123', nivel = 'Administrador' ");  
}

if($total_reg2 == 0){
  @$pdo->query("INSERT INTO niveis SET nivel = 'Administrador'");  
}


 ?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="img/sme.ico" rel="shortcut icon" type="image/x-icon">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
  <link href="css/login.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
  <script type="text/javascript" src="../DataTables/datatables.min.js"></script>
  <title><?php echo $nome_sistema ?></title>
</head>
<body>

<div class="container">
  <div class="row">
    <div>
      <div class="account-wall">
        <img class="profile-img" src="img/sme-logo.png" alt="SME-RJ">
        <form class="form-signin" method="post" action="autenticar.php">
          <input type="email" name="email" class="form-control mb-2" placeholder="Email" required autofocus>
          <input type="password" name="senha" class="form-control" placeholder="Senha" required>
          <div class="d-grid gap-2 mt-2">
          <button class="btn btn-primary" type="submit">
            Entrar
          </button>
            </div>
        </form>
      </div>     
    </div>
  </div>
</div>

</body>
</html>