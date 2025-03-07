<?php
// Abstract
abstract class Vehicle
{
    abstract public function start();
    abstract public function stop();

    public function honk()
    {
        echo "Honk! Honk!<br>";
    }
}

class Car extends Vehicle
{
    private $brand;
    private $isRunning = false;

    public function __construct($brand)
    {
        $this->brand = $brand;
    }

    public function start()
    {
        $this->isRunning = true;
        echo "Car is starting...<br>";
    }

    public function stop()
    {
        if (!$this->isRunning) {
            echo "Car is already stopped<br>";
            return;
        }
        $this->isRunning = false;
        echo "Car is stopping...<br>";
    }
}

class Bike extends Vehicle
{
    private $brand;
    private $isRunning = false;

    public function __construct($brand)
    {
        $this->brand = $brand;
    }

    public function start()
    {
        $this->isRunning = true;
        echo "Bike is starting...<br>";
    }

    public function stop()
    {
        if (!$this->isRunning) {
            echo "Bike is already stopped<br>";
            return;
        }
        $this->isRunning = false;
        echo "Bike is stopping...<br>";
    }
}

echo "Abstraction<br>";

$car = new Car('Toyota');
$car->start();
$car->honk();
$car->stop();

$bike = new Bike('Yamaha');
$bike->start();
$bike->honk();
$bike->stop();

// Encapsulatrion
class Truck
{
    private $brand;
    private $isRunning = false;

    public function __construct($brand)
    {
        $this->brand = $brand;
    }

    public function getBrand()
    {
        return $this->brand;
    }

    public function setBrand($brand)
    {
        $this->brand = $brand;
    }
}
echo "<br>Encapsulation<br>";

$truck = new Truck('Volvo');
echo $truck->getBrand() . "<br>";
$truck->setBrand('Mercedes');
echo $truck->getBrand() . "<br>";


// Inheritance
class Bus extends Vehicle
{
    private $brand;
    private $isRunning = false;

    public function __construct($brand)
    {
        $this->brand = $brand;
    }

    public function start()
    {
        $this->isRunning = true;
        echo "Bus is starting...<br>";
    }

    public function stop()
    {
        if (!$this->isRunning) {
            echo "Bus is already stopped<br>";
            return;
        }
        $this->isRunning = false;
        echo "Bus is stopping...<br>";
    }
}

echo "<br>Inheritance<br>";

$bus = new Bus('TATA');
$bus->start();
$bus->honk();
$bus->stop();


// Polymorphism
class Scooter extends Vehicle
{
    private $brand;
    private $isRunning = false;

    public function __construct($brand)
    {
        $this->brand = $brand;
    }

    public function start()
    {
        $this->isRunning = true;
        echo "Scooter is starting...<br>";
    }

    public function stop()
    {
        if (!$this->isRunning) {
            echo "Scooter is already stopped<br>";
            return;
        }
        $this->isRunning = false;
        echo "Scooter is stopping...<br>";
    }

    public function honk()
    {
        echo "Beep! Beep!<br>";
    }
}

echo "<br>Polymorphism<br>";

$scooter = new Scooter('Honda');
$scooter->start();
$scooter->honk();
$scooter->stop();
?>
