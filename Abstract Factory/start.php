<?php
require_once 'AbstractButtonFactory.php';

$factory = new AbstractButtonFactory("osx");
$button = $factory->CreateButton();
$button->Paint();
