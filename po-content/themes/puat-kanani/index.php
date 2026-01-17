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
	

    <!-- Stylesheets -->
	<link href="http://fonts.googleapis.com/css?family=Lato:300,400,400italic,600,700" rel="stylesheet" type="text/css" />
	<link rel="stylesheet" href="<?=$this->asset('/css/normalize.css')?>" type="text/css" />
	<link rel="stylesheet" href="<?=$this->asset('/css/typography.css')?>" type="text/css" />
	<link rel="stylesheet" href="<?=$this->asset('/css/fontawesome.css')?>" type="text/css" />
	<link rel="stylesheet" href="<?=$this->asset('/css/style.css')?>" type="text/css" />
	<link rel="stylesheet" href="<?=$this->asset('/css/colors.css')?>" type="text/css" />
	
	<!-- Responsive -->
	<link rel="stylesheet" media="(max-width:767px)" href="<?=$this->asset('/css/0-responsive.css')?>" type="text/css" />
	<link rel="stylesheet" media="(min-width:768px) and (max-width:1024px)" href="<?=$this->asset('/css/768-responsive.css')?>" type="text/css" />
	<link rel="stylesheet" media="(min-width:1025px) and (max-width:1199px)" href="<?=$this->asset('/css/1025-responsive.css')?>" type="text/css" />
	<link rel="stylesheet" media="(min-width:1200px)" href="<?=$this->asset('/css/1200-responsive.css')?>" type="text/css" />
	
	<!-- Google Fonts -->
    <link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>

	<!-- Favicons -->
	<link rel="shortcut icon" href="<?=BASE_URL.'/'.DIR_INC;?>/images/favicon.png" />

	<!-- Javascript -->
	<script src="https://www.google.com/recaptcha/api.js"></script>
	
	</head>
	<body>
		<!-- Wrapper -->
        <div id="cs-wrapper" class="wide">
			<!-- Insert Header -->
			<?=$this->insert('header');?>
			
			<!-- Insert Content -->
			<?=$this->section('content');?>
			
			<!-- Insert Footer -->
			<?=$this->insert('footer');?>
		</div>
	<!-- Javascript -->
	<script type="text/javascript" src="<?=$this->asset('/js/jquery.js')?>"></script>
	<script type="text/javascript" src="<?=$this->asset('/js/jquery-ui.js')?>"></script>
	<script type="text/javascript" src="<?=$this->asset('/js/jquery-easing.js')?>"></script>
	<script type="text/javascript" src="<?=$this->asset('/js/jquery-fitvids.js')?>"></script>
	<script type="text/javascript" src="<?=$this->asset('/js/jquery-sticky.js')?>"></script>
	<script type="text/javascript" src="<?=$this->asset('/js/jquery-viewportchecker.js')?>"></script>
	<script type="text/javascript" src="<?=$this->asset('/js/jquery-swiper.js')?>"></script>
	<script type="text/javascript" src="<?=$this->asset('/js/jquery-magnific.js')?>"></script>
	<script type="text/javascript" src="<?=$this->asset('/js/jquery-countdown.js')?>"></script>
	<script type="text/javascript" src="<?=$this->asset('/js/jquery-init.js')?>"></script>

	</body>
</html>