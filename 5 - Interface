<?php

// EXAMPLE 1  ======================

interface A
{
    public function hi();  //abstract 
}

interface B
{
    public function hello(); //abstract 
}

class C implements A, B
{
    public function hi()
    {
        echo "HI";
    }

    public function hello()
    {
        echo "HELLO";
    }
}

$cmn = new C;
$cmn->hi();
$cmn->hello();

// EXAMPLE 2  ======================

interface A
{
    public function foo();
}

interface B extends A
{
    public function baz();
}

class C implements B
{
    public function foo()
    {
    }

    public function baz()
    {
    }
}

// EXAMPLE 3 ======================

interface Animal
{
    public function makeSound();
}

class Cat implements Animal
{
    public function makeSound()
    {
        echo " Meow ";
    }
}

class Dog implements Animal
{
    public function makeSound()
    {
        echo " Bhau ";
    }
}

$cat = new Cat;
$cat->makeSound();

$dog = new Dog;
$dog->makeSound();

// EXAMPLE 4 ======================

interface A
{
    public function setname($n);
}

interface B
{
    public function prefix($p);
}

class Common implements A, B
{

    public $name;
    public $preFix;

    public function setname($n)
    {
        $this->name = $n;
    }

    public function prefix($p)
    {
        $this->preFix = $p;

    }

    public function show()
    {
        echo "{$this->preFix} {$this->name}";
    }
}

$cmn = new Common;
$cmn->preFix("HI");
$cmn->setname("ANIK");
$cmn->show("ANIK");
