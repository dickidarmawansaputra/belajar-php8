<?php
// karna sudah ada union type jika ingin lebih dari 1 tipe data
// sekarang mixed adalah tipe data gabungan dari dibawah ini
// array|bool|callable|int|float|null|object|resource|string

function testMixed(mixed $data): mixed {
    return match (true) {
        is_array($data) => [],
        is_string($data) => "",
        is_int($data) => 1,
        default => null
    };
}

testMixed([]);
testMixed("");
testMixed(100);