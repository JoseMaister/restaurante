<style type="text/css">
   
   .contenedor {
   display: inline-flex;
   column-gap: 10px;
   justify-content: left;
   align-items: left;
   width: 100%;
   }
   .contenedor .child {
   border: 0 solid #000;
   padding: 5px;
   text-align: left;
   border-radius: 5px;
   }
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
<link rel="stylesheet" href="<?= base_url('/template/fonts/icomoon/style.css')?>">
<div class="content">
   <div class="container section-title text-center">
      <br>
      <a href=<?= base_url("toolcrib/producto_nuevo"); ?>><button id="send" type="button" class="btn btn-success">Agregar Nuevo Producto</button></a>
      <a href=<?= base_url("toolcrib/subproducto"); ?>><button id="send" type="button" class="btn btn-success">Agregar Nuevo Sub-Producto</button></a>
      <a href=<?= base_url("toolcrib/receta"); ?>><button id="send" type="button" class="btn btn-success">Crear Receta</button></a>
      <br><br>
      <h2 class="title" >Inventario</h2>
      <div class="contenedor">
         <div class="child">
            <input id="txtBusqueda"  class="input--style-2" style="display: inline;" type="text" placeholder="Producto">
         </div>
         <div class="child">
            <button onclick="buscar()" style="display: inline;" class="btn btn-success" type="button"><i class="fa fa-search"></i> Buscar</button>
         </div>
         <div class="child">
            <p>
               Activos:
            </p>
         </div>
         <div class="child">
            <label class="switch">
            <input type="checkbox" name="rbBusqueda" id="cbActivo" onchange="buscar()" checked>
            <span class="slider round"></span>
            </label>
         </div>
      </div>
      <h2 class="mb-5"></h2>
      <div class="table-responsive custom-table-responsive">
         <table class="table -table" id="inventario">
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
               <!--
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
                  -->
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
<script>
   $(document).ready(function(){
         load();
     });
</script>
<script type="text/javascript">
   function load(){
   
    buscar();
   }
   var base_url = "<?php echo base_url(); ?>";
   function ingredientes(id){
       $("#ingredientes p").empty();
     
   
    
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
   function buscar(){
    
    var URL = base_url + "toolcrib/ajax_productos";
    $('#inventario tbody tr').remove();
    
    var texto = $("#txtBusqueda").val();
    var activo = $("#cbActivo").is(":checked") ? 1 : 0;
   const formatter = new Intl.NumberFormat('en-US', {
   style: 'currency',
   currency: 'USD',
   
   // These options are needed to round to whole numbers if that's what you want.
   //minimumFractionDigits: 0, // (this suffices for whole numbers, but will print 2500.10 as $2,500.1)
   //maximumFractionDigits: 0, // (causes 2500.99 to be printed as $2,501)
   });
    $.ajax({
        type: "POST",
        url: URL,
        data: {texto : texto, activo : activo },
        success: function(result) {
            
            if(result)
            {
                var tab = $('#inventario tbody')[0];
                var rs = JSON.parse(result);
                                
   
   
                $.each(rs, function(i, elem){
                                    
   
                    var ren = tab.insertRow(tab.rows.length);
                    
   
                    ren.insertCell().innerHTML = elem.proveedor;
                    ren.insertCell().innerHTML = elem.ingrediente;
                    ren.insertCell().innerHTML = elem.cantidadEmpaque;
                    ren.insertCell().innerHTML = elem.unidadReceta;
                    ren.insertCell().innerHTML = elem.unidadEmpaque;
                    ren.insertCell().innerHTML = formatter.format(elem.preciodlls);
                    ren.insertCell().innerHTML = formatter.format(elem.preciounitario);
                    if (elem.subproducto==1) {
                     ren.insertCell().innerHTML = "<button onclick=;ingredientes("+elem.id+")' type='button' class='btn btn-secondary btn-xs'><i class='fa fa-eye'></i> Ingredientes </button>";
                    }else{
                     ren.insertCell().innerHTML = '<a href="'+base_url+'toolcrib/verProducto/'+elem.id+'"><button type="button" class="btn btn-warning"><i class="fa fa-eye"></i> Existencias</button><a href="'+base_url+'toolcrib/desactivar/'+elem.id+'"><button type="button" class="btn btn-danger"><i class="fa fa-trash"></i> Desactivar</button>';
                    }
   
                    
                });
            }
            else
            {
               // new PNotify({ title: '¡Nada por aquí!', text: 'No se encontraron resultados', type: 'info', styling: 'bootstrap3' });
            }
          },
        error: function(data){
           // new PNotify({ title: 'ERROR', text: 'Error', type: 'error', styling: 'bootstrap3' });
            console.log(data);
        },
      });
   }
   
</script>