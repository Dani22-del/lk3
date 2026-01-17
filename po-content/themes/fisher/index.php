<?php 
    $iconPath ='https://www.lk3tranning.com/images/whatsapp.png';
    $iconPathTwo ='https://www.lk3tranning.com/images/twoss.png';
    $iconPathOne ='https://www.lk3tranning.com/images/one.png';
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>

	<!-- Your Basic Site Informations -->

	<title><?=$this->e($page_title);?></title>

    <meta charset="utf-8" />

    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

    <meta http-equiv="X-UA-Compatible" content="IE=edge" />

    <meta name="robots" content="index, follow" />

    <meta name="description" content="<?=$this->e($page_desc);?>" />

    <meta name="keywords" content="<?=$this->e($page_key);?>" />

    <meta http-equiv="Copyright" content="popojicms" />

    <meta name="author" content="PopojiCMS" />

    <meta http-equiv="imagetoolbar" content="no" />

    <meta name="language" content="Indonesia" />

    <meta name="revisit-after" content="7" />

    <meta name="webcrawlers" content="all" />

    <meta name="rating" content="general" />

    <meta name="spiders" content="all" />



	<!-- Social Media Meta -->

	<?php include_once DIR_CON."/component/setting/meta_social.txt";?>



    <!-- Mobile Specific Meta -->

	<meta name="viewport" content="width=device-width, initial-scale=1">



    <!-- Stylesheets -->

	<link rel="stylesheet" href="<?=$this->asset('/css/bootstrap.min.css')?>">

	<link rel="stylesheet" href="<?=$this->asset('/css/ionicons.min.css')?>">

	<link rel="stylesheet" href="<?=$this->asset('/css/animate.css')?>">

	<link rel="stylesheet" href="<?=$this->asset('/css/slider.css')?>">

	<link rel="stylesheet" href="<?=$this->asset('/css/owl.carousel.css')?>">

	<link rel="stylesheet" href="<?=$this->asset('/css/owl.theme.css')?>">

	<link rel="stylesheet" href="<?=$this->asset('/css/jquery.fancybox.css')?>">

    <link rel="stylesheet" href="<?=$this->asset('/css/main.css')?>">

	<link rel="stylesheet" href="<?=$this->asset('/css/responsive.css')?>">

    <link rel="stylesheet" href="<?=$this->asset('/css/marquee.css')?>">

	<link rel="stylesheet" href="<?=$this->asset('/css/example.css')?>">

  	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  	<link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap-glyphicons.css" rel="stylesheet">


	<!-- Favicons -->

	<link rel="shortcut icon" href="<?=BASE_URL.'/'.DIR_INC;?>/images/favicon.png" />



	<!-- Javascript -->

	<script src="https://www.google.com/recaptcha/api.js"></script>

	<script src="<?=$this->asset('/js/vendor/modernizr-2.6.2.min.js')?>"></script>

	<script src="<?=$this->asset('/js/jquery.min.js')?>"></script>

	

  	<style>

        .global-page-header{

            background-image: linear-gradient(to bottom left, yellow, green);

        }

        .mitra{
            width: 150px;padding: 0 20px !important;
        }

        #pelanggan{
            padding: 20px 5px !important;
        }

        .owl-item{
            width: 150px !important;
        }

        .carousel-showmanymoveone .carousel-control {
           width: 4%;
           background-image: none;
        }

        .carousel-showmanymoveone .carousel-control.left {
           margin-left: 0;
        }

        .carousel-showmanymoveone .carousel-control.right {
           margin-right: 0;
        }

        .carousel-showmanymoveone .cloneditem-1,
        .carousel-showmanymoveone .cloneditem-2,
        .carousel-showmanymoveone .cloneditem-3 {
           display: none;
        }

        .carousel .item .col-xs-12 {
           padding: 0;
        }


        /* Medium Devices, Desktops */

        @media only screen and (max-width: 992px) {
           .carousel .item .col-xs-12:nth-last-child(-n+2) {
              display: none;
           }
        }

        @media all and (min-width: 768px) {
           .carousel-showmanymoveone .carousel-inner > .active.left,
           .carousel-showmanymoveone .carousel-inner > .prev {
              left: -50%;
           }
           .carousel-showmanymoveone .carousel-inner > .active.right,
           .carousel-showmanymoveone .carousel-inner > .next {
              left: 50%;
           }
           .carousel-showmanymoveone .carousel-inner > .left,
           .carousel-showmanymoveone .carousel-inner > .prev.right,
           .carousel-showmanymoveone .carousel-inner > .active {
              left: 0;
           }
           .carousel-showmanymoveone .carousel-inner .cloneditem-1 {
              display: block;
           }
        }

        @media all and (min-width: 768px) and (transform-3d),
        all and (min-width: 768px) and (-webkit-transform-3d) {
           .carousel-showmanymoveone .carousel-inner > .item.active.right,
           .carousel-showmanymoveone .carousel-inner > .item.next {
              -webkit-transform: translate3d(50%, 0, 0);
              transform: translate3d(50%, 0, 0);
              left: 0;
           }
           .carousel-showmanymoveone .carousel-inner > .item.active.left,
           .carousel-showmanymoveone .carousel-inner > .item.prev {
              -webkit-transform: translate3d(-50%, 0, 0);
              transform: translate3d(-50%, 0, 0);
              left: 0;
           }
           .carousel-showmanymoveone .carousel-inner > .item.left,
           .carousel-showmanymoveone .carousel-inner > .item.prev.right,
           .carousel-showmanymoveone .carousel-inner > .item.active {
              -webkit-transform: translate3d(0, 0, 0);
              transform: translate3d(0, 0, 0);
              left: 0;
           }
        }

        @media all and (min-width: 992px) {
           .carousel-showmanymoveone .carousel-inner > .active.left,
           .carousel-showmanymoveone .carousel-inner > .prev {
              left: -16.6%;
           }
           .carousel-showmanymoveone .carousel-inner > .active.right,
           .carousel-showmanymoveone .carousel-inner > .next {
              left: 16.6%;
           }
           .carousel-showmanymoveone .carousel-inner > .left,
           .carousel-showmanymoveone .carousel-inner > .prev.right,
           .carousel-showmanymoveone .carousel-inner > .active {
              left: 0;
           }
           .carousel-showmanymoveone .carousel-inner .cloneditem-2,
           .carousel-showmanymoveone .carousel-inner .cloneditem-3 {
              display: block;
           }
        }

        @media all and (min-width: 992px) and (transform-3d),
        all and (min-width: 992px) and (-webkit-transform-3d) {
           .carousel-showmanymoveone .carousel-inner > .item.active.right,
           .carousel-showmanymoveone .carousel-inner > .item.next {
              -webkit-transform: translate3d(16.6%, 0, 0);
              transform: translate3d(16.6%, 0, 0);
              left: 0;
           }
           .carousel-showmanymoveone .carousel-inner > .item.active.left,
           .carousel-showmanymoveone .carousel-inner > .item.prev {
              -webkit-transform: translate3d(-16.6%, 0, 0);
              transform: translate3d(-16.6%, 0, 0);
              left: 0;
           }
           .carousel-showmanymoveone .carousel-inner > .item.left,
           .carousel-showmanymoveone .carousel-inner > .item.prev.right,
           .carousel-showmanymoveone .carousel-inner > .item.active {
              -webkit-transform: translate3d(0, 0, 0);
              transform: translate3d(0, 0, 0);
              left: 0;
           }
        }

    </style>

    <!--Start of Tawk.to Script-->

    <!--<script type="text/javascript">-->

    <!--var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();-->

    <!--(function(){-->

    <!--var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];-->

    <!--s1.async=true;-->

    <!--s1.src='https://embed.tawk.to/5efad9b74a7c6258179b9617/default';-->

    <!--s1.charset='UTF-8';-->

    <!--s1.setAttribute('crossorigin','*');-->

    <!--s0.parentNode.insertBefore(s1,s0);-->

    <!--})();-->

    <!--</script>-->

    <!--End of Tawk.to Script-->
    
    
    
    
    
    <!--Starts of Tawk.to Script aktive kan disini-->
     <script type="text/javascript">
         var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
         (function(){
         var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
         s1.async=true;
         s1.src='https://embed.tawk.to/675ff8db49e2fd8dfef8a223/1if7e86sm';
         s1.charset='UTF-8';
         s1.setAttribute('crossorigin','*');
         s0.parentNode.insertBefore(s1,s0);
        })();
    </script>
