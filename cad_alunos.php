<?php

if(isset($_POST["submit"])){
  include_once "conexao.php";


  $nome = $_POST["nome"];
  $escolaridade = $_POST["escolaridade"];
  $email = $_POST["email"];
  $serie = $_POST["serie"];
  $matricula = $_POST["matricula"];
  $data_nas = $_POST["data_nas"];
  $tel = $_POST["tel"];

  $sql = "INSERT INTO alunos (
    nome,
    email,
    serie,
    matricula,
    data_nas,
    escolaridade,
    tel)
  VALUES('$nome','$email','$serie','$matricula','$data_nas','$escolaridade','$tel')";

  $resultado = $conexao->query($sql);
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
  </style>

</head>

<body class=" bg-dark bg-gradient">
  <header class="navbar bg-dark  navbar-dark topo">

   <a href="index.html"><img src="imagens/valorant.svg" alt="valorant"></a>
    <h1>SISTEMA DE CADASTRO ESCOLAR - 2022 <br> 
    <span>TELA DE CADASTRO ALUNOS</span>
    </h1>
  </header>


  <main>
    <section class="box">



    <form action="cad_alunos.php" method="POST">

  <div class="row mb-3">
    <label for="inputEmail3" class="col-sm-2 col-form-label">NOME</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="inputEmail3" name="nome">
    </div>
  </div>


  <div class="row mb-3">
    <label for="inputEmail3" class="col-sm-2 col-form-label">EMAIL</label>
    <div class="col-sm-10">
      <input type="email" class="form-control" id="inputEmail3" name="email">
    </div>
  </div>


  <div class="row mb-3">
    <label for="inputPassword3" class="col-sm-2 col-form-label">SERIE</label>
    <div class="col-sm-10">
      <input type="number" class="form-control" id="inputPassword3" name="serie">
    </div>
  </div>


  <fieldset class="row mb-3">
  <div class="row mb-3">
    <label for="inputPassword3" class="col-sm-2 col-form-label">MATRICULA</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="inputPassword3" name="matricula">
    </div>
  </div>


  <fieldset class="row mb-3">
  <div class="row mb-3">
    <label for="inputPassword3" class="col-sm-2 col-form-label">DATA DE NASCIMENTO</label>
    <div class="col-sm-10">
      <input type="date" class="form-control" id="inputPassword3" name="data_nas">
    </div>
  </div>


  <fieldset class="row mb-3">
    <legend class="col-form-label col-sm-3 pt-0">ESCOLARIDADE</legend>
    <div class="col-sm-10">
      <div class="form-check">
        <input class="form-check-input" type="radio" name="escolaridade" id="gridRadios1" value="fundamental" checked="">
        <label class="form-check-label" for="gridRadios1">
          Fundamental
        </label>
      </div>


      <div class="form-check">
        <input class="form-check-input" type="radio" name="escolaridade" id="gridRadios2" value="medio" >
        <label class="form-check-label" for="gridRadios2" >
          Médio
        </label>
      </div>

      <div class="row mb-4 mr-4">
    <label for="inputEmail3" class="col-sm-3 col-form-label">TELEFONE</label>
    <div class="col-sm-10">
      <input type="tel" class="form-control" id="inputEmail3" name="tel">
    </div>
  </div>
  
  </fieldset>



  
  <button type="submit" class="btn btn-primary" name="submit">CADASTRAR</button>
</form>

    <?php
    if($resultado){
      echo "      Seus dados foram enviados com sucessos! ";
    }
    ?>
    </section>
  </main>


</body>

</html>