<?php
  include "data.php";
  include "templates.php";
  echo $header_html;
 ?>

 <div class="card">
   <div class="card-body">
     <h5 class="card-title">Catálogo de productos</h5>
     <p class="card-text">Lista de productos disponibles para la venta.
       <div class="container">
        <div class="row">
          <?php foreach ($products as $key => $value) { ?>
            <div class="col">
             <div class="card">
               <img src="<?php echo './images/'.$value["img"] ?>" class="card-img-top">
               <div class="card-body">
                 <h5 class="card-title"><?php echo $value["name"].' (S/ '.$value["price"].') '?></h5>
                 <p class="card-text"><?php echo $value["description"] ?></p>
                 <a href="#" class="btn btn-primary">Añadir</a>
               </div>
              </div>
            </div>
          <?php } ?>
        </div>
      </div>
    </p>
   </div>
 </div>
<?php
echo $footer_html
 ?>
