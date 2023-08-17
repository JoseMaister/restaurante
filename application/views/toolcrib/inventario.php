<link rel="stylesheet" href="<?= base_url('/template/fonts/icomoon/style.css')?>">
<div class="content">
   <div class="container">
      <br>
      <a href=<?= base_url("toolcrib/producto_nuevo"); ?>><button id="send" type="button" class="btn btn-success">Agregar Nuevo Producto</button></a>
      <a href=<?= base_url("toolcrib/subproducto"); ?>><button id="send" type="button" class="btn btn-success">Agregar Nuevo Sub-Producto</button></a>
      <a href=<?= base_url("toolcrib/receta"); ?>><button id="send" type="button" class="btn btn-success">Crear Receta</button></a>
      <h2 class="mb-5"></h2>
      <div class="table-responsive custom-table-responsive">
         <table class="table -table">
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
                  <td class="text-center">
                     <?php
                        if ($elem->subproducto==1) {
                        
                        ?>
                     <button onclick="ingredientes('<?=$elem->id?>')" type="button"class="btn btn-secondary btn-xs"><i class="fa fa-eye"></i> Ingredientes </button>
                     <?php
                        }else{
                        ?>
                     <a href=<?= base_url("toolcrib/verProducto/".$elem->id); ?>><button type="button"class="btn btn-success btn-xs"><i class="fa fa-eye"></i> Existencias </button></a>
                     <?php
                        }
                          ?>
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


<div id="mdlIngredientes" class="modal fade hijo" tabindex="-1" role="dialog" aria-hidden="true" style="width: 300px;">
    <div class="modal-dialog ">
        <div class="modal-content">
           <div class="card-body">
               <div class="row">
      <div class="box">
         <h2>Ingredientes</h2>

         <div id="ingredientes">
            <p></p>
         </div>
         
           
         </ul>
      </div>
   </div>
      <!-- end col -->
   </div>        
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
<script type="text/javascript">
   function ingredientes(id){
       $("#ingredientes p").empty();
      var base_url = "<?php echo base_url(); ?>";
  
    
   var URL = base_url + "toolcrib/ajax_ingredientess";
    $.ajax({
        type: "POST",
        url: URL,
        data: { id : id },
        success: function (response) {
            if(response){
                var rs = JSON.parse(response);
               // var tbl = $('#tblBitacora tbody')[0];
                $.each(rs, function(i, elem){
                  $("#ingredientes p").append('<ul><li>'+elem.ingrediente+'</li></ul>');
                  
                  //$("#ingredientes p").append('<button class="btn btn-success btn-xs"><a target="_blank" href='+base_url+'compras/ver_pr/'+elem+'>'+elem+'</a></button>');
                  
                     
                     
                });

                $('#mdlIngredientes').modal('show');
            }
        }
    });  


   // $('#mdlIngredientes').modal('show');
   }
   
</script>