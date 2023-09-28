<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atividade voto php</title>
</head>
<body>
    <h2> verificaçao de idade </h2>
    <form method="post">
    <label for="idade">Digite sua idade </label>
    <input type="number" id="idade" name="idade" required>
    <input type="submit" value="Verificar">
    </form>
    
<?php
$idade = intval ($_POST["idade"]);

if ($idade < 16) {
    echo "Não pode votar.";

} elseif ($idade >=16 && $idade<18){
    echo "Voto facultativo.";

}elseif ($idade >=18 && $idade <= 65){
  echo"voto obrigatório";

}elseif ($idade>=66){
    echo "voto facutativo";
}

?>

</body>
</html>


