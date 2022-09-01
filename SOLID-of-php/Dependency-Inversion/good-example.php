<?php

interface Mailer
{
    public function send();
}

class SmtpMailer implements Mailer
{
    public function send()
    {
        return 'welcome';
    }
}

class SendGridMailer implements Mailer
{
    public function send()
    {
        return 'good';
    }
}

class SendWelcomeMessage
{
    private $mailer;

    public function __construct(Mailer $mailer)
    {
        $this->mailer = $mailer;
    }
}


// --------------------------------------------------------

interface DbConnectionInterface {
    public function connect();
} 
 
class MySqlConnection implements DbConnectionInterface {
    public function connect() 
    {
        return 'connecting...';
    }
}
 
class PageLoader {
    private $dbConnection;
    public function __construct(DbConnectionInterface $dbConnection) {
        $this->dbConnection = $dbConnection;
    }
}