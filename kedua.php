<?php

function luasLingkaran($jari): float {
    $luas = 3.14*$jari*$jari;
    return $luas;
}

function kelilingLingkaran($jari): float {
    $keliling = 2 * 3.14 * $jari;
    return $keliling;
}

function volumeBola($jari): float {
    $volume = 4/3 * 3.14 * $jari ** 3;
    return $volume;
}

function volumeTabung($jari, $tinggi): float {
    $volume = 3.14 * $jari ** 2 * $tinggi;
    return $volume;
}

function volumeKerucut($jari, $tinggi): float {
    $volume = 1/3 * 3.14 * $jari * $jari * $tinggi;
    return $volume;
}

$luasTanah = luasLingkaran(45);
echo "Luas Tanah Budi Adalah {$luasTanah}\n";

$kelilingTanah = kelilingLingkaran(45);
echo "Keliling Tanah Budi Adalah {$kelilingTanah}\n";

$volumeBola = volumeBola(45);
echo "Volume Bola dengan jari jari 45 adalah {$volumeBola}\n";

$volumeTabung = volumeTabung(45,10);
echo "Volume Tabung dengan jari jari 45 dan tinggi 10 adalah {$volumeTabung}\n";

$volumeKerucut = volumeKerucut(45,10);
echo "Volume Kerucut dengan jari jari 45 dan tinggi 10 adalah {$volumeKerucut}\n";

