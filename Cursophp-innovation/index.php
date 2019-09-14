<?php

//$categorias = [];
$categorias[] = 'infantil';
$categorias[] = 'adolescente';
$categorias[] = 'adulto';
$categorias[] = 'idoso';


$nome = 'Eduardo';
$idade = 18;

//print_r($categorias);
//echo '<br>';
//var_dump($nome, $idade);

if($idade >= 6 and $idade <=12){
    for($i = 0; $i <= count($categorias); $i++){
        if($categorias[$i] == 'infantil'){
            echo 'O nadador '.$nome. " compete na categoria " .$categorias[$i];
        }
    }
}
else if($idade >= 13 && $idade <=18){
    for($i = 0; $i <= count($categorias); $i++){
        if($categorias[$i] == 'adolescente'){
            echo 'O nadador '.$nome. " compete na categoria ".$categorias[$i];
        }
    }
}
else{
    for($i = 0; $i <= count($categorias); $i++){
        if($categorias[$i] == 'adulto'){
            echo 'O nadador '.$nome. " compete na categoria ".$categorias{$i};
        }
    }
}