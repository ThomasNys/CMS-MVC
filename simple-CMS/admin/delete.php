<?php
require '../app/start.php';

if(isset($_GET['id'])){
    // DELETE

    $deletePage = $db->prepare("
        DELETE FROM pages
        WHERE page_id = :id
    ");

    $deletePage->execute([
        'id'=>escape($_GET['id'])
    ]);
}

header('Location: ' . BASE_URL . 'admin/list.php');
