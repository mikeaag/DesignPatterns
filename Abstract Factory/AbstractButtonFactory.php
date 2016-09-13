<?php
require_once '../Factory/WinFactory.php';
require_once '../Factory/OSXFactory.php';
require_once '../Exception/NoFactoryForYouException.php';

class AbstractButtonFactory {
    public function __construct($appearance){
        switch ($appearance) {
            case "win":
                return new WinFactory();
                
            case "osx":
                return new OSXFactory();
                
            default:
                throw new NoFactoryForYouException();
        }
    }
}
