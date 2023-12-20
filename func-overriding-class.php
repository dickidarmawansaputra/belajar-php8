<?php
class ParentClass
{
    function method(string $name)  {
        
    }
}

// wajib sama ketika overriding
class ChildClass extends ParentClass
{
    function method(int $name) {
        
    }
}