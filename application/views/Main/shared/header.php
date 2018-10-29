<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Home | <?php foreach ($company as $c):?> <?= $c->company_name ?><?php endforeach ?>   </title>
  
  <!-- core CSS -->
    <link href="<?php echo base_url(); ?>theme1/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>theme1/css/font-awesome.min.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>theme1/css/animate.min.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>theme1/css/prettyPhoto.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>theme1/css/main.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>theme1/css/responsive.css" rel="stylesheet">
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->       
    <link rel="shortcut icon" href="images/ico/favicon.ico">
    <link rel="stylesheet" href="<?php echo base_url(); ?>theme1/css/flexslider.css" type="text/css" media="screen" property="" />
<link href="//fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i" rel="stylesheet">
<link href="//fonts.googleapis.com/css?family=Droid+Serif:400,400i,700,700i" rel="stylesheet">
<link rel="apple-touch-icon" sizes="57x57" href="<?php echo base_url(); ?>apple-icon-57x57.png">
<link rel="apple-touch-icon" sizes="60x60" href="<?php echo base_url(); ?>apple-icon-60x60.png">
<link rel="apple-touch-icon" sizes="72x72" href="<?php echo base_url(); ?>apple-icon-72x72.png">
<link rel="apple-touch-icon" sizes="76x76" href="<?php echo base_url(); ?>apple-icon-76x76.png">
<link rel="apple-touch-icon" sizes="114x114" href="<?php echo base_url(); ?>apple-icon-114x114.png">
<link rel="apple-touch-icon" sizes="120x120" href="<?php echo base_url(); ?>apple-icon-120x120.png">
<link rel="apple-touch-icon" sizes="144x144" href="<?php echo base_url(); ?>apple-icon-144x144.png">
<link rel="apple-touch-icon" sizes="152x152" href="<?php echo base_url(); ?>apple-icon-152x152.png">
<link rel="apple-touch-icon" sizes="180x180" href="<?php echo base_url(); ?>apple-icon-180x180.png">
<link rel="icon" type="image/png" sizes="192x192"  href="<?php echo base_url(); ?>android-icon-192x192.png">
<link rel="icon" type="image/png" sizes="32x32" href="<?php echo base_url(); ?>favicon-32x32.png">
<link rel="icon" type="image/png" sizes="96x96" href="<?php echo base_url(); ?>favicon-96x96.png">
<link rel="icon" type="image/png" sizes="16x16" href="<?php echo base_url(); ?>favicon-16x16.png">
<link rel="manifest" href="/manifest.json">
<meta name="msapplication-TileColor" content="#ffffff">
<meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
<meta name="theme-color" content="#ffffff">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?php echo base_url(); ?>theme1/images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?php echo base_url(); ?>theme1/images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php echo base_url(); ?>theme1/images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="<?php echo base_url(); ?>theme1/images/ico/apple-touch-icon-57-precomposed.png">
</head><!--/head-->

<body class="homepage">

    <header id="header">
         
        <div class="top-bar">
            <div class="container">
                <div class="row">  <?php foreach ($contact_us as $contact):?> 

                    <div class="col-sm-6 col-xs-4">
                        <div class="top-number"><p><i class="fa fa-phone-square"></i>  +<?= $contact->phone_office_one ?></p></div>
                    </div>
                     <?php endforeach ?>  
                    <div class="col-sm-6 col-xs-8">
                       <div class="social">
                            <ul class="social-share">
                                <li><a href="<?= $contact->facebook ?>"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="<?= $contact->twitter ?>"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="<?= $contact->linkedin ?>"><i class="fa fa-linkedin"></i></a></li> 
                                <li><a href="<?= $contact->dribble ?>"><i class="fa fa-dribbble"></i></a></li>
                                <li><a href="<?= $contact->skype ?>"><i class="fa fa-skype"></i></a></li>
                            </ul>
                            <div class="search">
                                <form role="form">
                                    <input type="text" class="search-form" autocomplete="off" placeholder="Search">
                                    <i class="fa fa-search"></i>
                                </form>
                           </div>
                       </div>
                    </div>
                </div>
            </div><!--/.container-->
        </div><!--/.top-bar-->

        <nav class="navbar navbar-inverse" role="banner">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                 
                    <?php foreach ($company as $c):?> 
                    <a class="navbar-brand" href="<?php echo base_url(); ?>index.php/welcome/index"><img src="<?php echo base_url(); ?><?= $c->logo_url ?>" width="130" height = "50" alt="logo"></a>
                <?php endforeach ?>  
                </div>
        
                <div class="collapse navbar-collapse navbar-right">
                    <ul class="nav navbar-nav">
                              <?php if($active == 'home')echo'
              <li class="active"><a href="'.base_url().'index.php/welcome/index">Home</a></li>';
              else {
                echo '<li><a href="'.base_url().'index.php/welcome/index">Home</a></li>';
              }
              ?>
             
             <?php 

               if($active == 'service')echo'<li class="dropdown  active">';
               else {
                echo '<li class="dropdown">';


               }
