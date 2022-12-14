<?php 

// úloha 1
function all_greater_than_42($numbers) {

    // pomocná proměnná, kterou na konci vracíme
    $result = array();

    // ve for cyklu by se následující věc napsala takto:
    // for($x = 0; $x < count($numbers); $x++) {
    //     if($numbers[$x] > 42) {
    //        array_push($result, $numbers[$x]);
    //     }   
    // }
    // 
    // jde vidět, že foreach nám šetří spoustu práce
	foreach($numbers as $n) {
        if($n > 42) {
            // do pomocné proměnné ukládáme prvek
            // jenom v případě, že aktuální číslo $n je větší
            // než 42
            array_push ($result,$n);
        }
    }
    return $result;
}

// úloha 2
function join_greater_than_42($integers) {

    // voláme funkci all_greater_than_42 a výsledek volání
    // si ukládáme do proměnné integers_greater_than_42
    $integers_greater_than_42 = all_greater_than_42($integers);

    // funkce empty vrací dvě hodnoty, obě dvě typu boolean:
    //    true / pravda - vstupní pole je prázdné 
    //    false / nepravda - pole obsahuje aspoň jeden prvek
    if(empty($integers_greater_than_42)) {
        return "";
    }

    // strval bere na vstup číslo a převede ho na řetězec
    $result = strval($integers_greater_than_42[0]);
    // array_slice vezme pole až od n-tého indexu
    // 
    // tedy array_slice([4,5,6,7], 2) vrátí [6,7]
    //    a array_slice([4,5,6,7], 0) vrátí [4,5,6,7]
    //
    // tady voláme s indexem jedna, protože jsme si do
    // $result uložili už první prvek předtím a chceme
    // projít zbytek, tedy všechna čísla až na to první
    foreach(array_slice($integers_greater_than_42, 1) as $n) {
        $result = $result . ',' . strval($n);
    }

    return $result;
}

// úloha 3
function create_paragraphs($texts) {
}

// úloha 4
function anchor_menu($urls) {
}

echo("Ahoj!");

// Následující příkaz spustí sadu testů, více info v test.php .
require("test.php");
?>