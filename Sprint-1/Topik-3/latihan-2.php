<?php

//n = 9, ketika nanti saat ditampilkan sudah ada perhitungannya, jadi deret aritmatika ada 9 bilangan (n = 9)
$n = 9;


for ($i = 0; $i <= $n; $i++) {
    if ($i == $n) {
        continue;
    }
    echo "" . ($i * 2 + 1) . " ";
}
