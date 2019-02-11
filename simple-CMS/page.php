<?php
require 'app/start.php';
if(empty($_GET['page'])){
    $page = false;
}else{
    $slug = $_GET['page'];
    $page = $db->prepare("
        SELECT *
        FROM pages
        WHERE slug= :slug
    ");
    $page->execute(['slug' => $slug]);
    $page = $page->fetch(PDO::FETCH_ASSOC);
    if($page){
        // Creates object instead of string
        $page['created'] = new DateTime($page['created']);
        if($page['updated']){
            $page['updated'] = new DateTime($page['updated']);
        }
    }
    //var_dump($page);
}
require VIEW_ROOT.'/page/show.php';
