<?php

  session_start();
  include_once "conexao.php";

  if (isset($_POST["submit"]) and !empty($_POST["login"] and !empty($_POST["senha"]))) {

      $login = $_POST['login'];
      $senha = $_POST['senha'];

        $sql = "SELECT * FROM administradores WHERE login='$login'";

        $resultado = $conexao -> query($sql); 


        $usuario = $resultado -> fetch_assoc();  //criar a variavel user. para dividir tudo do qtem no banco

          if (password_verify($senha,$usuario['senha'])) { //verificar se a senha é a correta dps q vc iniciou(decriptou)

              $_SESSION['login'] = $login; //isso (session) para vc nn precisar por a senha toda hora
              $_SESSION['senha'] = $senha;

            header('Location:sistema.php'); //serve para mndr a pessoa para ir para o "sistema.php"

              } else{
                $msg = "senha incorreta!!";

                header("Location:login.php?msg=$msg");
              }
    
                    } else{
                      header("Location:login.php");
                    }


                    


?>