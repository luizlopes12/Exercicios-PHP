<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">
    <title>PHP1</title>
</head>
<body>
    <div class="container">
    <?php
    /*Definição do universo*/
    $universe = "Marvel";
    /*Numero de repetições*/
    $rep = 5;
    /*Nome do herói*/
    $hero = "Viuva Negra";
    for($x = 0;$x <= $rep; $x++){
if($universe == "Marvel"){
            echo "<h1>O universo é Marvel</h1> <br>";
            if($hero == "Hulk"){
                echo "O personagem é Hulk <br>";
                echo "<img src='imgs/hulk.jpg'><br>";
            }
            else if($hero == "Capitão América"){
                echo "O personagem é Capitão América <br>";
                echo "<img src='imgs/capita.jpg' heigth='200'><br>";
            }
            else if($hero == "Homem de Ferro"){
                echo "O personagem é Homem de Ferro <br>";
                echo "<img src='imgs/iron.jpg'><br>";
            }
            else if($hero == "Pantera Negra"){
                echo "O personagem é Pantera Negra <br>";
                echo "<img src='imgs/F.jpg'><br>";
            }
            else if($hero == "Viuva Negra"){
                echo "O personagem é Viuva Negra <br>";
                echo "<img src='imgs/viuva.jpg'><br>";
            }
            else if($hero == "Thor"){
                echo "O personagem é Thor <br>";
                echo "<img src='imgs/thor.jpg'><br>";
            }
            else if($hero == "Feiticeira escarlate"){
                echo "O personagem é Feiticeira Escarlate <br>";
                echo "<img src='imgs/escar.jpg'><br>";
            }
            else if($hero == "Vespa"){
                echo "O personagem é Vespa <br>";
                echo "<img src='imgs/vespa.jpg'><br>";
            }
            else if($hero == "Homem Aranha"){
                echo "O personagem é Homem Aranha <br>";
                echo "<img src='imgs/aranha.jpg'><br>";
            }
            else if($hero == "Homem Formiga"){
                echo "O personagem é Homem Formiga <br>";
                echo "<img src='imgs/formiga.jfif'><br>";
            }
            else{
                echo "Personagem inválido <br>";
            }
}
    } 
if($universe == "DC"){
    $x = 0;
    while($x <= $rep){
            echo "<h1>O universo é DC </h1> <br>";
            if($hero == "Aquaman"){
                echo "O personagem é Aquaman <br>";
                echo "<img src='imgs/aqua.jpg'><br>";
            }
            else if($hero == "Batman"){
                echo "O personagem é Batman <br>";
                echo "<img src='imgs/bat.jpeg'><br>";
            }
            else if($hero == "Superman"){
                echo "O personagem é Superman <br>";
                echo "<img src='imgs/super.jpg'><br>";
            }
            else if($hero == "Lanterna Verde"){
                echo "O personagem é Lanterna Verde <br>";
                echo "<img src='imgs/lanterna.jpg'><br>";
            }
            else if($hero == "Mulher Maravilha"){
                echo "O personagem é Mulher Maravilha <br>";
                echo "<img src='imgs/maravilha.jpg'><br>";
            }
            else if($hero == "Coringa"){
                echo "O personagem é Coringa <br>";
                echo "<img src='imgs/coronga.jpg'><br>";
            }
            else if($hero == "Charada"){
                echo "O personagem é Charada <br>";
                echo "<img src='imgs/charadinha.jpg'><br>";
            }
            else if($hero == "Arqueiro Verde"){
                echo "O personagem é Arqueiro Verde <br>";
                echo "<img src='imgs/arq.jpeg'><br>";
            }
            else if($hero == "Robin"){
                echo "O personagem é Robin <br>";
                echo "<img src='imgs/rob.jpeg'><br>";
            }
            else if($hero == "Ravena"){
                echo "O personagem é Ravena <br>";
                echo "<img src='imgs/ravena.jpg'><br>";
            }
            else{
                echo "Personagem inválido <br>";
            }
            $x++;
    }
}
else if($universe != "DC" and $universe != "Marvel"){
            echo "O universo é inválido <br>";
}
    ?>

    
</div>
</body>
</html>