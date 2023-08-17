<!DOCTYPE html>
<html lang="en">

    <!-- Basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">   
   
    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">  
 
     <!-- Site Metas -->
    <title>Green Special - Restaurant Responsive HTML5 OnePage Template</title>  
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Site Icons -->
    <link rel="shortcut icon" href="<?= base_url('template/images/favicon.ico" type="image/x-icon')?>" />
    <link rel="apple-touch-icon" href="<?= base_url('template/images/apple-touch-icon.png')?>">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?= base_url('template/css/bootstrap.min.css')?>">
    <!-- Site CSS -->
    <link rel="stylesheet" href="<?= base_url('template/style.css')?>">
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="<?= base_url('template/css/responsive.css')?>">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="<?= base_url('template/css/custom.css')?>">
  <script src="<?= base_url('template/js/modernizr.js')?>"></script> <!-- Modernizr -->
  <link href="<?= base_url('template/vendor/mdi-font/css/material-design-iconic-font.min.css')?>" rel="stylesheet" media="all">

    <link href="<?= base_url('template/vendor/font-awesome/css/font-awesome.min.css')?>" rel="stylesheet" media="all">

<link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i" rel="stylesheet">

<link href="<?= base_url('template/vendor/select2/select2.min.css')?>" rel="stylesheet" media="all">

<link href="<?= base_url('template/css/main.css')?>" rel="stylesheet" media="all">


</head>
<body id="page-top" class="politics_version">

    <!-- LOADER -->
    <div id="preloader">
        <div id="main-ld">
      <div id="loader"></div>  
    </div>
    </div>
    <!-- END LOADER -->
  
    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav" style="color: green">
      <div class="container-fluid">
        <a class="navbar-brand js-scroll-trigger" href="#page-top">
      <img class="img-fluid" src="<?= base_url('template/images/logo.png')?>" alt="" />
    </a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          Menu
          <i class="fa fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger active" href="<?= base_url()?>"><span>Home</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#menu"><span>Menu</span></a>
            </li>
            <!--<li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#gallery"><span>Galeria</span></a>
            </li>-->
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="<?= base_url('toolcrib/inventario')?>"><span>Inventario</span></a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
   <section id="home" class="main-banner">
    <div id="slidy-container">
  <figure id="slidy">
    <img src="<?= base_url('template/uploads/slider-01.jpg')?>" alt="" />
    <img src="<?= base_url('template/uploads/slider-02.jpg')?>" alt="" />
    <img src="<?= base_url('template/uploads/slider-03.jpg')?>" alt="" />
  </figure>
</div>
   <!--
    <div class="slider-new-2 owl-carousel owl-theme">
     
  <div class="item slider-screen">
        <div class="slider-img-full">
          <img src="<?= base_url('template/uploads/slider-01.jpg')?>" alt="" />
        </div>
-</div>  
    
      <div class="item slider-screen">
        <div class="slider-img-full">
          <img src="<?= base_url('template/uploads/slider-02.jpg')?>" alt="" />
        </div>
      </div>
      
      <div class="item slider-screen">
        <div class="slider-img-full">
          <img src="<?= base_url('template/uploads/slider-03.jpg')?>" alt="" />
        </div>
      </div>-->
      
    </div>
    
  </section>
  
  

  

    <a href="#" id="scroll-to-top" class="dmtop global-radius"><i class="fa fa-angle-up"></i></a>

    <!-- ALL JS FILES -->
    
  <!-- Camera Slider -->
  
</body>
<script type="text/javascript">
  /* user defined variables */
var timeOnSlide = 3,    
    // the time each image will remain static on the screen, measured in seconds
timeBetweenSlides = 1,  
    // the time taken to transition between images, measured in seconds

// test if the browser supports animation, and if it needs a vendor prefix to do so
    animationstring = 'animation',
    animation = false,
    keyframeprefix = '',
    domPrefixes = 'Webkit Moz O Khtml'.split(' '), 
    // array of possible vendor prefixes
    pfx  = '',
    slidy = document.getElementById("slidy"); 
if (slidy.style.animationName !== undefined) { animation = true; } 
// browser supports keyframe animation w/o prefixes

if( animation === false ) {
  for( var i = 0; i < domPrefixes.length; i++ ) {
    if( slidy.style[ domPrefixes[i] + 'AnimationName' ] !== undefined ) {
      pfx = domPrefixes[ i ];
      animationstring = pfx + 'Animation';
      keyframeprefix = '-' + pfx.toLowerCase() + '-';
      animation = true;
      break;
    }
  }
}

if( animation === false ) {
  // animate in JavaScript fallback
} else {
  var images = slidy.getElementsByTagName("img"),
      firstImg = images[0], 
      // get the first image inside the "slidy" element.
      imgWrap = firstImg.cloneNode(false);  // copy it.
  slidy.appendChild(imgWrap); // add the clone to the end of the images
  var imgCount = images.length, // count the number of images in the slide, including the new cloned element
      totalTime = (timeOnSlide + timeBetweenSlides) * (imgCount - 1), // calculate the total length of the animation by multiplying the number of _actual_ images by the amount of time for both static display of each image and motion between them
      slideRatio = (timeOnSlide / totalTime)*100, // determine the percentage of time an induvidual image is held static during the animation
      moveRatio = (timeBetweenSlides / totalTime)*100, // determine the percentage of time for an individual movement
      basePercentage = 100/imgCount, // work out how wide each image should be in the slidy, as a percentage.
      position = 0, // set the initial position of the slidy element
      css = document.createElement("style"); // start marking a new style sheet
  css.type = "text/css";
  css.innerHTML += "#slidy { text-align: left; margin: 0; font-size: 0; position: relative; width: " + (imgCount * 100) + "%;  }\n"; // set the width for the slidy container
  css.innerHTML += "#slidy img { float: left; width: " + basePercentage + "%; }\n";
  css.innerHTML += "@"+keyframeprefix+"keyframes slidy {\n"; 
  for (i=0;i<(imgCount-1); i++) { // 
    position+= slideRatio; // make the keyframe the position of the image
    css.innerHTML += position+"% { left: -"+(i * 100)+"%; }\n";
    position += moveRatio; // make the postion for the _next_ slide
    css.innerHTML += position+"% { left: -"+((i+1) * 100)+"%; }\n";
}
  css.innerHTML += "}\n";
  css.innerHTML += "#slidy { left: 0%; "+keyframeprefix+"transform: translate3d(0,0,0); "+keyframeprefix+"animation: "+totalTime+"s slidy infinite; }\n"; // call on the completed keyframe animation sequence
document.body.appendChild(css); // add the new stylesheet to the end of the document
}

</script>
</html>
