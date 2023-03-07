<?php

class Mail
{
    public $data = [];
    public static $subject = 'testing';
    public const FROM = '';
    public static $to = "bdhm7618@gmail.com";
    public function __construct(array $data)
    {
        $this->data = $data;
    }

    public  function sent()
    {
        try {
            $mail = mail(self::$to, self::$subject, $this->getMailContent());
            if ($mail) {
                return "sent mail successfully";
            } else {
                return false;
            }
        } catch (\Exception $e) {
            return  $e->getMessage();
        }
    }

    public  function getMailContent()
    {
        ob_start();
        $data = $this->data;
        include __DIR__ . "/../send-mail.php";
        return ob_get_clean();
    }
}
