!DOCTYPE html>
<html lang="pt-br"><
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Questao 4</title>
</head>
<body>
    <h1>questao4</h1>
<?php
$idade=17;

if($idade<18){ 
    echo"Menor de idade";
}
 elseif($idade>=18&& $idade<60){
    echo "Adulto";
 }
  else{
        echo"Idoso";
  }
  ?>