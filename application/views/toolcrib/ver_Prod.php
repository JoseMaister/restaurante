<style type="text/css">
   
   .switch {
   position: relative;
   display: inline-block;
   width: 60px;
   height: 34px;
   }
   .switch input { 
   opacity: 0;
   width: 0;
   height: 0;
   }
   .slider {
   position: absolute;
   cursor: pointer;
   top: 0;
   left: 0;
   right: 0;
   bottom: 0;
   background-color: #ccc;
   -webkit-transition: .4s;
   transition: .4s;
   }
   .slider:before {
   position: absolute;
   content: "";
   height: 26px;
   width: 26px;
   left: 4px;
   bottom: 4px;
   background-color: white;
   -webkit-transition: .4s;
   transition: .4s;
   }
   input:checked + .slider {
   background-color: #28a745;
   }
   input:focus + .slider {
   box-shadow: 0 0 1px #28a745;
   }
   input:checked + .slider:before {
   -webkit-transform: translateX(26px);
   -ms-transform: translateX(26px);
   transform: translateX(26px);
   }
   /* Rounded sliders */
   .slider.round {
   border-radius: 34px;
   }
   .slider.round:before {
   border-radius: 50%;
   }
</style>
<div>
   <div class="wrapper wrapper--w960">
      <div class="card card-2">
         <div class="card-heading"></div>
         <div class="card-body">
            <form method="POST" action=<?= base_url('toolcrib/editarProducto') ?> class="form-horizontal form-label-left" novalidate enctype="multipart/form-data">
               <h3>Editar Ingrediente</h3>
               <div class="item form-group">
                  <label class="control-label" for="name">Ingrediente <span class="required">*</span>
                  </label>
                  <div class="col-md-6 col-sm-6 col-xs-12">
                     <label class="form-control "><?= $productos->ingrediente?></label>
                     <input type="hidden" name="idProducto" value=<?= $productos->id ?>>
                  </div>
               </div>
               <div class="item form-group">
                  <label class="control-label " for="name">Stock <span class="required">*</span>
                  </label>
                  <div class="col-md-6 col-sm-6 col-xs-12">
                     <label class="form-control "><?= $qty->cantidad?></label>
                  </div>
               </div>
               <div class="item form-group">
                  <label class="control-label " for="name">Producto <span class="required">*</span>
                  </label>
                  <div class="col-md-6 col-sm-6 col-xs-12">
                     <input  style="text-transform: uppercase;" id="producto" class="form-control" name="NombreProducto" value=<?= $productos->ingrediente?> required="required" type="text">
                  </div>
               </div>
               <div class="item form-group">
                  <label class="control-label " for="name">Localizacion <span class="required">*</span>
                  </label>
                  <div class="col-md-6 col-sm-6 col-xs-12">
                     <input  style="text-transform: uppercase;" id="ubicacion" class="form-control" name="ubicacion" required="required">
                  </div>
               </div>
               <div class="item form-group">
                  <label class="control-label " for="name">Cantidad <span class="required">*</span>
                  </label>
                  <div class="col-md-6 col-sm-6 col-xs-12">
                     <input  style="text-transform: uppercase;" id="cantidad" class="form-control" name="cantidad" required="required" type="number">
                  </div>
               </div>
               <div class="item form-group">
                  <label class="control-label " for="name">Activar <span class="required">*</span>
                  </label>
                  <div class="col-md-6 col-sm-6 col-xs-12">
                     <label class="switch">
            <input type="checkbox" name="cbActivo" id="cbActivo" value="1" <?php if($productos->activo== '1') { echo 'checked'; }?>>
            <span class="slider round"></span>
            </label>
                  </div>
               </div>
               <div class="item form-group">
                  <label class="control-label " for="name">Comentarios <span class="required">*</span>
                  </label>
                  <div class="col-md-6 col-sm-6 col-xs-12">
                     <textarea style="text-transform: uppercase;" id="comentario" class="form-control" name="comentario" placeholder="" required="required"></textarea>
                  </div>
               </div>
               <div class="p-t-30">
                  <button class="btn btn--radius btn--green" type="submit">Registrar</button>

               </div>
            </form>
            
            </div>

         </div>
<div class="table-responsive custom-table-responsive">
                  <table class="table -table">
                  <thead>
                     <tr class="headings">
                        <th class="column-title text-center">Proveedor</th>
                        <th class="column-title text-center">Ingrediente</th>
                        <th class="column-title text-center">Local</th>
                        <th class="column-title text-center">Cantidad</th>
                        <th class="column-title text-center">Opciones</th>
                     </tr>
                  </thead>
                  <tbody>
                     <?php
                        if($ubicacion) { $i = 1;
                         foreach ($ubicacion->result() as $elem) { ?>
                     <tr class="even pointer">
                        <td class="text-center"><?= $elem->proveedor ?></td>
                        <td class="text-center"><?= $elem->ingrediente ?></td>
                        <td class="text-center"><?= $elem->ubicacion ?></td>
                        <td class="text-center"><?= $elem->cantidad ?></td>
                        <td class="text-center">
                           <a href=<?= base_url("toolcrib/editarProd/".$elem->idUbi); ?>><button type="button"class="btn btn-success btn-xs"><i class="fa fa-pencil"></i> Ver Producto </button></a>
                        </td>
                     </tr>
                     <?php $i++; }
                        }
                        ?>
                  </tbody>
               </table>
      </div>

   </div>
</div>
</div>
</div>
</div>
<!-- /page content -->
<!-- footer content -->
<!-- /footer content -->
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
<script>
   $(function(){
     load();
   });
   
   
       
</script>
</body>
</html>