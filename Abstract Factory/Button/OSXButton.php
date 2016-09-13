<?php
require_once '../Interface/ButtonInterface.php';

class OSXButton implements ButtonInterface
{
    public function Paint()
    {
        echo "OSX Button";
    }
}
