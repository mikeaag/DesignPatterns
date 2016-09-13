<?php
require_once 'Factory/WinFactory.php';
require_once 'Factory/OSXFactory.php';

$appearance = "osx";
$factory = NULL;

switch ($appearance) {
    case "win":
        $factory = new WinFactory();
        break;
    case "osx":
        $factory = new OSXFactory();
        break;
    default:
        break;
}

$button = $factory->CreateButton();
$button->Paint();