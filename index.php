<?php

require './db.php';
require './Product.php';
require './ProductDao.php';
require './FeedFormatFactory.php';
require './ProductFeeder.php';

// localhost:3000/feed?platform=amazon&format=csv
if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    if ($_SERVER['REQUEST_URI'] === '/feed') {
      $productFeeder = new ProductFeeder($db, $_GET['platform'], $_GET['format']);
      $feed = $productFeeder->generateFeed();
      echo $feed;
      exit();
    } 
} else if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if ($_SERVER['REQUEST_URI'] === '/feed') {
      $productFeeder = new ProductFeeder($db, $_GET['platform'], $_GET['format']);
      $feed = $productFeeder->generateFeed();
      echo $feed;
      exit();
    } 
}
  