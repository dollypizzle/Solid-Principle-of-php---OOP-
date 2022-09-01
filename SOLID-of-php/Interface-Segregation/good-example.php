<?php

interface Codeable
{
    public function code();
}
interface Testable
{
    public function test();
}
class Programmer implements Codeable, Testable
{
    public function code()
    {
        return 'coding';
    }
    public function test()
    {
        return 'testing in localhost';
    }
}
class Tester implements Testable
{
    public function test()
    {
        return 'testing in test server';
    }
}
class ProjectManagement
{
    public function processCode(Codeable $member)
    {
        $member->code();
    }
}

class Cleaner
{
    public function cleaning()
    {
        return 'cleaning the floor';
    }
}

class Clerk 
{
    public function clerking()
    {
        return 'serving the food';
    }
}



$tester = new Tester;
var_dump($tester->test());


$programmer = new Programmer;
var_dump($programmer->test());

$programmer = new Programmer;
var_dump($programmer->code());


$cleaner = new Cleaner;
var_dump($cleaner->cleaning());