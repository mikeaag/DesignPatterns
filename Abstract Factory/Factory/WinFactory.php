<?php
require_once '../Interface/GUIFactoryInterface.php';
require_once '../Button/WinButton.php';

class WinFactory implements GUIFactoryInterface
{
    public function CreateButton()
    {
        return new WinButton();
    }
}