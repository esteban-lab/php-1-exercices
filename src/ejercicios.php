<?php
declare(strict_types=1);

//ejerecicioarraytest

function sumArray(array $array): int{
    $sum = 0;

    for ($index = 0; $index < sizeof($array);$index++){
        $sum += $array[$index];
    }
    return $sum;
}
//ejercicio numero maximo

function findMax(array $array): int{
    $max = $array[0];
    for($index = 0 ; $index <= count($array)-1; $index++ ){
        if ($array[$index] > $max){
            $max = $array[$index];
        }
    }
    return $max;
} 

//ejercicio average

function averageAge(array $people): int{
    $sum = 0;
    foreach ($people as $person ) {
        $sum += $person['age'];
        
    }
    $totalAges = $sum/count($people);
    return $totalAges;
}

//reverse text  " hola que tal"

//lat éuq aloH
function reverseString (string $string): string { // $tring = Hola qué tal
    $chars = mb_str_split($string);
    
    return implode('', array_reverse($chars));
}

//"tal qué Hola"
function reverseWords (string $string): string {
    $words = explode(' ', $string);

    return implode(' ', array_reverse($words));
}
//"aloH éuq lat"
function reverseCharactersInWords (string $string): string {
    $words = explode(' ', $string);

    $turnWords = [];

    foreach($words as $word) {
        $turnWords[] = reverseString($word);
    }

    return implode(' ', $turnWords);
}