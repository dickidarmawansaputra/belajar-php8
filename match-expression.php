<?php
$value = "A";
// mirip ternary operator dari if expression
// match ini alternative untuk switch expression
$result = match ($value) {
    "A", "B", "C" => "Lulus",
    "D" => "Tidak Lulus",
    "E" => "Pindah Jurusan Aja",
    default => "Belajar Lagi"
};
echo $result.PHP_EOL;

$nilai = 80;
$hasil = match (true) {
    $nilai >= 80 => "A",
    $nilai >= 70 => "B",
    $nilai >= 60 => "C",
    $nilai < 60 => "D",
    default => "E",
};
echo $hasil.PHP_EOL;