

Scrivi una funzione che accetti tre argomenti:
un array e due numeri (“a” più piccolo di “b” e “b” grande al massimo quanto il numero di elementi dell’array).
La funzione ritornerà un nuovo array con i valori che hanno la posizione compresa tra “a” e “b”


<?php


function customArraySlice( $array, $minIndex, $maxIndex){

        if ((count($array) < $maxIndex ) || ($minIndex > $maxIndex)
           || ($minIndex < 0) ){
            return false;
        } else {
            $newArray = [];

            for ($i= $minIndex; $i < $maxIndex + 1 ; $i++) {
                $newArray[] = $array[$i];
            }

            return $newArray;
        }
}

var_dump(customArraySlice([1,2,3,4,5], 0, 4));

?>