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
    return substr($premios, 2,4);    
}

function mostrarImagens($premios){
if ($premios == 1 || $premios == 2 || $premios == 3 || $premios == 4){
echo "<img style='width: 10%;' src = 'imagens/01.png'"."<br>";
}else if ($premios == 5 || $premios == 6 || $premios == 7 || $premios == 8){
echo "<img style='width: 10%;' src = 'imagens/02.png'"."<br>";
}else if ($premios == 9 || $premios == 10 || $premios == 11 || $premios == 12){
echo "<img style='width: 10%;' src = 'imagens/03.png'"."<br>";
}else if ($premios == 13 || $premios == 14 || $premios == 15 || $premios == 16){
echo "<img style='width: 10%;' src = 'imagens/04.png'"."<br>";
}else if ($premios == 17 || $premios == 18 || $premios == 19 || $premios == 20){
echo "<img style='width: 10%;' src = 'imagens/05.png'"."<br>";
}else if ($premios == 21 || $premios == 22 || $premios == 23 || $premios == 24){
echo "<img style='width: 10%;' src = 'imagens/06.png'"."<br>";
}else if ($premios == 25 || $premios == 26 || $premios == 27 || $premios == 28){
echo "<img style='width: 10%;' src = 'imagens/07.png'"."<br>";
}else if ($premios == 29 || $premios == 30 || $premios == 31 || $premios == 32){
echo "<img style='width: 10%;' src = 'imagens/08.png'"."<br>";
}else if ($premios == 33 || $premios == 34 || $premios == 35 || $premios == 36){
echo "<img style='width: 10%;' src = 'imagens/09.png'"."<br>";
}else if ($premios == 37 || $premios == 38 || $premios == 39 || $premios == 40){
echo "<img style='width: 10%;' src = 'imagens/10.png'"."<br>";
}else if ($premios == 41 || $premios == 42 || $premios == 43 || $premios == 44){
echo "<img style='width: 10%;' src = 'imagens/11.png'"."<br>";
}else if ($premios == 45 || $premios == 46 || $premios == 47 || $premios == 48){
echo "<img style='width: 10%;' src = 'imagens/12.png'"."<br>";
}else if ($premios == 49 || $premios == 50 || $premios == 51 || $premios == 52){
echo "<img style='width: 10%;' src = 'imagens/13.png'"."<br>";
}else if ($premios == 53 || $premios == 54 || $premios == 55 || $premios == 56){
echo "<img style='width: 10%;' src = 'imagens/14.png'"."<br>";
}else if ($premios == 57 || $premios == 58 || $premios == 59 || $premios == 60){
echo "<img style='width: 10%;' src = 'imagens/15.png'"."<br>";
}else if ($premios == 61 || $premios == 62 || $premios == 63 || $premios == 64){
echo "<img style='width: 10%;' src = 'imagens/16.png'"."<br>";
}else if ($premios == 65 || $premios == 66 || $premios == 67 || $premios == 68){
echo "<img style='width: 10%;' src = 'imagens/17.png'"."<br>";
}else if ($premios == 69 || $premios == 70 || $premios == 71 || $premios == 72){
echo "<img style='width: 10%;' src = 'imagens/18.png'"."<br>";
}else if ($premios == 73 || $premios == 74 || $premios == 75 || $premios == 76){
echo "<img style='width: 10%;' src = 'imagens/19.png'"."<br>";
}else if ($premios == 77 || $premios == 78 || $premios == 79 || $premios == 80){
echo "<img style='width: 10%;' src = 'imagens/20.png'"."<br>";
}else if ($premios == 81 || $premios == 82 || $premios == 83 || $premios == 84){
echo "<img style='width: 10%;' src = 'imagens/21.png'"."<br>";
}else if ($premios == 85 || $premios == 86 || $premios == 87 || $premios == 88){
echo "<img style='width: 10%;' src = 'imagens/22.png'"."<br>";
}else if ($premios == 89 || $premios == 90 || $premios == 91 || $premios == 92){
echo "<img style='width: 10%;' src = 'imagens/23.png'"."<br>";
}else if ($premios == 93 || $premios == 94 || $premios == 95 || $premios == 96){
echo "<img style='width: 10%;' src = 'imagens/24.png'"."<br>";
}else if ($premios == 97 || $premios == 98 || $premios == 99 || $premios == 00){
echo "<img style='width: 10%;' src = 'imagens/25.png'"."<br>";
}

}

