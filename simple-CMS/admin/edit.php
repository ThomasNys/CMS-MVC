<?php

require '../app/start.php';

// Add after form created
if(!empty($_POST)){
    $id = $_POST['id'];
    $title = $_POST['title'];
    $label = $_POST['label'];
    $slug = $_POST['slug'];
    $body = $_POST['body'];

    $updatePage = $db->prepare("
        UPDATE pages
        SET
          title = :title,
          label = :label,
          slug = :slug,
          body = :body,
          updated = NOW()
        Where page_id = :id
    ");

    $updatePage->execute([
        'id' => $id,
        'title' => $title,
        'label'=> $label,
        'slug'=> $slug,
        'body'=> $body
    ]);

    header('Location: '. BASE_URL. 'admin/list.php');
}

// Build first
if(!isset($_GET['id'])){
    header('Location: ' . BASE_URL . 'admin/list.php');
    die();
}

$page = $db->prepare("
    SELECT page_id, title, label, body, slug
    FROM pages
    WHERE page_id = :id
");

$page->execute(['id'=> $_GET['id']]);

$page = $page->fetch(PDO::FETCH_ASSOC);

require VIEW_ROOT .'/admin/edit.php';
