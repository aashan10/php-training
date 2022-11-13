<?php

class Comment
{
    public $text;
    public $user;

    public function __construct($text,$user)
    {
        $this->text =$text;
        $this->user=$user;
    }
    
}
?>