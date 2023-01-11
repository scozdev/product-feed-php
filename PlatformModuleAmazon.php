<?php

require './interfaces.php';

class PlatformModuleAmazon implements PlatformModuleInterface
{
    public function generateFeed($productList, FeedFormat $feedFormat)
    {
        return $feedFormat->generateFeed($productList, 'amazon');
    }
}
