<?php
$domaine = 'localhost:8000/';

$index_page = $domaine;
$produits_page = $domaine .'produits.php';
$contact_page = $domaine .'contact.php' ;

$current_url = $_SERVER['SCRIPT_NAME'];
if (strpos($index_page, $current_url) !== false || strpos($index_page . 'index.php' , $current_url)) {
    $title = 'Bienvenue sur la boutique santée de Wonka';
};
if (strpos($produits_page, $current_url) !== false) {
 $title = 'Nos produits';
};
if (strpos($contact_page, $current_url) !== false) {
 $title = 'Contactez-nous';
};

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="main.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script defer src="index.js"></script>
    <title>Document</title>
</head>
<body>
    <header>
    <nav class="navbar navbar-expand-lg ">
        <div class="container-fluid">
           <a href="/index.php"><img src="image/WonkaLogo.png" alt=""></a> 
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
             <div class="collapse navbar-collapse" id="navbarNav">
                 <ul class="navbar-nav">
                     <li class="nav-item">
                     <a class="nav-link " aria-current="page" href="/produits.php">Produits</a>
                     </li>
                     <li class="nav-item">
                      <a class="nav-link" href="#">A propos</a>
                     </li>
                      <li class="nav-item">
                      <a class="nav-link" href="#">Temoignage</a>
                     </li>
                      <li class="nav-item">
                     <a class="nav-link " href="/contact.php" aria-disabled="true">Contactez nous</a>
                    </li>
                 </ul>
            </div>
        </div>
        </nav>
    </header>
