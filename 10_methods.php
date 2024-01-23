<?php

// METHOD CHAINING ===========

class A
{
    public function one()
    {
        echo "I'm ONE";
        return $this;
    }

    public function two()
    {
        echo "I'm TWO";
        return $this;
    }

    public function three()
    {
        echo "I'm THREE";
        return $this;
    }
}

$obj = new A;

$obj->one()->two()->three();

// DESTRUCT ===========

class A
{
    public function __construct()
    {
        echo "I'm CONSTRUCT";
    }

    public function one()
    {
        echo "I'm ONE";
    }

    public function two()
    {
        echo "I'm TWO";
    }

    public function __destruct()
    {
        echo "I'm DESTRUCT";
    }
}

$obj = new A;

$obj->one();
$obj->two();

// GET METHOD ==========

class abc      //exam 1
{
    private $name = "anik";

    public function __get($err)
    {
           echo "you are accessing non existing or private property($err)";
    }
}

$obj = new abc;

echo $obj->name;

// exam 2

class abc
{
    private $data = ["Name" => "Anik", "Course" => "Php", "Age" => 100];

    public function __get($key)
    {
        if (array_key_exists($key, $this->data)) {

            return $this->data[$key];
        } else {
            return "This Key($key) Is Not Defined";
        }
    }
}

$obj = new abc;

echo $obj->Name;

// SET METHOD ==========

// ex 1 ===========

class abc
{
    private $name = "anik";

    public function show()
    {
        echo $this->name;
    }

    public function __get($property)
    {
        echo "you are accessing non existing or private property($property) \n";
    }

    public function __set($property, $val)
    {
        if (property_exists($this, $property)) {

            $this->$property = $val;
        } else {
            echo "Property($property) Cant Be Assign Cause Private Or Not Create";
        }
    }
}

$obj = new abc;
$obj->name = "ANIK";
$obj->show();

// CALL METHOD ===================

// ex 1 ===

class A
{
    private function hi()
    {
        echo "hi";
    }

    public function __call($name, $arguments)
    {
        echo "This Is A Non-Existing And Private Method($name)";
    }
}

$obj = new A;
$obj->hi();

// ex 2 ===

class A
{
    private $name;

    private function setName($name)
    {
        $this->name = $name;
        echo $this->name;
    }

    public function __call($method, $arguments)
    {
        if (method_exists($this, $method)) {

            call_user_func_array([$this, $method], $arguments);
        } else {
            echo "Method($method) Not Exist";
        }
    }
}

$obj = new A;
$obj->setName("Nabil");

// CALL STATIC METHOD ===================

// ex 1 =========

class A
{
    private static function hi()
    {
        echo "HI";
    }

    public static function __callStatic($method, $arguments)
    {
        echo "This Is A Non-Existing And Private static Method($method)";
    }
}

A::hi();

// ex 2 =========

class A
{
    private static function hi($name)
    {
        echo "HI $name";
    }

    public static function __callStatic($method, $arguments)
    {
        if (method_exists(__CLASS__, $method)) {

            call_user_func_array([__CLASS__, $method], $arguments);
        } else {
            echo "This Is A Non-Existing And Private static Method($method)";
        }
    }
}

A::hi("ANIK");

// ex 2 =========

class A
{
    private static $name;

    private static function hi($n)
    {
        self::$name = $n;
        echo self::$name;
    }

    public static function __callStatic($method, $arguments)
    {
        if (method_exists(__CLASS__, $method)) {

            call_user_func_array([__CLASS__, $method], $arguments);
        } else {
            echo "This Is A Non-Existing And Private static Method($method)";
        }
    }
}

A::hi("ANIK");

// ISSET METHOD ===================

// ex 1 =====

class A
{
    private $fName;

    public function setName($n)
    {
        $this->fName = $n;
    }

    public function __isset($property)
    {
        echo isset($this->$property);
    }
}

$obj = new A;

$obj->setName("anik");

isset($obj->fName);

print_r($obj);

// ex 2 ======

class A
{
    private $data = ["name" => "anik", "age" => 10];

    public function __isset($key)
    {
        echo isset($this->data[$key]);
    }
}

$obj = new A;

echo isset($obj->age);