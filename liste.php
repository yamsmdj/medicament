<?php include 'tableauListe.php';?>
<?php

foreach ($liste as $value){
echo '<li class="nav-item">
<a class="nav-link" aria-current="page" 
href=" ' . $value['links'] . ' " >' . $value['title'] . '</a>
</li>';
} 
?>