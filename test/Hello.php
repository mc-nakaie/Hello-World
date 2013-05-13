<?php
class Hello
{
    public function getMessage()
    {
        return "hello world";
    }

    public function moreMessage($name)
    {
    	return "Hello, " . $name;
    }
}
?>