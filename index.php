<?php

$bok1 = 4;
$bok2 = 5;
$bok3 = 8;
$trojkat = '';

function triangle($bok1, $bok2, $bok3, $trojkat){
    if($bok1>$bok2+$bok4 || $bok2>$bok1+$bok3 || $bok3>$bok1+$bok2){
        $Trojkat = 'Mozna utworzyc trojkat';
    }
    else {
        $Trojkat = 'Nie da się stworzyć trojkata';
    }
}

echo (triangle($bok1, $bok2, $bok3, $trojkat))


/* $num1 = 6;
$num2 = 2;
$operator = '/';
$wynik = 0;

function dodawanie($num1, $num2){
    return $num1+$num2;
}

function odejmowanie($num1, $num2){
    return $num1-$num2;
}

function mnożenie($num1, $num2){
    return $num1*$num2;
}

function dzielenie($num1, $num2){
    return $num1/$num2;
}

if($operator == '+'){
    echo (dodawanie($num1, $num2));
}
else if($operator == '-'){
    echo (odejmowanie($num1, $num2));
}
else if($operator == '*'){
    echo (mnożenie($num1, $num2));
}
else if($operator == '/'){
    echo (dzielenie($num1, $num2));
}

if($operator == '+'){
    $wynik = $num1 + $num2;
    echo $wynik;
}
else if($operator == '-'){
    $wynik = $num1 - $num2;
    echo $wynik;
}
else if($operator == '*'){
    $wynik = $num1 * $num2;
    echo $wynik;
}
else if($operator == '/'){
    $wynik = $num1  $num2;
    echo $wynik;
} */
?>