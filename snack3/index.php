
<?php
// Scrivi una funzione che fonde due array (aventi lo stesso numero di elementi) prendendo alternativamente gli elementi da uno e dall'altro
// es. [a,b,c,d,e], [1,2,3,4,5] → [a,1,b,2,c,3,d,4,e,5].

    $letters =  [  'a', 'b', 'c' , 'd' , 'e', 'f', 'g'];
    $numbers =  [   1,   2,   3,    4,    5,   6,   7];

    var_dump($letters, $numbers);

    $result = [];

    for ($i=0; $i < count($letters); $i++) {
        array_push($result, $letters[$i], $numbers[$i]);
    }

    var_dump($result);

?>