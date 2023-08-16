 <link rel="stylesheet" href="<?= base_url('/template/fonts/icomoon/style.css')?>">
      <link rel="stylesheet" href="<?= base_url('/template/css/owl.carousel.min.css')?>">
      <!-- Bootstrap CSS -->
      <!-- Style -->
      <link rel="stylesheet" href="<?= base_url('/template/css/style.css')?>">

 <div class="content">
            
            <div class="container">
               <h2 class="title">Agregar Ingredientes</h2>
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
                           <th scope="col">Opciones</th>
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
                           <td>
                              <form method="POST" action=<?= base_url('toolcrib/registrarRecetaTemp') ?>>
                                 <input id='cantidad'  type='number' name='cantidad' min='0' max='10' class='border' style="width: 115px;" required>
                                 <input id='producto' style='display: inline;' type='hidden' name='producto' value="<?= $elem->id ?>">
                                 <button type='submit'class='btn btn-primary btn-sm'><i class='fa fa-pencil'></i> Agregar </button>
                              </form>
                           </td>
                        </tr>
                        <?php $i++; }
                           }
                           ?>
                     </tbody>
                  </table>
               </div>
            </div>
             <div class="container">
               <br
>                <?php

                                    if($venta) { 
                                    //echo var_dump($venta->result());die();

                                        ?>
               <h2 class="title">Ingredientes</h2>
               <h2 class="mb-5"></h2>
               <div class="table-responsive custom-table-responsive">
                  <table class="table custom-table">
                     <thead>
                        <tr>
                           <th scope="col">Producto</th>
                           <th scope="col">Cantidad</th>
                           <th scope="col">Unidad de Medida</th>
                           <th scope="col">Opciones</th>
                          
                        </tr>
                     </thead>
                     <tbody>

                                    <?php

                                    
                                     foreach ($venta->result() as $elem) { 


                                        ?>

                                            <tr>
                                                
                                                <td><?= $elem->ingrediente ?></td>
                                                <td><?= $elem->cantidad ?></td>
                                                <td><?= $elem->unidadReceta ?></td>
                                                <td>
                                                <a href=<?= base_url("toolcrib/cancelarProducto/".$elem->id); ?>><button type="button"class="btn btn-danger btn-xs"><i class="fa fa-eye"></i> Eliminar </button></a>                                                
                                                </td>
                                               
                                            </tr>
                                    <?php }
                                      
                                    ?>
                                    </tbody>
                                    </table>
                                    
                                
                               
                                 <?php }
                                      
                                    ?>
                                   <div class="p-t-30">
                            <button class="btn btn--radius btn--green" onclick="receta()">Registrar Receta</button>
                        </div>
                                    

                                    
                            </div>
                        

               </div>
            </div>
         </div>
<div id="mdlReceta" class="modal fade bs-example-modal-md" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-md">
        <div class="modal-content">
           <div class="card-body">
                    <h2 class="title" style="color:black;">Registrar Receta</h2>
                    <form method="POST" action=<?= base_url('toolcrib/registrarReceta') ?>  enctype="multipart/form-data">
                        <div class="input-group">
                            <input class="input--style-2" type="text" placeholder="Nombre de la Receta" name="nombre" required>
                        </div>
                        <div class="input-group">
                            <textarea rows="10" cols="50" name="procedimiento"></textarea>
                        </div>

                        <div class="p-t-30">
                            <button class="btn btn--radius btn--green" type="submit">Registrar</button>
                        </div>
                    </form>
                </div>
        </div>
    </div>
</div>

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
    <script type="text/javascript">
     function receta(){
      $('#mdlReceta').modal('show');
     }

</script>