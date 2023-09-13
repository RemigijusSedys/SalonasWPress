<!DOCTYPE html>
<html lang="en">

<head>

   <meta charset="UTF-8" />
   <meta http-equiv="X-UA-Compatible" content="IE=edge" />
   <meta name="viewport" content="width=device-width, initial-scale=1.0" />
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.0/jquery.min.js"></script>

   <?php
   wp_head();
   ?>


</head>

<body>
   <header class="top-head">
      <div class="container">
         <div class="logo">
            <?php

            // tales logo dynamic
            if (function_exists('the_custom_logo')) {
               // the_custom_logo();
               $custom_logo_id = get_theme_mod('custom_logo');
               $logo = wp_get_attachment_image_src($custom_logo_id);
            }
            ?>
            <a href="/wordpress/"><img style="height: 70px; width: 90px; " src="<?php echo $logo[0] ?> " alt="hand"></a>

            <a href="/wordpress/">
               <?php
               // takes logo name dynamic
               echo get_bloginfo('name');
               ?>
            </a>
         </div>
         <div class="navbar">
            <?php
               wp_nav_menu(
                  array(
                     'menu' => 'Main menu',
                     'container' => '',
                     'theme_location' => 'Header',
                     'item_wrap' => '<ul id="" class="menu">%3$s</ul>'
                  )
               );
            ?>
         </div>
         <!-- <div class="navbar">
            <ul class="nav-list">
               <li class="nav-direction">
                  <a class="nav-link" href="./prototipas.html">Home</a>
               </li>
               <li class="nav-direction">
                  <a class="nav-link" href="./about.html">About</a>
               </li>
               <li class="nav-direction">
                  <a class="nav-link" href="./contact.html">Contact</a>
               </li>
            </ul>
         </div> -->
      </div>
   </header>