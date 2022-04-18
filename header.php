<!doctype html>
<html lang="en">
   <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <?php wp_head(); ?>
   </head>
   <body>
      <!-- Header Start --> 
      <header class="navigation">
         <nav class="navbar navbar-expand-lg  py-4" id="navbar">
            <div class="container">
               <a class="navbar-brand" href="index.html">
               	<img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo.png" alt="">
               </a>
               <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarsExample09" aria-controls="navbarsExample09" aria-expanded="false" aria-label="Toggle navigation">
               <span class="fa fa-bars"></span>
               </button>
               <div class="collapse navbar-collapse text-center main-menu" id="navbarsExample09">

               <?php
                    wp_nav_menu(array(
                        'theme_location' => 'primary',
                        'menu_class' => 'navbar-nav ml-auto'
                    ));
               ?>
               </div>
            </div>
         </nav>
      </header>
      <!-- Header Close --> 