<?php
session_start();

if (isset($_SESSION['login']) and isset($_SESSION['senha'])) {
}else {
  header('Location:login.php');
  unset($_SESSION['login']);
  unset($_SESSION['senha']);
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
      padding: 5px 30px;
    }

    .topo h1 {
      

      font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
      font-weight: 600;
      color: red;
      margin-right: 500px;
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

    <img src="/imagens/vavazinho.svg" alt="" srcset="">
    <h1>SISTEMA DE CADASTRO ESCOLAR - 2022 <br> FULL-STACK - SENAC</h1>
    <a href="index.html"><button class="btn btn-danger">SAIR</button></a>


  </header>


  <main>
    <section class="box">
      <h1>🚧Aguarde, o Sistema está em Construção🚧 </h1>
    </section>
  </main>


</body>

</html>