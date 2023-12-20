<?php
trait SampleTrait
{
    public abstract function sampleFunc(string $name): string;
}

class SampleClass
{
    use SampleTrait;

    // harus sama sesuai trait
    function sampleFunc(int $name): string {
        // hasilnya error di php 8
    }
}