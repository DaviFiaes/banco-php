<?php

if(isset($_POST["submit"])){  //rodar qndo tiver submit
  include_once "conexao.php"; //

  $login = $_POST["login"];
  $senha = password_hash( $_POST["senha"], PASSWORD_DEFAULT);

  $sql = "INSERT INTO administradores (
    login,
    senha)
    VALUES('$login','$senha')";

$resultado = $conexao-> query($sql);




}

?>  













<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- CSS only -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

  <!-- JavaScript Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
  <title>Sistema Full-Stack</title>

  <style>
    .topo {
      color: rgb(241, 91, 109);
      padding: 5px 80px;
      text-align: center; 
    }

    .topo h1 {
      padding: 5px 10px;
      
    }
    .topo span{
      color: white;
      font-weight: 600;
    }

    body {
      height: 100vh;
    }

    main {
      display: flex;
      justify-content: center;
      align-items: center;
      height: 80%;
      color: white;
    }

    .box {
      background: rgba(0, 0, 0, 0.5);
      border-radius: 10px;
      padding: 20px;
      width: 600px;

      display: flex;
      justify-content: space-around;


    }

    .adm{

    }
  </style>

</head>

<body class=" bg-dark bg-gradient">
  <header class="navbar bg-dark  navbar-dark topo">

   <a href="index.html"><img src="imagens/valorant.svg" alt="valorant"></a>
    <h1>SISTEMA DE CADASTRO ESCOLAR - 2022 <br> 
    <span>TELA DE CADASTRO ADMINISTRADORES</span>
    </h1>
  </header>


  <main>
    <section class="box">

          <h1 class="adm">ADMIN</h1>

    <form action="cad_admin.php" method="POST">

  <div class="row mb-3">
    <label for="inputEmail3" class="col-sm-2 col-form-label">Login</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="inputEmail3" name="login">
    </div>
  </div>


  <div class="row mb-3">
    <label for="inputEmail3" class="col-sm-2 col-form-label">Senha</label>
    <div class="col-sm-10">
      <input type="password" class="form-control" id="inputEmail3" name="senha">
    </div>
  </div>


  <button type="submit" class="btn btn-primary" name="submit">CADASTRAR</button>
  
  
</form>

    </section>
  </main>


</body>

</html>