<!--End of Tawk.to Script aktive kan disini -->





</head>

<body>

	<!-- Insert Header -->

	<?=$this->insert('header');?>



	<!-- Insert Content -->

	<?=$this->section('content');?>


    

 
 
 
 
 
 <!-- active kan whatsapp disini first -->
 <div style="position: fixed; bottom: 15px; right: 90px; z-index: 9997; border-radius: 10px;">
    <!-- Wrapper untuk ikon angka -->
    <div style="position: relative;">
        <!--<div style="border:1px solid black;position:relative;display:flex;flex-direction:column;">-->
            <!-- Admin 1 -->
            <a id="admin1" href="https://wa.me/6282232128887" title="Admin 1" 
             class="badge badge-sm badge-warning" style="width:75px;position: absolute;font-size:11px; background:#25D366; bottom: 35px; right: 70px; opacity: 0; transition: all 0.3s ease; transform: translateX(50px);pointer-events: none;">
                 Admin 1
            </a>
        <!-- Admin 2 -->
        <a class="badge badge-sm badge-primary" id="admin2" href="https://wa.me/6285806825773" title="Admin 2" 
           style="width:75px;position: absolute;font-size:11px;background:#128C7E; bottom: 15px; right: 70px; opacity: 0; transition: all 0.3s ease; transform: translateX(50px);pointer-events: none;">
            Admin 2
        </a>
        <!--</div>-->
        <!-- Ikon WhatsApp -->
        <div id="btn-wa" style="display: inline-block; cursor: pointer;">
            <img src="<?php echo $iconPath; ?>" alt="Chat WhatsApp" style="width: 62px; height: 62px; display: block;">
        </div>
    </div>