function renumerar($animal,$premios, $aposta, $tipo, $numero){
    if($tipo == "simples"){
    $frase = "";
    $renum = array(); 
    for($y=0; $y<5; $y++){
    $renum[$y] = substr($premios[$y], 2, 4);
    
    if ($renum[$y] == 1 || $renum[$y] == 2 || $renum[$y] == 3 || $renum[$y] == 4){
    $renum[$y] = 1; 
    }else if ($renum[$y] == 5 || $renum[$y] == 6 || $renum[$y] == 7 || $renum[$y] == 8){
    $renum[$y] = 2;
    }else if ($renum[$y] == 9 || $renum[$y] == 10 || $renum[$y] == 11 || $renum[$y] == 12){
    $renum[$y] = 3;
    }else if ($renum[$y] == 13 || $renum[$y] == 14 || $renum[$y] == 15 || $renum[$y] == 16){
    $renum[$y] = 4;
    }else if ($renum[$y] == 17 || $renum[$y] == 18 || $renum[$y] == 19 || $renum[$y] == 20){
    $renum[$y] = 5;
    }else if ($renum[$y] == 21 || $renum[$y] == 22 || $renum[$y] == 23 || $renum[$y] == 24){
    $renum[$y] = 6;
    }else if ($renum[$y] == 25 || $renum[$y] == 26 || $renum[$y] == 27 || $renum[$y] == 28){
    $renum[$y] = 7;
    }else if ($renum[$y] == 29 || $renum[$y] == 30 || $renum[$y] == 31 || $renum[$y] == 32){
    $renum[$y] = 8;
    }else if ($renum[$y] == 33 || $renum[$y] == 34 || $renum[$y] == 35 || $renum[$y] == 36){
    $renum[$y] = 9;
    }else if ($renum[$y] == 37 || $renum[$y] == 38 || $renum[$y] == 39 || $renum[$y] == 40){
    $renum[$y] = 10;
    }else if ($renum[$y] == 41 || $renum[$y] == 42 || $renum[$y] == 43 || $renum[$y] == 44){
    $renum[$y] = 11;
    }else if ($renum[$y] == 45 || $renum[$y] == 46 || $renum[$y] == 47 || $renum[$y] == 48){
    $renum[$y] = 12;
    }else if ($renum[$y] == 49 || $renum[$y] == 50 || $renum[$y] == 51 || $renum[$y] == 52){
    $renum[$y] = 13;
    }else if ($renum[$y] == 53 || $renum[$y] == 54 || $renum[$y] == 55 || $renum[$y] == 56){
    $renum[$y] = 14;
    }else if ($renum[$y] == 57 || $renum[$y] == 58 || $renum[$y] == 59 || $renum[$y] == 60){
    $renum[$y] = 15;
    }else if ($renum[$y] == 61 || $renum[$y] == 62 || $renum[$y] == 63 || $renum[$y] == 64){
    $renum[$y] = 16;
    }else if ($renum[$y] == 65 || $renum[$y] == 66 || $renum[$y] == 67 || $renum[$y] == 68){
    $renum[$y] = 17;
    }else if ($renum[$y] == 69 || $renum[$y] == 70 || $renum[$y] == 71 || $renum[$y] == 72){
    $renum[$y] = 18;
    }else if ($renum[$y] == 73 || $renum[$y] == 74 || $renum[$y] == 75 || $renum[$y] == 76){
    $renum[$y] = 19;
    }else if ($renum[$y] == 77 || $renum[$y] == 78 || $renum[$y] == 79 || $renum[$y] == 80){
    $renum[$y] = 20;
    }else if ($renum[$y] == 81 || $renum[$y] == 82 || $renum[$y] == 83 || $renum[$y] == 84){
    $renum[$y] = 21;
    }else if ($renum[$y] == 85 || $renum[$y] == 86 || $renum[$y] == 87 || $renum[$y] == 88){
    $renum[$y] = 22;
    }else if ($renum[$y] == 89 || $renum[$y] == 90 || $renum[$y] == 91 || $renum[$y] == 92){
    $renum[$y] = 23;
    }else if ($renum[$y] == 93 || $renum[$y] == 94 || $renum[$y] == 95 || $renum[$y] == 96){
    $renum[$y] = 24;
    }else if ($renum[$y] == 97 || $renum[$y] == 98 || $renum[$y] == 99 || $renum[$y] == 00){
    $renum[$y] = 25;
    }
    }
     
        if($animal == $renum[0]){
            $numPremio = "1°";
            $aposta = $aposta * 15; 
        } else if ($animal == $renum[1]){   
            $numPremio = "2°";   
            $aposta = $aposta * 5; 
        } else if ($animal == $renum[2]){
            $numPremio = "3°";     
            $aposta = $aposta * 4; 
        } else if ($animal == $renum[3]){ 
            $numPremio = "4°";     
            $aposta = $aposta * 3; 
        } else if ($animal == $renum[4]){
            $numPremio = "5°";
            $aposta = $aposta * 2;
        } else {
            $aposta = 0;
        }
    } else {
        for($t=0; $t<5; $t++){
            if($numero == $premios[$t]){
                if($t == 0){
                    $numPremio = "1°";
                    $aposta = $aposta*35;
                } else if($t == 1){
                    $numPremio = "2°";
                    $aposta = $aposta*30;
                } else if($t == 2){
                    $numPremio = "3°";
                    $aposta = $aposta*25;
                } else if($t == 3){
                    $numPremio = "4°";
                    $aposta = $aposta*20;
                } else if($t == 4){
                    $numPremio = "5°";
                    $aposta = $aposta*15;
                }
            } else {
                $aposta = 0;
            }

        }
    }


    if($aposta != 0){
        $frase = "Parabéns, você ganhou o $numPremio prêmio o valor de R$ $aposta". "<br>";
    } else {
        $frase = "Que pena, você não ganhou";
    }
    
    
    return $frase;
    }
    

?>
