<?php


function sorteio (){
    $vetor = array ();
    for ($x = 0; $x < 5; $x++){
    $vetor[$x] = rand (0000,9999);
    $vetor[$x] = str_pad($vetor[$x], 4, '0', STR_PAD_LEFT);
    }
return $vetor;
}


function separe($premios){

return substr ($premios, 2,4);
}
function mostrarImagens($premios){
$animal = " ";
if ($premios == 1 || $premios == 2 || $premios == 3 || $premios == 4){
echo "<img src = 'imagens/01.png'"."<br>";
}else if ($premios == 5 || $premios == 6 || $premios == 7 || $premios == 8){
echo "<img src = 'imagens/02.png'"."<br>";
}else if ($premios == 9 || $premios == 10 || $premios == 11 || $premios == 12){
echo "<img src = 'imagens/03.png'"."<br>";
}else if ($premios == 13 || $premios == 14 || $premios == 15 || $premios == 16){
echo "<img src = 'imagens/04.png'"."<br>";
}else if ($premios == 17 || $premios == 18 || $premios == 19 || $premios == 20){
echo "<img src = 'imagens/05.png'"."<br>";
}else if ($premios == 21 || $premios == 22 || $premios == 23 || $premios == 24){
echo "<img src = 'imagens/06.png'"."<br>";
}else if ($premios == 25 || $premios == 26 || $premios == 27 || $premios == 28){
echo "<img src = 'imagens/07.png'"."<br>";
}else if ($premios == 29 || $premios == 30 || $premios == 31 || $premios == 32){
echo "<img src = 'imagens/08.png'"."<br>";
}else if ($premios == 33 || $premios == 34 || $premios == 35 || $premios == 36){
echo "<img src = 'imagens/09.png'"."<br>";
}else if ($premios == 37 || $premios == 38 || $premios == 39 || $premios == 40){
echo "<img src = 'imagens/10.png'"."<br>";
}else if ($premios == 41 || $premios == 42 || $premios == 43 || $premios == 44){
echo "<img src = 'imagens/11.png'"."<br>";
}else if ($premios == 45 || $premios == 46 || $premios == 47 || $premios == 48){
echo "<img src = 'imagens/12.png'"."<br>";
}else if ($premios == 49 || $premios == 50 || $premios == 51 || $premios == 52){
echo "<img src = 'imagens/13.png'"."<br>";
}else if ($premios == 53 || $premios == 54 || $premios == 55 || $premios == 56){
echo "<img src = 'imagens/14.png'"."<br>";
}else if ($premios == 57 || $premios == 58 || $premios == 59 || $premios == 60){
echo "<img src = 'imagens/15.png'"."<br>";
}else if ($premios == 61 || $premios == 62 || $premios == 63 || $premios == 64){
echo "<img src = 'imagens/16.png'"."<br>";
}else if ($premios == 65 || $premios == 66 || $premios == 67 || $premios == 68){
echo "<img src = 'imagens/17.png'"."<br>";
}else if ($premios == 69 || $premios == 70 || $premios == 71 || $premios == 72){
echo "<img src = 'imagens/18.png'"."<br>";
}else if ($premios == 73 || $premios == 74 || $premios == 75 || $premios == 76){
echo "<img src = 'imagens/19.png'"."<br>";
}else if ($premios == 77 || $premios == 78 || $premios == 79 || $premios == 80){
echo "<img src = 'imagens/20.png'"."<br>";
}else if ($premios == 81 || $premios == 82 || $premios == 83 || $premios == 84){
echo "<img src = 'imagens/21.png'"."<br>";
}else if ($premios == 85 || $premios == 86 || $premios == 87 || $premios == 88){
echo "<img src = 'imagens/22.png'"."<br>";
}else if ($premios == 89 || $premios == 90 || $premios == 91 || $premios == 92){
echo "<img src = 'imagens/23.png'"."<br>";
}else if ($premios == 93 || $premios == 94 || $premios == 95 || $premios == 96){
echo "<img src = 'imagens/24.png'"."<br>";
}else if ($premios == 97 || $premios == 98 || $premios == 99 || $premios == 00){
echo "<img src = 'imagens/25.png'"."<br>";
}
                                                                                        

}

function renumerar($premios)
{






}

?>
