<?php

require './PlatformFactory.php';
require './FeedFormatFactory.php';
require './ProductDao.php';

class ProductFeeder
{
    private $platformModule;
    private $feedFormat;
    private $db;

    public function __construct($db, $platformName, $feedFormatName)
    {
        $this->db = $db;
        $this->platformModule = PlatformFactory::create($platformName);;
        $this->feedFormat = FeedFormatFactory::create($feedFormatName);
    }

    public function setPlatformModule($platformName)
    {
        $this->platformModule = PlatformFactory::create($platformName);
    }

    public function setFeedFormat($feedFormatName)
    {
        $this->feedFormat = FeedFormatFactory::create($feedFormatName);
    }

    public function generateFeed()
    {
        $productDAO = new ProductDAO($this->db);
        $productList = $productDAO->getAllProducts();

        return $this->platformModule->generateFeed($productList, $this->feedFormat);
    }
}
