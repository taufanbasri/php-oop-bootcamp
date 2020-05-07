<?php

interface Animal
{
    public function communicate();
}

class Dog implements Animal {
    public function communicate()
    {
        return 'Bark';
    }
}

class Cat implements Animal {
    public function communicate()
    {
        return 'Meow';
    }
}