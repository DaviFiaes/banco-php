<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <style>
    body{
      background: linear-gradient(302deg,orange,lightblue);
      display: flex;
      height: 100vh;
      justify-content: center;
      align-items: center;
    }
    .box{
      background: black;
      color: white;
      padding: 20px;
      border-radius: 20px;
    }
    .box input [type= "submit"]{
      background: white;
      color: black;
      font-weight: 500;
      border-radius: 5px;
      padding: 2px 5px;
      box-shadow: 10px 25px 10px white;
      outline: none;
      display: block;
      margin: auto;
      cursor: pointer;
    }
    .resultado{
      margin: 10px auto;
      font: weight 500px; 
      font-family: 'Courier New', Courier, monospace;
      color: red;  
    }

  </style>
</head>
<body>


 <div class="box">
  <form action="index.php" method="POST">


    <label for="n1">numero 1</label>
    <input type="text" name="n1" id="n1">

    <br><br>

    <label for="n2">numero 2</label>
    <input type="text" name="n2" id="n2">
    <br><br>
    <input type="submit" name="submit" value="CAUCULAR">

    <!-- <label for="op">Operadores</label>
    <select name="op" id="po">
      <option value="">soma</option>
      <option value="">subtração</option>
      <option value="">multiplicacao</option>
      <option value="">divisao</option>
    </select> -->


  </form>

      <div class="resultado">
      <?php

if (isset($_POST["submit"])) {
  
$numero1 = $_POST["n1"];
$numero2 = $_POST["n2"];
$op = $_POST["op"];

echo " A soma dos 2 nuumeros q vc digitou é:" .$numero1+$numero2;
}

if($op == "soma"){
  echo "A soma dos dois valores é:" . $n1+$n2;
}


?>
      </div>

 </div>
  
</body>
</html>
