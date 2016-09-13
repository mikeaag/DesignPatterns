<?php
require_once 'AbstractButtonFactory.php';

$appearance = "osx";
$factory = new AbstractButtonFactory();
$button = $factory->CreateButton();
$button->Paint();
