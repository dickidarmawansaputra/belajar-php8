<?php
class Manager
{
    private function test(): void
    {
        
    }
}

// di  php 7 akan error, di php 8 sudah diperbaiki
class VicePresident extends Manager
{
    public function test(string $name): string {
        return "VP";
    }
}