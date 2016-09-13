<?php
require_once '../Interface/GUIFactoryInterface.php';
require_once '../Button/OSXButton.php';

class OSXFactory implements GUIFactoryInterface
{
    public function CreateButton()
    {
        return new OSXButton();
    }
}