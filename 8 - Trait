<?php

// EX 1 ======================

trait Bank
{
    public function show()
    {
        echo "I AM SHOW FROM BANK";
    }
}

trait Account
{
    public function show()
    {
        echo "I AM SHOW FROM ACCOUNT";
    }
}

class Massage
{
    use Bank, Account {
        Bank::show insteadof Account;
    }
}

$massage = new Massage;
$massage->show();

// EX 2 ======================

trait A
{
    public function show()
    {
        echo "IM TRAIT A";
    }
}

trait B
{
    public function show()
    {
        echo "IM TRAIT B";
    }
}

class Msg
{
    use A, B {
        a::show insteadof B;
        B::show as massage;
    }
}

$obj = new Msg;
$obj->massage();
$obj->show();

// EX 3 ======================

trait A
{
    private function show()
    {
        echo "IM TRAIT A";
    }
}

class Msg
{
    use A{
        A::show as public;
    }
}

$obj = new Msg;
$obj->show();

// EX 4 ======================

trait A
{
    private function show()
    {
        echo "IM TRAIT A";
    }
}

class Msg
{
    use A{
        A::show as public tr;
    }
}

$obj = new Msg;
$obj->tr();

// EX 5 ======================

trait A
{
    private static $val = "Hi";

    public function show()
    {
        echo self::$val;
    }
}

class B
{
    use A;

}

$b = new B;
echo $b->show();
