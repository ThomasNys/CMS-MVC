<?php
/**
 * Created by PhpStorm.
 * User: minis
 * Date: 2/02/2019
 * Time: 18:59
 */
require "app/start.php";
$statement = $db->prepare("SELECT page_id, label,slug FROM pages");
$statement->execute();
$pages = $statement->fetchAll(PDO::FETCH_ASSOC);
require VIEW_ROOT.'/home.php';
