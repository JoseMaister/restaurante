<link rel="stylesheet" href="<?= base_url('/template/fonts/icomoon/style.css')?>">


      <title></title>
      </head>
      <body>
         <div class="content">
            
            <div class="container section-title text-center" >
              <br>
               <h2 class="title" >Agregar SubProducto</h2>
               <h2 class="mb-5"></h2>
               <div class="table-responsive custom-table-responsive">
                  <table class="table">
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
                           <td><?= "$".number_format($elem->preciodlls,2) ?></td>
                           <td><?= "$".number_format($elem->preciounitario,2) ?></td>
                           <td>
                              <form method="POST" action=<?= base_url('toolcrib/registrarVenta') ?>>
                                 <input id='cantidad'  type='number' name='cantidad' min='0' max='10' class='border' style="width: 115px;" required>
                                 <input id='producto' style='display: inline;' type='hidden' name='producto' value="<?= $elem->id ?>">
                                 <button type='submit'class='btn btn-success btn-sm'><i class='fa fa-plus'></i> Agregar </button>
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
             <div class="container section-title text-center">
               <br>
                <?php

                                    if($venta) { 
                                    //echo var_dump($venta->result());die();

                                        ?>
               <h2 class="title">Ingredientes</h2>
               <h2 class="mb-5"></h2>
               <div class="table-responsive custom-table-responsive">
                  <table class="table">
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
                                                <a href=<?= base_url("toolcrib/cancelarProducto/".$elem->idvt); ?>><button type="button"class="btn btn-danger btn-xs"><i class="fa fa-trash"></i> Eliminar </button></a>                                                
                                                </td>
                                               
                                            </tr>
                                    <?php }
                                      
                                    ?>
                                    </tbody>
                                    </table>
                                      <div class="p-t-30">
                            <button class="btn btn--radius btn--green" onclick="subproducto()">Registrar Subproducto</button>
                        </div>
                               
                                 <?php }
                                      
                                    ?>
                                 
                                    

                                    
                            </div>
                        

               </div>
            </div>
         </div>

<div id="mdlSubproducto" class="modal fade bs-example-modal-md" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-md">
        <div class="modal-content">
           <div class="card-body">
                    <h2 class="title" style="color:black;">Agregar Producto</h2>
                    <form method="POST" action=<?= base_url('toolcrib/registrar_subproducto') ?>  enctype="multipart/form-data">
                        <div class="input-group">
                            <input class="input--style-2" type="text" placeholder="Nombre del Producto" name="producto" required>
                        </div>
                        <div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
                                    <div class="rs-select2 js-select-simple select--no-search">
                                        <select name="unidadEmpaque">
                                            <option disabled="disabled" selected="selected">Unidad de Empaque</option>
                                            <option value="LB">LB</option>
                                            <option value="OZ">OZ</option>
                                            <option value="rolls">ROLLS</option>
                                            <option value="EA">EA</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="p-t-30">
                            <button class="btn btn--radius btn--green" type="submit">Registrar</button>
                        </div>
                    </form>
                </div>
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
   </div>
   <!-- end container -->
</div>
<script type="text/javascript">
     function subproducto(){
      $('#mdlSubproducto').modal('show');
     }

</script>
<!-- end section -->
