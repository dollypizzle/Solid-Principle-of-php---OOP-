interface MailerInterface
{
    public function send();
}
class SmtpMailer implements MailerInterface
{
    public function send()
    {
        // Send an email via SMTP
    }
}
class SendSlackMailer implements MailerInterface
{
    public function send()
    {
        // Send a message via Slack
    }
}
class SendWelcomeMessage
{
    private $mailer;
    public function __construct(MailerInterface $mailer)
    {
        $this->mailer = $mailer;
    }
}