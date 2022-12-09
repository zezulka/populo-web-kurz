<?php

// Sada testů, která ti pomůže při řešení. Všimni si, že
// testy přesně definují, jak vypadají očekávané vstupy a výstupy.
//
// POZOR: testy vycházejí z předpokladu, že pro vnitřní uvození řetězců se
// používají pouze jenom jednoduché uvozovky.
//
// Testy ti tedy vezmou "<a href='google.com'></a>", ale zamítnou
// "<a href\"google.com\"></a>".

// 1.
check_solution(
    "1.1. pro prázdné pole vrací pole",
    all_greater_than_42([]),
    []
);
check_solution(
    "1.2. pro neprázdné pole vrací pouze prvky větší než 42",
    all_greater_than_42([42, -1, 0, 42.1, 41.9, 100]),
    [42.1, 100]
);

// 2.
check_solution(
    "2.1. pro prázdné pole vrací prázdný řetězec",
    join_greater_than_42([0, 1, 2]),
    ""
);
check_solution(
    "2.2. pro pole s jedním vyhovujícím číslem vrací pouze číslo",
    join_greater_than_42([1,31,43]),
    "43"
);
check_solution(
    "2.3. více vyhovujících čísel je odděleno čárkou",
    join_greater_than_42([100,31,43]),
    "100,43"
);

// 3.
check_solution(
    "3.1. vrací prázdný řetězec pro prázdné pole",
    create_paragraphs([]),
    ""
);
check_solution(
    "3.2. vrací elementy &ltp&gt obalené &ltsection&gt",
    create_paragraphs([
        "Lorem ipsum dolor sit amet consectetur adipisicing elit.",
        "Dignissimos distinctio quo molestiae corporis."
    ]),
    "<section count='2'><p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p><p>Dignissimos distinctio quo molestiae corporis.</p></section>"
);

// 4.
check_solution(
    "4.1. vrací 'Bez odkazů' pro prázdné pole",
    anchor_menu([]),
    "Bez odkazů"
);
check_solution(
    "4.2. vrací elementy &ltp&gt v neseřazeném seznamu",
    anchor_menu(["http://google.com", "http://skolapopulo.cz"]),
    "<ul><li><a href='http://google.com' target='_blank'>http://google.com</a></li><li><a href='http://skolapopulo.cz' target='_blank'>http://skolapopulo.cz</a></li></ul>"
);
check_bonus_solution(
    "4.3. na výstup vrací pouze validní URL",
    anchor_menu(["http://google.com", "odkaz", "http://skolapopulo.cz"]),
    "<ul><li><a href='http://google.com' target='_blank'>http://google.com</a></li><li><a href='http://skolapopulo.cz' target='_blank'>http://skolapopulo.cz</a></li></ul>"
);

// pomocné funkce, které kontrolují správnost řešení
function check_solution($test_name, $answer, $expected_answer) {
    echo($test_name);
    if(answer_is_correct($answer, $expected_answer)) {
        echo_correct(" OK");
    } else if($answer == null) {
        echo_wrong(" NOK, funkce nevrátila žádnou hodnotu");
    } else {
        echo_wrong(" NOK, funkce vrátila jinou hodnotu </br>");
        print_report($answer, $expected_answer);
    }
    echo("</br>");
    echo("</br>");
}

function check_bonus_solution($test_name, $answer, $expected_answer) {
    echo("BONUS " . $test_name);
    if(answer_is_correct($answer, $expected_answer)) {
        echo_correct(" OK");
    } else if($answer == null) {
        echo_wrong_bonus(" NOK, funkce nevrátila žádnou hodnotu");
    } else {
        echo_wrong_bonus(" NOK, funkce vrátila jinou hodnotu </br>");
        print_report($answer, $expected_answer);
    }
}

function print_report($answer, $expected_answer) {
    echo("výstup </br>");
    echo(htmlspecialchars($answer) . "</br>");
    echo("se neshoduje s očekávanou hodnotou </br>");
    echo(htmlspecialchars($expected_answer));
}

function answer_is_correct($answer, $expected_answer) {
    return $answer == $expected_answer 
        && gettype($answer) == gettype($expected_answer);
}

function echo_correct($msg) {
    echo("<span style='color:green'>$msg</span></br>");
}

function echo_wrong($msg) {
    echo("<span style='color:red'>$msg</span></br>");
}

function echo_wrong_bonus($msg) {
    echo("<span style='color:#FFCC00'>$msg</span></br>");
}

?>