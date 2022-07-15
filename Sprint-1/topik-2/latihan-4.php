<?php
// $n = 0;

// for ($r = 2; $r <= 40 ; $r += 2 ) { 
//     echo "$n : $r <br />";
//     $n++;
// }

$n = 0;
$r = 2;

$n = 6;
$lima = "n : " . ($n - 1) . ", r : " . $r * $n;

$n = 10;
$sembilan = "n : " . $n-1 . ", r : " . $r * $n;

$n = 20;
$sembilanBelas = "n : " . $n-1 . ", r : " . $r * $n;

echo "$lima <br />";
echo "$sembilan <br />";
echo $sembilanBelas;
