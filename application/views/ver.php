<style type="text/css">
   .box {
   width: 300px;
   border-bottom: 20px solid #8dbd56;
   border-bottom-left-radius: 10px;
   border-bottom-right-radius: 10px;
   }
   .box h2 {
   color: #fff;
   background: #8dbd56;
   padding: 10px 20px;
   font-size: 20px;
   font-weight: 700;
   border-top-left-radius: 10px;
   border-top-right-radius: 10px;
   }
   .box ul {
   position: relative;
   background: #fff;
   }
   .box ul:hover li {
   opacity: 0.2;
   }
   .box ul li {
   list-style: none;
   padding: 10px;
   width: 100%;
   background: #fff;
   box-shadow: 0 5px 25px rgba(0, 0, 0, 0.1);
   transition: transform 0.5s;
   }
   .box ul li:hover {
   transform: scale(1.1);
   z-index: 5;
   background: #8dbd56;
   box-shadow: 0 5px 25px rgba(0, 0, 0, 0.2);
   color: #fff;
   opacity: 1;
   }
   .box ul li span {
   width: 20px;
   height: 20px;
   text-align: center;
   line-height: 20px;
   background: #8dbd56;
   color: #fff;
   display: inline-block;
   border-radius: 50%;
   margin-right: 10px;
   font-size: 12px;
   font-weight: 600;
   transform: translateY(-2px);
   }
   .box ul li:hover span {
   background: #fff;
   color: #8dbd56;
   }
    .procedimiento{
   width: 1000px;
   margin-top: -110px;
   margin-left: 400px;
   border-bottom: 20px solid #8dbd56;
   border-bottom-left-radius: 10px;
   border-bottom-right-radius: 10px;
   }
   #divPadre {
     display: flex;
  justify-content: center;;
}
#divHijo {

}
</style>
<div id="menu" class="section lb">
   <a href=<?= base_url("toolcrib/editar_receta/".$receta->id); ?>><button type="button"class="btn btn-warning btn-xs"><i class="fa fa-pencil"></i> Editar Receta </button></a>
<div class="container-fluid">
   <div class="section-title text-center">
      <h3><?= $receta->nombre?></h3>
      <div id="divPadre">
         <div class="ser-icon">
            <img src="<?= 'data:image/bmp;base64,' . base64_encode($receta->foto); ?>" class="img-fluid" alt="" />
         </div>
      </div>
   </div>
   <!-- end title -->
   
   <div class="row">
      <div class="box">
         <h2>Ingredientes</h2>
         <ul>
            <?php
               if($ingrediente) { $i = 1;
                  foreach ($ingrediente->result() as $elem) { ?>
            <li><span><?=$i?></span> <?=$elem->ingrediente?></li>
            <?php $i++; }
               }
               ?>
         </ul>
      </div>
      <!-- end col -->
   </div>
   <div class="row">
      
      <div class="box procedimiento">
         <h2>Procedimiento</h2>
         <p><?= $receta->procedimiento?></p>  
      </div>
      <!-- end col -->
   </div>
   <!-- end row -->
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