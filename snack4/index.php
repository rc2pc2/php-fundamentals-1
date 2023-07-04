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