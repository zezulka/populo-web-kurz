<?php 

// toto je proměnná celočíselného typu
$a = 0.5;
// toto je proměnná jakožto číslo s desetinným rozvojem
$b = 0.12;
// toto je řetězec, tzv. string
$c = "0";
// tato deklarace je to samé jako proměnná c, tzv. boolean
$d = 'tota je řetězec';
$e = false;
$array = [$a, $b, $c];
// touto tzv. ladící funkcí jsme schopni prohlížet obsah proměnné a její typ
// var_dump($d);
//toto je dvoudimenzionální pole
$two_d_array = [
    [1, 2, 4, 8, 6, 7],
    [2, 5, 6]
];
// když chci přistoupit k číslu pět v $two_d_array
// echo $two_d_array[1][1];

// když chci převést číslo na řetězec, použiji funkci strval
//echo strval($a);

// ekvivalence a porovnávání proměnných
// '=' neznamená porovnání, ale přiřazení hodnoty do proměnné
// '==' znamená porovnání

// další operátory porovnání:
// >, <, >=, <=
//if($a >= $b) {
//    echo "a";
//} else {
//    echo "b";
//}

// pokud chceme hodnotu vrátit (při volání), vždy musíme použít return!
// bereme vždy první return, na který funkce narazí
function add($a, $b) {
    return $a + $b;
}

// volání naší funkce s proměnnými
//  echo add($a, $b);
// volání funkce s hodnotami
//  echo add(1, 2); 
// toto volání selže, protože vkládáme nepodporované typy
//  echo add("auto", "jedna");

// operátor zřetězení je tečka
function surroundWithLi($str) {
    return "<li>" . $str . "</li>";
}

function myFunction($a) {
    if($a == 4) {
        echo "1234";
        return 0;
    }
    return "normální hodnota";
}

echo myFunction(4);
?>