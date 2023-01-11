<?php

require './interfaces.php';

class JSONFeedFormat implements FeedFormat
{
    public function generateFeed($productList, $platform)
    {
        $jsonData = json_encode($productList);
        return $jsonData;
    }
}

class XMLFeedFormat implements FeedFormat
{
    public function generateFeed($productList, $platform)
    {
        $xml = new SimpleXMLElement('<root/>');
        $this->array_to_xml($productList, $xml);
        $xml = $xml->asXML();
        return $xml;
    }

    public function array_to_xml($product_list, &$xml)
    {
        foreach($product_list as $key => $value) {
            if(is_array($value)) {
                if(!is_numeric($key)){
                    $subnode = $xml->addChild("$key");
                    $this->array_to_xml($value, $subnode);
                }else{
                    $subnode = $xml->addChild("item");
                    $this->array_to_xml($value, $subnode);
                }
            }else {
                $xml->addChild("$key",htmlspecialchars("$value"));
            }
        }
    }
}
