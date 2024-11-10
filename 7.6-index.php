<?php

$phrases = ["Привіт! Я - Максим!", "А я Оля!", "Як у Тебе справи?", "Нормально, А у ТЕбе як?"];

function tolowerregistr($a)
{
    if (is_string($a)) {
        $b = mb_strtolower($a);
        return $b;
    } else {
        return null;
    }
};
// function impl($c)
// {
//     $c = implode($c, "-");
// };
$array = array_map("tolowerregistr", $phrases);
print_r($array);
// $reduce = array_reduce($array, "impl");
// echo $reduce;


