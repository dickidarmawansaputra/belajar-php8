<?php
function sayHello(Stringable $stringable): void
{
    echo "Hello {$stringable->__toString()}".PHP_EOL;   
}

// tanpa harus implements Stringable
class Person
{
    public function __toString(): string
    {
        return "Person";        
    }
}

sayHello(new Person());