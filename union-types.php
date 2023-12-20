<?php
class Example
{
    public string|int|bool|array $data;
}

$example = new Example();
$example->data = "data";
$example->data = 100;
$example->data = true;
$example->data = [];
var_dump($example);

function sampleFunc(string|array $data): void
{
    if (is_array($data)) {
        echo "Array".PHP_EOL;
    } else if (is_string($data)) {
        echo "String".PHP_EOL;
    }
}

sampleFunc("Dicki");
sampleFunc(["Dicki"]);