<?php

class Mailer
{

}

class SendWelcomeMessage
{
    private $mailer;

    public function __construct(Mailer $mailer)
    {
        $this->mailer = $mailer;
    }
}


// --------------------------------------------
class MySqlConnection {
    public function connect() {}
}
 
class PageLoader {
    private $dbConnection;
    public function __construct(MySqlConnection $dbConnection) {
        $this->dbConnection = $dbConnection;
    }
}