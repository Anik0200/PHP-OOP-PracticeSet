<?php

// EXAMPLE 1 =================

class Base
{
    public static $name = "nabil";

    public static function show(): void
    {
        echo self::$name;
        echo static::$name;
    }
}

class Derive extends Base
{
    public static $name = "anik";

}

Derive::show();

// EXAMPLE 2 =================

class A {
    public static function who() {
        echo __CLASS__;
    }
    public static function test() {
        static::who(); 
    }
}

class B extends A {
    public static function who() {
        echo __CLASS__;
    }
}

B::test();
