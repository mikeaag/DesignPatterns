<?php
require_once '../Interface/ButtonInterface.php';

class WinButton implements ButtonInterface
{
    public function Paint()
    {
        echo "Windows Button";
    }
}