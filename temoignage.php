<?php include 'tableau_temoignage.php'; ?>

<?php
    foreach ($temoignage as $value) {
        echo '<div class="card mb-3" style="max-width: 100%; background: none; color:white; border:none;">
        <div class="row g-0">
          <div class="col-md-4">
            <img src="image/' . $value['img'] . '.jpeg" class="img-fluid rounded-start" alt="dd">
          </div>
          <div class="col-md-8">
            <div class="card-body">
              <h5 class="card-title fs-1">' . $value['title'] . '</h5>
              <p class="card-text fs-4">' . $value['description'] . '</p>
            </div>
          </div>
        </div>
      </div>';
    }
    ?>

