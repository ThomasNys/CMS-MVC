<?php

require '../app/start.php';

$statement = $db->prepare("
    SELECT *
    FROM pages
    ORDER BY created ASC
");

$statement->execute();
$pages = $statement->fetchAll(PDO::FETCH_ASSOC);

require VIEW_ROOT."/admin/list.php";
