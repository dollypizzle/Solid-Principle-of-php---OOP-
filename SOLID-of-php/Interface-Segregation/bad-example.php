class Clerk 
<?php

interface Codeable
{
    public function code();
}
interface Testable
{
    public function test();
}

class Clerk implements Testable, Codeable
{
    public function clerking()
    {
        return 'serving the food';
    }
}


$clerk = new Clerk;
var_dump($clerk->clerking());