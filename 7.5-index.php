<?php

$arr = [-9, 1, 0, 3, -5, 6, 2, -4];

function filter($a)
{
    if ($a > 0) {
        return $a;
    } else {
        return 0;
    }
}
// function product($pr, $b){
//     $pr *= $b;
//     return $pr;
// };
$filtr = array_filter($arr, "filter");
print_r($filtr);
// $produc = array_reduce($filtr, "product");
// echo $produc;

