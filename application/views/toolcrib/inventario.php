<div id="contact" class="section db">
   <div class="container-fluid">
      <div class="section-title text-center">
         <h3>Inventario</h3>
         <p></p>
      </div>
      <!-- end title -->
      <link rel="stylesheet" href="<?= base_url('/template/css-table-18/fonts/icomoon/style.css')?>">
      <link rel="stylesheet" href="<?= base_url('/template/css-table-18/css/owl.carousel.min.css')?>">
      <!-- Bootstrap CSS -->
      <link rel="stylesheet" href="<?= base_url('/template/css-table-18/css/bootstrap.min.css')?>">
      <!-- Style -->
      <link rel="stylesheet" href="<?= base_url('/template/css-table-18/css/style.css')?>">
      -
      <title></title>
      </head>
      <body>
         <div class="content">
            <div class="container">
               <a href=<?= base_url("toolcrib/producto_nuevo"); ?>><button id="send" type="button" class="btn btn-primary">Agregar Nuevo Producto</button></a>
               <a href=<?= base_url("toolcrib/producto_nuevo"); ?>><button id="send" type="button" class="btn btn-primary">Agregar Nuevo Sub-Producto</button></a>
               <h2 class="mb-5"></h2>
               <div class="table-responsive custom-table-responsive">
                  <table class="table custom-table">
                     <thead>
                        <tr>
                           <th scope="col">Proveedor</th>
                           <th scope="col">Ingredientes</th>
                           <th scope="col">Cantida Empaque</th>
                           <th scope="col">Unidad Empaque</th>
                           <th scope="col">Unidad Receta</th>
                           <th scope="col">Precio DLLS</th>
                           <th scope="col">Precio Unitario</th>
                        </tr>
                     </thead>
                     <tbody>
                        <?php
                           if($productos) { $i = 1;
                            foreach ($productos->result() as $elem) { ?>
                        <tr  scope="row">
                           <td><?= $elem->producto ?></td>
                           <td><?= $elem->producto ?></td>
                           <td><?= $elem->producto ?></td>
                           <td><?= $elem->producto ?></td>
                           <td><?= $elem->producto ?></td>
                           <td><?= $elem->producto ?></td>
                           <td><?= $elem->producto ?></td>
                        </tr>
                        <?php $i++; }
                           }
                           ?>
                     </tbody>
                  </table>
               </div>
            </div>
         </div>
         <script src="js/jquery-3.3.1.min.js"></script>
         <script src="js/popper.min.js"></script>
         <script src="js/bootstrap.min.js"></script>
         <script src="js/main.js"></script>
   </div>
   <!-- end container -->
</div>
<!-- end section -->