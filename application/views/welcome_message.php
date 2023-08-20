<!--<div id="menu" class="section lb">
   <div class="container-fluid">
      <div class="section-title text-center">
         <h3>Menu</h3>
      </div>
      
      <div class="row">
         <?php
            if($receta) { $i = 1;
               foreach ($receta->result() as $elem) { ?>
         <div class="col-md-3">
            <div class="services-inner-box">
               <div class="ser-icon">
                  <img src="<?= 'data:image/bmp;base64,' . base64_encode($elem->foto); ?>" class="img-fluid" alt="" />
               </div>
               <h2><?=$elem->nombre?></h2>
               <a class="hvr-radial-in" href="<?= base_url('welcome/ver/'.$elem->id)?>">Ver Receta</a>
            </div>
         </div>
          <?php $i++; }
           }
          ?>
         
      </div>
      
   </div>
   
</div>-->



<div id="menu" class="section wb">
   <div class="container-fluid">
      <div class="section-title text-center">
         <h3>Menu</h3>
      </div>
     
      <div class="gallery-menu text-center row">
         <div class="col-md-12">
            <div class="button-group filter-button-group">
               <button class="hvr-radial-in" data-filter=".gal_a">Chef</button>
               <button class="hvr-radial-in" data-filter=".gal_b">Restaurante</button>
            </div>
         </div>
      </div>
      <div class="gallery-list row">
         <div class="col-md-4 col-sm-6 gallery-grid gal_a">
            <div class="gallery-single fix">
            
         <?php
            if($recetachef) { $i = 1;
               foreach ($recetachef->result() as $elem) { ?>
         <div class="col-md-12">
            <div class="services-inner-box">
               <div class="ser-icon">
                  <img src="<?= 'data:image/bmp;base64,' . base64_encode($elem->foto); ?>" class="img-fluid" alt="" />
               </div>
               <h2><?=$elem->nombre?></h2>
               <a class="hvr-radial-in" href="<?= base_url('welcome/ver/'.$elem->id)?>">Ver Receta</a>
            </div>
         </div>
          <?php $i++; }
           }
          ?>
         <!-- end col -->
      
      </div>
         </div>
         <div class="col-md-4 col-sm-6 gallery-grid gal_b">
            <div class="gallery-single fix">
               <?php
            if($receta) { $i = 1;
               foreach ($receta->result() as $elem) { ?>
         <div class="col-md-12">
            <div class="services-inner-box">
               <div class="ser-icon">
                  <img src="<?= 'data:image/bmp;base64,' . base64_encode($elem->foto); ?>" class="img-fluid" alt="" />
               </div>
               <h2><?=$elem->nombre?></h2>
               <a class="hvr-radial-in" href="<?= base_url('welcome/ver/'.$elem->id)?>">Ver Receta</a>
            </div>
         </div>
          <?php $i++; }
           }
          ?>
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