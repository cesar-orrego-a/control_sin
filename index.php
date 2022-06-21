<?php
session_start();
  include "data.php";
  include "templates.php";
  echo $header_html;
  if(isset($_SESSION["cart"]) && count($_SESSION["cart"]) > 0){
 ?>
 <div class="card">
   <div class="card-body">
     <h5 class="card-title">Carrito de compras</h5>
     <p class="card-text">Lista de productos seleccionados.
      <table class="table table-condensed">
        <thead>
          <th>Código</th>
          <th>Producto</th>
          <th>Cant</th>
          <th>Precio</th>
          <th>Subtotal</th>
          <th>&nbsp;</th>
        </thead>
        <tbody>
       <?php
       foreach ($_SESSION["cart"] as $key => $value) { ?>

         <tr>
           <td><?php echo $products[$key]["id"] ?></td>
           <td><?php echo $products[$key]["name"] ?></td>
           <td><?php echo $value["qty"] ?></td>
           <td><?php echo $products[$key]["price"] ?></td>
           <td><?php echo $products[$key]["price"]*$value["qty"] ?></td>
           <td>
             <a href="remove_from_cart.php?id=<?php echo $key ?>">Disminuir</a>&nbsp;&nbsp;
             <a href="remove_from_cart.php?remove_all=1&id=<?php echo $key ?>">Eliminar</a>
           </td>
         </tr>
      <?php }} ?>
      </tbody>
      </table>
    </div>
  </div>


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
                 <a href="./add_to_cart.php?id=<?php echo $key ?>" class="btn btn-primary">Añadir</a>
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
