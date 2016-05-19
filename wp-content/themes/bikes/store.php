<?php
/**
 * The template for displaying contact page.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 * Template Name: Store 
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package bikes
 */

get_header(); ?>
<section id="content" class="clearfix" style="width:100% !important;">
  <style>
  .collection-title {
    padding-left: 20px;
    padding-top: 40px;
  }
  
  .product-image {
    height: 200px;
  }
  
  .bike-image {
    height: 400px;
  }
  
  .bike-image, .product-image {
    position: relative;
  }
  
  .product-image img, .bike-image img {
    max-height: 100%;
    max-width: 90%;
    position: absolute;  
    top: 0;  
    bottom: 0;  
    left: 0;  
    right: 0;  
    margin: auto;
  }
  
  .product {
    text-align: center;
  }
  
  .product a {
	color: black !important;
  }

</style>

<div id="page" class="row">

<h1 class="collection-title">Наши электробайки</h1>

  <div class="yui3-g-r " style="padding-bottom: 70px">

	<!-- product cell -->
    <div class="yui3-u-1-2 product">
      <a class="" href="/cruz-order/">
        
        <!-- image -->
        <div class="bike-image">
          <img src="/i/main-1440.jpg" alt="CRUZ">
        </div>

        <!-- product title -->
        <h2>CRUZ</h2>



        
         
        


        <!-- price -->
        <span class="price">
          
            500 000 руб.
           
          
        </span>        
      </a>
    </div>
    
    <!-- product cell -->
    <div class="yui3-u-1-2 product">
      <a class="" href="/tracker-order/">
        
        <!-- image -->
        <div class="bike-image">
          <img src="/i/e-tracker-2-1440.jpg" alt="E-Tracker">
        </div>

        <!-- product title -->
        <h2>Tracker</h2>

        <!-- price -->
        <span class="price">
          
            500 000 руб.
            
        </span>        
      </a>
    </div>
  </div>
</div>

<h3 style="padding: 30px;">Доставка по всей России - бесплатно! Срок доставки от одного дня до месяца, в зависимости от налиия товара и удаленности от Москвы</h3>
                  

</section>

<?php

get_footer();
