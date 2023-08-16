<!-- page content -->
<div class="right_col" role="main">
    <div class="">

        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                    <div class="x_title">
                        <h2>Editar Producto</h2>
                        <ul class="nav navbar-right panel_toolbox">
                            <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                            </li>
                            </li>
                            <li><a class="close-link"><i class="fa fa-close"></i></a>
                            </li>
                        </ul>
                        <div class="clearfix"></div>
                    </div>
                    <div class="x_content">
                        <form method="POST" action=<?= base_url('toolcrib/updateProducto') ?> class="form-horizontal form-label-left" novalidate enctype="multipart/form-data">
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
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Ubicacion <span class="required">*</span>
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input type="hidden" name="idProducto" value=<?= $ubicaciones->idProd ?>>
                                     <input readonly style="text-transform: uppercase;" id="ubicacion" class="form-control col-md-7 col-xs-12" name="ubicacion" required="required" value=<?=$ubicaciones->ubicacion?>>

                                </div>
                            </div>

                            <div class="item form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Stock <span class="required">*</span>
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input readonly style="text-transform: uppercase;" id="stock" class="form-control col-md-7 col-xs-12" name="stock" required="required" type="number" value=<?=$ubicaciones->cantidad?>>
                                </div>
                            </div>

                            <div class="item form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Cantidad <span class="required">*</span>
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input  style="text-transform: uppercase;" id="cantidad" class="form-control col-md-7 col-xs-12" name="cantidad" required="required" type="number">
                                </div>
                            </div>
                            <div class="item form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Comentarios <span class="required">*</span>
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <textarea style="text-transform: uppercase;" id="comentario" class="form-control col-md-7 col-xs-12" name="comentario" placeholder="" required="required"></textarea>
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
