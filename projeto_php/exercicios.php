<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculo IMC</title>
    <link rel="stylesheet" href="css/exercicios.css">
</head>
<body>
    <h1>Calcule o seu IMC</h1>
    <h3>Informe os seus dados:</h3>
    <form method="get">
    <label name="nome">Nome: </label>
    <input type="text" name="nome" placeholder="Informe seu nome">
      <br><br>
        <label name="peso">Peso:</label>
        <input type="text" name="peso" placeholder="Informe o seu peso">
      <br><br>
        <label name="altura">Altura: </label>
        <input type="text" name="altura" placeholder="Informe a sua altura">
        <br><br>
        <button type="submmit">Enviar</button>
    </form><br><hr>
    
</body>
</html>

  <?php
 if(empty($_REQUEST['peso']) && empty($_REQUEST['altura']) && empty($_REQUEST['nome'])){

 }
 else{ 

$peso = $_REQUEST['peso'];
$altura = $_REQUEST['altura'];
$nome = $_REQUEST['nome'];
$imc_r = $peso / ($altura **2);
$imc = number_format($imc_r,1,',','.');
}
if(empty($imc) && empty($nome)){
  echo "";
}else{
echo "IMC é $imc.<br>";

if($imc < 18.5){
  echo "$nome, você está abaixo do peso.";
}
elseif($imc < 25){
  echo "$nome, você está no peso normal.";
}
elseif($imc < 30){
  echo "$nome, você está sobrepeso.";
}
elseif($imc < 35){
  echo "$nome, você está em obesidade I.";
}
elseif($imc < 40){
  echo "$nome, você está em obesidade II.";
}
else{
  echo "$nome, você está em obesidade III.";
}
}
/*IMC Classificação
Menor que 18,5
Abaixo do peso

18,5 a 24,9
Peso normal

25 a 29,9
Sobrepeso

30 a 34,9
Obesidade grau I

35 a 39,9
Obesidade grau II

40 ou mais
Obesidade grau III*/

  ?>