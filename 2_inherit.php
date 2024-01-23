<?php

// EXAMPLE 1 ======================

class Employe
{
    public $name;
    public $age;
    public $salary;

    public function __construct($n, $a, $s)
    {
        $this->name   = $n;
        $this->age    = $a;
        $this->salary = $s;
    }

    public function info()
    {
        echo "<h3>EMPLYE INFO<h3/>";
        echo "NAME - {$this->name} <br>";
        echo "AGE - {$this->age} <br>";
        echo "SALARY - {$this->salary} <br>";

    }
}

class Manager extends Employe
{
    public $TA    = 1000;
    public $extra = 2000;
    public $totalSalary;

    public function info()
    {
        $this->totalSalary = $this->TA + $this->extra + $this->salary;

        echo "<h3>MANGER INFO<h3/>";

        echo "NAME - {$this->name} <br>";
        echo "AGE - {$this->age} <br>";
        echo "SALARY - {$this->totalSalary} <br>";

    }
}

$e1 = new Employe("Emon", 20, 2000);
$e2 = new Manager("Anik", 25, 4000);

$e1->info();
$e2->info();

// EXAMPLE 2 ======================

class Employe
{
    public $name;
    public $age;
    public $salary;

    public function __construct($n, $a, $s)
    {
        $this->name   = $n;
        $this->age    = $a;
        $this->salary = $s;
    }

    public function info()
    {
        echo "<h3>EMPLYE INFO<h3/>";
        echo "NAME - {$this->name} <br>";
        echo "AGE - {$this->age} <br>";
        echo "SALARY - {$this->salary} <br>";

    }
}

class Manager extends Employe
{
    public $TA    = 1000;
    public $extra = 2000;
    public $totalSalary;

    public function info()
    {
        $this->totalSalary = $this->TA + $this->extra + $this->salary;

        echo "<h3>MANGER INFO<h3/>";

        echo "NAME - {$this->name} <br>";
        echo "AGE - {$this->age} <br>";
        echo "SALARY - {$this->totalSalary} <br>";

    }
}

class SalesMan extends Employe
{
    public $TA    = 10;
    public $extra = 20;
    public $totalSalary;

    public function info()
    {
        $this->totalSalary = $this->TA + $this->extra + $this->salary;

        echo "<h3>SALESMAN INFO<h3/>";
        echo "NAME - {$this->name} <br>";
        echo "AGE - {$this->age} <br>";
        echo "SALARY - {$this->totalSalary} <br>";

    }
}

$e1 = new Employe("Emon", 20, 2000);
$e2 = new Manager("Anik", 25, 4000);
$e3 = new SalesMan("NAFIZ", 25, 100);

$e1->info();
$e2->info();
$e3->info();
