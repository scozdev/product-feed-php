<?php

interface FeedFormat
{
    public function generateFeed($productList, $platform);
}

interface PlatformModuleInterface
{
    public function generateFeed($productList, FeedFormat $feedFormat);
}