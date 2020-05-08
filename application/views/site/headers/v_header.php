<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title><?php echo $title; ?></title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <base href="<?php echo base_url(); ?>">
  <link rel="canonical" href="<?php echo base_url(); ?>" />

  <meta name="description" content="" />
  <meta name="keywords" content="" />
  <meta name="author" content="Marcos Andrade - marcos@presencadigitall.com.br" />
  <link rel="index" title="<?php echo $title; ?>" href="<?php echo base_url(); ?>">


  <meta property="fb:admins" content="100003566854664,100000423466452"/>
  <meta property="og:url" content="<?php echo (isset($controller) ? $controller : base_url());?>" />
  <meta property="og:title" content="<?php echo (isset($title) ? $title : 'Título Facebook');?>">
  <meta property="og:description" content="<?php echo (isset($descricao) ? $descricao : 'Descrição Facebook');?>">
  <meta property="og:image" content="<?php echo (isset($imagem) ? $imagem : base_url().'assets/img/capa-home.jpg'); ?>" >
  <meta property="og:image:type" content="image/jpeg">
  <meta property="og:type" content="website">
  <meta name="url" content="<?php echo base_url(); ?>">


  <!-- Google Font -->
   <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200;300;400;600;900&display=swap" rel="stylesheet">

   <!-- Css Styles -->
   <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrap.min.css" type="text/css">
   <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/font-awesome.min.css" type="text/css">
   <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/elegant-icons.css" type="text/css">
   <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/nice-select.css" type="text/css">
   <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/jquery-ui.min.css" type="text/css">
   <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/owl.carousel.min.css" type="text/css">
   <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/slicknav.min.css" type="text/css">
   <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/style.css" type="text/css">
   <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/slide.css" type="text/css">
   
    <link href="<?php echo base_url(); ?>assets/vendor/nivo-slider/css/nivo-slider.css" rel="stylesheet">
    
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/override.css" type="text/css">
     <script src="<?php echo base_url(); ?>assets/js/cart.js"></script>

</head>

<div class="container" id="display_cart" <?php if(!isset($this->session->cart_item)){ ?> style="display: none"<?php } ?>>
	<div class="row">
            
		<div class="main-button">
                    <a href="<?php echo base_url().'cart'; ?>" class=""> 
                        <button class="btn btn-success dot-cart-num"><i class="fa fa-shopping-cart " aria-hidden="true"></i><span id="dot-cart"></span></button>
                    </a>
                </div>
	</div>
</div>