?>
                       
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Services <i class="fa fa-angle-down"></i></a>
                            <ul class="dropdown-menu">
                            
                                <li><a href="<?php echo base_url(); ?>index.php/welcome/services/local">Local</a></li>

                                 <li><a href="<?php echo base_url(); ?>index.php/welcome/services/import">Import</a></li>

                                  <li><a href="<?php echo base_url(); ?>index.php/welcome/services/export">Export</a></li>
                              
                              
                            </ul>
                        </li>

                <?php 

               if($active == 'product')echo'<li class="dropdown  active">';
               else {
                echo '<li class="dropdown">';


               }
?>
                       
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Products <i class="fa fa-angle-down"></i></a>
                            <ul class="dropdown-menu">
                            
                                <li><a href="<?php echo base_url(); ?>index.php/welcome/products/local">Local</a></li>

                                 <li><a href="<?php echo base_url(); ?>index.php/welcome/products/import">Import</a></li>

                                  <li><a href="<?php echo base_url(); ?>index.php/welcome/products/export">Export</a></li>
                              
                              
                            </ul>
                        </li>

              
          

               <?php 

if($active == 'gallery')echo'<li class="dropdown  active">';
else {
 echo '<li class="dropdown">';


}
?>
        
             <a href="#" class="dropdown-toggle" data-toggle="dropdown">Gallery <i class="fa fa-angle-down"></i></a>
             <ul class="dropdown-menu">
               <?php foreach ($categories as $category):?> 
                 <li><a href="<?php echo base_url(); ?>index.php/welcome/gallery/<?php echo $category->category_id?>"><?= $category->category_name ?></a></li>
                 <?php endforeach ?>
               
             </ul>
         </li>
                
               <?php 

               if($active == 'sister_company')echo'<li class="dropdown  active">';
               else {
                echo '<li class="dropdown">';


               }
?>
                       
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Sister Companies <i class="fa fa-angle-down"></i></a>
                            <ul class="dropdown-menu">
                              <?php foreach ($sister_companies as $sc):?> 
                                <li><a href="<?php echo base_url(); ?>index.php/welcome/sister_company/<?php echo $sc->company_id?>"><?= $sc->company_name ?></a></li>
                                <?php endforeach ?>
                              
                            </ul>
                        </li>


                          <?php if($active == 'community_services')echo'
              <li class="active"><a href="'.base_url().'index.php/welcome/community_services">Community Services</a></li>';
              else {
                echo '<li><a href="'.base_url().'index.php/welcome/community_services">Community Services</a></li>';
              }
              ?>

              <?php if($active == 'locations')echo'
              <li class="active"><a href="'.base_url().'index.php/welcome/locations">Locations</a></li>';
              else {
                echo '<li><a href="'.base_url().'index.php/welcome/locations">Locations</a></li>';
              }
              ?>

                         <?php 

               if($active == 'others')echo'<li class="dropdown  active">';
               else {
                echo '<li class="dropdown">';


               }
?>
                       
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Others <i class="fa fa-angle-down"></i></a>
                            <ul class="dropdown-menu">
                            <li><a href="<?php echo base_url(); ?>index.php/welcome/articles">Articles</a></li>
                              <?php foreach ($pages as $page):?> 
                                <li><a href="<?php echo base_url(); ?>index.php/welcome/pages/<?php echo $page->page_id?>"><?= $page->page_label ?></a></li>
                                <?php endforeach ?>
                              
                            </ul>
                        </li>
                       
                           <?php if($active == 'contact_us')echo'
              <li class="active"><a href="'.base_url().'index.php/welcome/contact_us">Contact Us</a></li>';
              else {
                echo '<li><a href="'.base_url().'index.php/welcome/contact_us">Contact Us</a></li>';
              }
              ?>
                    </ul>
                </div>
            </div><!--/.container-->
        </nav><!--/nav-->
    
    </header><!--/header-->