<?php

require './FeedFormats.php';

class FeedFormatFactory
{
    public static function create($feedFormatName)
    {
        switch ($feedFormatName) {
            case 'json':
                return new JSONFeedFormat();
                break;
            case 'xml':
                return new XMLFeedFormat();
                break;
            default:
                throw new Exception('Invalid feed format name');
        }
    }
}
