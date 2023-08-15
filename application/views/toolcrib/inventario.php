<link rel="stylesheet" href="<?= base_url('/template/fonts/icomoon/style.css')?>">

      
         <div class="content bg">
            <div class="container">
               <a href=<?= base_url("toolcrib/producto_nuevo"); ?>><button id="send" type="button" class="btn btn-primary">Agregar Nuevo Producto</button></a>
               <a href=<?= base_url("toolcrib/subproducto"); ?>><button id="send" type="button" class="btn btn-primary">Agregar Nuevo Sub-Producto</button></a>
               <a href=<?= base_url("toolcrib/receta"); ?>><button id="send" type="button" class="btn btn-primary">Crear Receta</button></a>
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
                           <td><?= $elem->proveedor ?></td>
                           <td><?= $elem->ingrediente ?></td>
                           <td><?= $elem->cantidadEmpaque ?></td>
                           <td><?= $elem->unidadReceta ?></td>
                           <td><?= $elem->unidadEmpaque ?></td>
                           <td><?= $elem->preciodlls ?></td>
                           <td><?= $elem->preciounitario ?></td>
                        </tr>
                        <?php $i++; }
                           }
                           ?>
                     </tbody>
                  </table>
               </div>
            </div>
         </div>
         <script src="<?= base_url('/template/js/jquery-3.3.1.min.js')?>"></script>
         <script src="<?= base_url('/template/js/popper.min.js')?>"></script>
         <script src="<?= base_url('/template/js/bootstrap.min.js')?>"></script>
         <script src="<?= base_url('/template/js/main.js')?>"></script>
         
 <script src="<?= base_url('template/js/all.js')?>"></script>
    
  <script src="<?= base_url('template/js/jquery.easing.1.3.js')?>"></script> 
  <script src="<?= base_url('template/js/parallaxie.js')?>"></script>
  <script src="<?= base_url('template/js/headline.js')?>"></script>
  <script src="<?= base_url('template/js/owl.carousel.js')?>"></script>
  <script src="<?= base_url('template/js/jquery.nicescroll.min.js')?>"></script>
  <!-- Contact form JavaScript -->
    <script src="<?= base_url('template/js/jqBootstrapValidation.js')?>"></script>
    <script src="<?= base_url('template/js/contact_me.js')?>"></script>
    <!-- ALL PLUGINS -->
    <script src="<?= base_url('template/js/custom.js')?>"></script>