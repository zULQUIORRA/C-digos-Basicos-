<?php
  // variaveis globais
//   $nome = $_GET['nome'];
//   $sexo =$_GET['sexo'];
     $nome = $_POST["nome"];
     $sexo = $_POST["sexo"];
     $senha = $_POST ["senha"];

  //echo "<p><strong> Nome:".$nome. "</strong></p>";
  //echo "<p><strong> Sexo:".$sexo." ?</strong></p>";
  //echo "<p><strong> Senha:".$_GET ['senha']." ?</strong></p>";
  //echo "<p><strong> ?:".$_REQUEST ['nome']." ?</strong></p>";

  echo strlen($nome);// quantidade de caractéres 
  echo "<br>";
  echo (int)empty($nome);

  if( empty($nome) ){
    echo " campo obrigatório!!!";
  header("location:formulario.php?erro=nome");
  }

    
  // tenha no minimo 6 caractéres
  if(empty($senha)<= 6){
    echo "campo obrigatório!!!";


  }

  ?>