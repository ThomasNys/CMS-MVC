<?php
/**
 * Created by PhpStorm.
 * User: minis
 * Date: 2/02/2019
 * Time: 18:58
 */
// Set application errors on display:
ini_set('display_errors', 'on');
// Set the app root of the application
define('APP_ROOT', __DIR__);
define('VIEW_ROOT', APP_ROOT.'/views');
define('BASE_URL', 'http://localhost/simple-CMS/');
try{
    $db = new PDO('mysql:host=localhost;dbname=CMS', 'root', 'BirthDayApp');
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    //echo "Connected successfully";
}catch(PDOException $e){
    echo "Connection failed";
}
require 'functions.php';
