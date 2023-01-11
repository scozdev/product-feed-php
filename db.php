<?php

try{
    $db = new PDO('mysql:host=localhost;dbname=p', 'root', '');

}catch(Exception $e){
    echo $e->getMessage();
}
