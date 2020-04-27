<?php
// Support.php
class Support 
{
    private $username;

    function __construct($username)
    {
        $this->username = $username;
    }

    public function sendMessage($title, $message, $phoneNumber = '')
    {
        if('' == $phoneNumber) {
            return $this->sendPublic($title, $message);
        } else {
            return $this->sendPrivate($title, $message, $phoneNumber);
        }
    }

    protected function sendPublic($title, $message)
    {
        echo "El mensaje se publicaría en el tablón de soporte (público)<br/>";
        echo "Emplearía una clase especial PublishBoard";
    }

    protected function sendPrivate($title, $message, $phoneNumber)
    {
        echo "El mensaje se enviaría al backend del soporte (privado)</br>";
        echo "Emplearía una clase especial PublishBackend";
    }
}
