
<div>
        <div class="wrapper wrapper--w960">
            <div class="card card-2">
                <div class="card-heading"></div>
                <div class="card-body">
                    <h2 class="title">Agregar Producto</h2>
                    <form method="POST" action=<?= base_url('toolcrib/registrar_producto') ?> novalidate enctype="multipart/form-data">
                        <div class="input-group">
                            <input class="input--style-2" type="text" placeholder="Proveedor" name="proveedor">
                        </div>
                        <div class="input-group">
                            <input class="input--style-2" type="text" placeholder="Ingredientes" name="ingrediente">
                        </div>
                        <div class="input-group">
                            <input class="input--style-2" type="number" placeholder="Cantidad Empaque" name="cantidadEmpaque">
                        </div>
                        <div class="input-group">
                            <input class="input--style-2" type="number" placeholder="Unidad Receta" name="unidadReceta">
                        </div>
                        <div class="input-group">
                            <input class="input--style-2" type="text" placeholder="Precio Dlls" name="preciodlls">
                        </div>
                        <div class="input-group">
                            <input class="input--style-2" type="text" placeholder="Precio Unitario" name="preciounitario">
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