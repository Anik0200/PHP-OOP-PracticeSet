<?php

// EXAMPLE 1 =================

class Base
{
    public static $name = "ANIK";
}

 echo Base::$name;

// EXAMPLE 2 =================

class Base
{
    public static $name;

    public static function show(): void
    {
        echo self::$name;
    }
}

Base::$name = "ANIK";
Base::show();

// EXAMPLE 3 =================

class Base
{
    public static $name;

    public static function setNAme($n): void
    {
        self::$name = $n;
    }
}

class Derive extends Base
{
    public static function getNAme(): void
    {
        echo parent::$name;
    }
}

Base::setNAme("ANIK");
Derive::getNAme();

// EXAMPLE 4 =================

class Base
{
    public static $name;

    public function __construct($n)
    {
        self::$name = $n;
    }
}

class Derive extends Base
{
    public static function getNAme(): void
    {
        echo parent::$name;
    }

    public function __construct()
    {
        self::getNAme();
    }
}

new Base("anik");
new Derive();


