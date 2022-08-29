<?php

// Shape is the base class
interface Shape {
    // Define method(s) that will be used by classes who will be implementing this interface.
    public function getArea();
}

class Square implements Shape {
    private $width;
    private $height;

    public function __construct($width, $height) {
        $this->width = $width;
        $this->height = $height;
    }

    public function getArea(){
        return $this->width * $this->height;
    }
}

class Circle implements Shape {
    private $radius;

    public function __construct($radius) {
        $this->radius = $radius;
    }

    public function getArea(){

        return $this->radius * $this->radius * 3.14;
    }
}

function calculateArea(Shape $shape) {
    return $shape->getArea();
}

echo calculateArea(new Square(5, 5)) . "<br/>";
echo calculateArea(new Circle(7));

//-------------------------------------------------------


interface logger {
    public function execute($message);
}

class LogToFile implements Logger {
    public function execute($message)
    {
        var_dump('log the message to a file : ' . $message);
    }
}

class LogToDatabase implements Logger{
    public function execute($message)
    {
        var_dump('log the message to a database : ' . $message);
    }
}


class UsersController {

    protected $logger;

    public function __construct(Logger $logger)
    {
        $this->logger = $logger;
    }

    public function show()
    {
        $user = 'JohnDoe';

        $this->logger->execute($user);
    }
}

$controller = new UsersController(new LogToDatabase);

$controller->show();

