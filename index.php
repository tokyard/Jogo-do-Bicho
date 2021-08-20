<!DOCTYPE html>
<html>
  <head>


  <?php 

include 'funcoes.php';
 

  $title = "Jogo do Bicho";

$animais = array ("Avestruz",
 "Águia",
 "Burro", 
 "Borboleta", 
 "Cachorro", 
 "Cabra", 
 "Carneiro",
"Camelo",
"Cobra",
"Coelho",
"Cavalo",
"Elefante",
"Galo",
"Gato",
"Jacaré",
"Leão",
"Macaco",
"Porco",
"Pavão",
"Peru",
"Touro",
"Tigre",
"Urso",
"Veado",
"Vaca",
);


$typeaposta = (isset($_POST["type"])) ? $_POST ["type"]: 1;
$aposta = (isset($_POST["aposta"])) ? $_POST ["aposta"]: " ";
$numero = (isset($_POST["numero"])) ? $_POST ["numero"]: " ";
$animal = (isset($_POST["animal"])) ? $_POST ["animal"]: " ";



?>

<title> <?php echo $title ?> </title>

  
</head>
<body>
<form method="post">

<fieldset>

<legend>Aposta</legend> 

<div class="form-check">
  <input class="form-check-input" type="radio" name="type" id="type" value = "simples" <?php if ($typeaposta == "simples") echo "checked"; ?>>
  <label class="form-check-label" for="flexRadioDefault1">
  Grupo Simples
  </label>
</div>
<div class="form-check">
  <input class="form-check-input" type="radio" name="type" id="type" value = "milhar" <?php if ($typeaposta == "milhar") echo "checked"; ?>>
  <label class="form-check-label" for="flexRadioDefault2">
  Milhar
  </label>
</div>

<br>
<br>

<i>Valor da Aposta em R$:</i><input type="aposta" name = "aposta"  value = "<?php echo $aposta; ?>"><br><br>


</fieldset>

<br>
<fieldset>

<legend><h4>Milhar</h4> </legend>


  <br> 
<input type="name" name = "numero" value = "<?php echo $numero; ?>" maxlength="4"><br><br>


</fieldset>

<br>


<fieldset> 
  <legend> <h4>Grupo Simples</h4> </legend>

 <div class="form-floating">

  Animal: <select  name = "animal" class="form-select" id="animal" aria-label="Floating label select example">
  
  
  <?php


for ($x = 0; $x < count($animais); $x++){
$index = $x + 1;

if ($index == $animal)
echo "<option value = '$index' selected>$animais[$x]</option>";
else
echo "<option value = '$index'>$animais[$x]</option>";



}

  ?>

  </select>
</div>


<br>
</fieldset>

<br>
<br>
<input class="btn btn-primary" type="submit" value="Apostar" require>






</form>


<br>

<?php



echo "Tipo:".$typeaposta."<br>";
echo "Valor:".$aposta."<br>";
echo "Milhar:".$numero."<br>";
echo "Animal:".$animal."<br>"; 




$premios = sorteio();


echo '<pre>'; print_r($premios); echo '</pre>';

echo "<h1>".$premios[0]."</h1>";
echo separe($premios[0]);
echo mostrarImagens(separe ($premios[0]));
echo "<h1>".$premios[1]."</h1>";
echo separe($premios[1]);
echo mostrarImagens(separe ($premios[1]));
echo "<h1>".$premios[2]."</h1>";
echo separe($premios[2]);
echo mostrarImagens(separe ($premios[2]));
echo "<h1>".$premios[3]."</h1>";
echo separe($premios[3]);
echo mostrarImagens(separe ($premios[3]));
echo "<h1>".$premios[4]."</h1>";
echo separe($premios[4]);
echo mostrarImagens(separe ($premios[4]));


?>




</body>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-eMNCOe7tC1doHpGoWe/6oMVemdAVTMs2xqW4mwXrXsW0L84Iytr2wi5v2QjrP/xp" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.min.js" integrity="sha384-cn7l7gDp0eyniUwwAZgrzD06kc/tftFf19TOAs2zVinnD/C7E91j9yyk5//jjpt/" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
</html>