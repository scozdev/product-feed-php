<?php

require './PlatformModuleAmazon.php';

class PlatformFactory
{
    public static function create($platformName)
    {
        switch ($platformName) {
            case 'amazon':
                return new PlatformModuleAmazon();
                break;
            // add more cases for other platforms as needed
            default:
                throw new Exception('Invalid platform name');
        }
    }
}