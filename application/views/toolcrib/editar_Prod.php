<div>
   <div class="wrapper wrapper--w960">
      <div class="card card-2">
         <div class="card-heading"></div>
         <div class="card-body">
                        <form method="POST" action=<?= base_url('toolcrib/updateProducto') ?> class="form-horizontal form-label-left"  enctype="multipart/form-data">
                            <h3>Editar Ingrediente</h3>
<!--
                            <div class="item form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Codigo <span class="required">*</span>
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                     <label class="form-control col-md-7 col-xs-12"><?= $productos->codigo?></label>
                                     <input type="hidden" name="idProducto" value=<?= $productos->idProducto ?>>
                                     

                                </div>
                            </div>
                           

                            <div class="item form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Producto <span class="required">*</span>
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input readonly  style="text-transform: uppercase;" id="producto" class="form-control col-md-7 col-xs-12" name="NombreProducto" value=<?= $productos->producto?> required="required" type="text">
                                </div>
                            </div>-->

                            <div class="item form-group">
                                <label class="control-label" for="name">Ubicacion <span class="required">*</span>
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input type="hidden" name="idProducto" value=<?= $ubicaciones->idProd ?>>
                                     <input readonly style="text-transform: uppercase;" id="ubicacion" class="form-control" name="ubicacion" required="required" value=<?=$ubicaciones->ubicacion?>>

                                </div>
                            </div>

                            <div class="item form-group">
                                <label class="control-label" for="name">Stock <span class="required">*</span>
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input readonly style="text-transform: uppercase;" id="stock" class="form-control" name="stock" required="required" type="number" value=<?=$ubicaciones->cantidad?>>
                                </div>
                            </div>

                            <div class="item form-group">
                                <label class="control-label" for="name">Cantidad <span class="required">*</span>
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input  style="text-transform: uppercase;" id="cantidad" class="form-control" name="cantidad" required="required" type="number">
                                </div>
                            </div>
                            <div class="item form-group">
                                <label class="control-label" for="name">Comentarios <span class="required">*</span>
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <textarea style="text-transform: uppercase;" id="comentario" class="form-control" name="comentario" placeholder="" required="required"></textarea>
                                </div>
                            </div>
                            

                            <div class="ln_solid"></div>
                            <div class="form-group">
                                <div class="col-md-6 col-md-offset-3">
                                    <button id="send" type="submit" class="btn btn-success glyphicon glyphicon-pencil"> Editar Producto</button>
                                </div>
                            </div>
                            

                        </form>
                        


                    
                </div>
            </div>
        </div>
    </div>
</div>

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



<!-- Custom Theme Scripts -->
<script src=<?= base_url("template/build/js/custom.js"); ?>></script>
  <script>

    $(function(){
      load();
    });


        </script>
</body>
</html>
