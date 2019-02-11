<?php

define('APP_ROOT', __DIR__);
define('BASE_URL', 'http://localhost/MVC/');
define('MODEL', APP_ROOT.'/admin/Models/');
define('VIEW', APP_ROOT.'/admin/Views/');
define('CONTROLLER', APP_ROOT.'/admin/Controllers/');

require_once(VIEW . 'header.php');
require_once(MODEL . 'main.php');
require_once(VIEW . 'footer.php');
?>
