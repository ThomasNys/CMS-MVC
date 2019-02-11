<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href= <?php echo BASE_URL. "css/master.css"?> >


    <title>Hello, world!</title>
</head>
<body>
    <div class="container-fluid NAV justify-content-center">
        <div class="row justify-content-center">
            <div class="col-sm-6 justify-content-center">
                <a href="<?php echo BASE_URL . "index.php?action=home";?>">HOME</a>
            </div>
            <div class="col-sm-6 justify-content-center">
                <a href="<?php echo BASE_URL . "index.php?action=webdev";?>">WEBDEV</a>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-sm-6 col-md-4 justify-content-center">
                <a href="<?php echo BASE_URL . "index.php?action=company";?>">COMPANY</a>
            </div>
            <div class="col-sm-6 col-md-4 justify-content-center">
                <a href="<?php echo BASE_URL . "index.php?action=interview";?>">INTERVIEW</a>
            </div>
            <div class="row justify-content-center">
                <div class="col-sm-6 col-md-4 offset-3 justify-content-center">
                    <a href="<?php echo BASE_URL . "index.php?action=conclusion";?>">CONCLUSION</a>
                </div>
            </div>
        </div>
    </div>
    <div class="content">
