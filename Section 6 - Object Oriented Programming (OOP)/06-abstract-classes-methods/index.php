<?php

abstract class Shape
{
    protected $name;

    public function __construct($name)
    {
        $this->name = $name;
    }
    // Abstract method
    abstract public function calculateArea();

    // Concrete method
    public function getName()
    {
        return $this->name;
    }
}

class Circle extends Shape
{
    private $radius;

    public function __construct($name, $radius)
    {
        parent::__construct($name);
        $this->radius = $radius;
    }

    public function calculateArea()
    {
        return pi() * pow($this->radius, 2);
    }
}

class Rectangle extends Shape
{
    private $width;
    private $height;

    public function __construct($name, $width, $height)
    {
        parent::__construct($name);
        $this->width = $width;
        $this->height = $height;
    }

    public function calculateArea()
    {
        return $this->width * $this->height;
    }
}

class Triangle extends Shape
{
    private $sideA;
    private $sideB;
    private $sideC;

    public function __construct($name, $sideA, $sideB, $sideC)
    {
        parent::__construct($name);
        $this->sideA = $sideA;
        $this->sideB = $sideB;
        $this->sideC = $sideC;
    }

    public function calculateArea()
    {
        if (
            $this->sideA + $this->sideB > $this->sideC &&
            $this->sideA + $this->sideC > $this->sideB &&
            $this->sideB + $this->sideC > $this->sideA
        ) {
            // Semiperimeter        
            $s = ($this->sideA + $this->sideB + $this->sideC) / 2;

            // Heron's formula
            return sqrt($s * ($s - $this->sideA) * ($s - $this->sideB) * ($s - $this->sideC));
        } else {
            return "Invalid triangle dimensions";
        }
    }
}

class Square extends Rectangle
{
    public function __construct($name, $side)
    {
        parent::__construct($name, $side, $side);
    }
}

$circle = new Circle("Circle", 7);
var_dump($circle);
echo "<br>" . $circle->getName() . " Area: " . $circle->calculateArea() . "<br>";

$rectangle = new Rectangle("Rectangle", 5, 9);
var_dump($rectangle);
echo "<br>" . $rectangle->getName() . " Area: " . $rectangle->calculateArea() . "<br>";

$triangle = new Triangle("Triangle", 5, 3, 6);
var_dump($triangle);
echo "<br>" . $triangle->getName() . " Area: " . $triangle->calculateArea() . "<br>";

$square = new Square("Square", 8);
var_dump($square);
echo "<br>" . $square->getName() . " Area: " . $square->calculateArea() . "<br>";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Abstract Classes</title>
</head>

<body class="bg-black text-white"></body>

</html>