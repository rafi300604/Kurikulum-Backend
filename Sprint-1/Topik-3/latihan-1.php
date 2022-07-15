<?php

//karena n dimulai dari 0 maka variabel n dikurang 1
$n = 9;
$N = $n - 1;
$batasLooping = $N * 2;


$i = 0;

while($i <= $batasLooping) {
    echo "$i ";
    $i += 2;
}