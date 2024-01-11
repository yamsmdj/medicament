<?php include 'tableau_chocolat.php';?>
<?php 
    foreach ($chocolat as $value) {
        echo '<div class="card"
                    style=" width:30%; background-color: #2A0045">
                <img src="image/' . $value['img'] . '.png" class="card-img-top" alt="">
                <div class="card-body">
                    <h5 class="card-title text-light">' . $value['title'] . '</h5>
                    <p class="card-text text-light">' . $value['description'] . '</p>
                    <a href="#" class="btn btn-primary">' . $value['prix'] . '</a>
                </div>
            </div>'; 
} ?>