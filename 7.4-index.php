<?php

$arr = [1, 4, 9, 16, 25, "привіт", 49, 64, 81, 100, 121];
$func = function($a){
//   for ($i=0; $i <= var_dump(count($a)); $i++) {
if (is_int($a)) {
    return sqrt($a);
} 
else {
    return "Error";
}
    
//   }
};
$array = array_map($func, $arr);
print_r($array);