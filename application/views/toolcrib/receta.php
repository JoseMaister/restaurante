<link rel="stylesheet" href="<?= base_url('/template/fonts/icomoon/style.css')?>">
<link rel="stylesheet" type="text/css" href="<?= base_url('template/knockout-file-bindings.css');?>">
<div class="content">
   <div class="container section-title text-center" >
      <br>
      <h2 class="title">Agregar Ingredientes</h2>
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
                     <form method="POST" action=<?= base_url('toolcrib/registrarRecetaTemp') ?>>
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
      <br
         >                <?php
         if($venta) { 
         //echo var_dump($venta->result());die();
         
             ?>
      <h2 class="title">Ingredientes</h2>
      <h2 class="mb-5"></h2>
      <div class="table-responsive custom-table-responsive">
         <table class="table ">
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
                     <a href=<?= base_url("toolcrib/cancelarProductoReceta/".$elem->idtemp); ?>><button type="button"class="btn btn-danger btn-xs"><i class="fa fa-trash"></i> Eliminar </button></a>                                                
                  </td>
               </tr>
               <?php }
                  ?>
            </tbody>
         </table>
         <div class="p-t-30">
            <button class="btn btn--radius btn--green" onclick="receta()">Registrar Receta</button>
         </div>
         <?php }
            ?>
         
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
               <div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
                                    <div class="rs-select2 js-select-simple select--no-search">
                                        <select name="propietario">
                                            <option disabled="disabled" selected="selected">Propietario</option>
                                            <option value="CHEF">CHEF</option>
                                            <option value="RESTAURANTE">RESTAURANTE</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
               <div class="well" data-bind="fileDrag: fileData">
                  <div class=" row">
                     <div class="col-md-6">
                        <img style="height: 125px;" class="img-rounded  thumb" data-bind="attr: { src: fileData().dataURL }, visible: fileData().dataURL">
                        <div data-bind="ifnot: fileData().dataURL">
                           <label class="drag-label">Arrastrar Archivo</label>
                        </div>
                     </div>
                     <div class="col-md-6">
                        <input type="file" name="foto" data-bind="fileInput: fileData, customFileInput: {
                           buttonClass: 'btn btn-success',
                           fileNameClass: 'disabled input--style-2',
                           onClear: onClear,
                           onInvalidFileDrop: onInvalidFileDrop
                           }" accept="image/*">
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
<script src='https://cdnjs.cloudflare.com/ajax/libs/knockout/3.1.0/knockout-min.js'></script><
<script src=<?= base_url('template/knockout-file-bindings.js')?>></script>
<script type="text/javascript">
   function receta(){
    $('#mdlReceta').modal('show');
   }
   
</script>
<script>
   var viewModel = {};
   viewModel.fileData = ko.observable({
       dataURL: ko.observable(),
       // can add "fileTypes" observable here, and it will override the "accept" attribute on the file input
       // fileTypes: ko.observable('.xlsx,image/png,audio/*')
   });
   viewModel.multiFileData = ko.observable({ dataURLArray: ko.observableArray() });
   viewModel.onClear = function (fileData) {
       if (confirm('Are you sure?')) {
           fileData.clear && fileData.clear();
       }
   };
   viewModel.debug = function () {
       window.viewModel = viewModel;
       console.log(ko.toJSON(viewModel));
       console.log(viewModel.multiFileData())
       console.log(viewModel.multiFileData().dataURLArray());
       console.log(viewModel.multiFileData().fileArray());
       debugger;
   };
   viewModel.onInvalidFileDrop = function(failedFiles) {
       var fileNames = [];
       for (var i = 0; i < failedFiles.length; i++) {
           fileNames.push(failedFiles[i].name);
       }
       var message = 'Invalid file type: ' + fileNames.join(', ');
       alert(message)
       console.error(message);
   };
   ko.applyBindings(viewModel);
</script>