</div>
<!-- active kan whatsapp disini end -->






<!--<div style="position: fixed; bottom: 15px; right: 90px; z-index: 9999; border-radius: 10px;">-->
<!--    <a href="https://wa.me/6282232128887" target="_blank" style="display: inline-block;">-->
<!--        <img src="<?php echo $iconPath; ?>" alt="Chat WhatsApp 2" style="width: 62px; height: 62px; display: block;">-->
<!--    </a>-->
<!--</div>-->

	<?=$this->insert('footer');?>



	<!-- Javascript -->

	<script src="<?=$this->asset('/js/owl.carousel.min.js')?>"></script>

	<script src="<?=$this->asset('/js/bootstrap.min.js')?>"></script>

	<script src="<?=$this->asset('/js/wow.min.js')?>"></script>

	<script src="<?=$this->asset('/js/slider.js')?>"></script>

	<script src="<?=$this->asset('/js/jquery.fancybox.js')?>"></script>

    <script src="<?=$this->asset('/js/main.js')?>"></script>

	<script src="<?=$this->asset('/js/marquee.js')?>"></script>
	
	<script>
	$(document).ready(function () {
    let isOpen = false;

    // Ketika ikon WhatsApp diklik
    $('#btn-wa').on('click', function () {
        isOpen = !isOpen;

        if (isOpen) {
            // Tampilkan teks admin secara animasi
            $('#admin1, #admin2').css({
                opacity: 1,
                transform: 'translateX(0)',
                'pointer-events': 'auto' // Aktifkan klik
            });
        } else {
            // Sembunyikan teks admin secara animasi
            $('#admin1, #admin2').css({
                opacity: 0,
                transform: 'translateX(50px)',
                'pointer-events': 'none' // Nonaktifkan klik
            });
         }
        });
    });
	</script>

</body>


</html>