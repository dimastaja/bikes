<?php
/**
 * The template for displaying vision page.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 * Template Name: Видение
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package bikes
 */

get_header(); ?>
<section style="width:100% !important;" class="clearfix" id="content">
  <div class="row" id="page">
  
  <div class="span12 details">
    
    <style>
      .responsive-image {
        position: relative;
        overflow: hidden;
      }
      
      
      .responsive-image .img {
        position: absolute;
        top: 0px;
        left: 0px;
        width: 100%;
        height: 100%;
        z-index: 1;
        overflow: hidden;
        text-align: center;
        background-size: cover;
        background-repeat: no-repeat;
        background-position: center center;
      }
    </style>
    
    <div style="min-height: 667px; min-height: 75vmin" class="responsive-image">
      <div style="background-image: url(/i/andrew-blake.jpg); " class="img"></div>
    </div>
    
 
<!--     <h1 style="text-align:center;" class="overviewBody">About Vintage Electric</h1>    
     -->
    <div style="padding-top: 10px;" class="yui3-g-r">
      <div style="padding-top: 30px;" class="yui3-u-1-3">
        <h1 class="overviewBody">Винтажные электробайки</h1>
        <p class="overviewBody">Я и моя команда выходим далеко за рамки производства велосипедов. Мы создаем бренд, производим прекрасные продукты, которые вызывают неподдельные улыбки на лицах наших покупателей.</p>
        <p style="font-style: italic; text-align: right;" class="overviewBody">
          Эндрю Дэвидж<br>
          Основатель и главный дизайнер
        </p>
      </div>

      <div class="yui3-u-2-3">
        <div style="min-height: 400px;" class="responsive-image">
          <div style="background-image: url(/i/shoes.jpg);" class="img"></div>
        </div>
      </div>
    </div>

    <style>
      .front {
        padding-top:10px;
      }
    </style>
    <!--<h1 style="text-align: center; margin-top:40px; margin-bottom:40px;">О нас говорят</h1>
    
    <div class="yui3-g-r row">
      <div class="yui3-u-1-3">
          <div class="bounding-box top front fill" id="box1">
            <p style="margin-bottom: 4px;" class="overviewBody">
            </p>
            <p style="font-style: italic; text-align: right; margin-bottom: 15px;" class="overviewBody">
              Damon Lavrinc<br>
              Wired Magazine
            </p>
            <div style="width: 100px; height:auto; float:right;" class="overviewBody">
              <a href="http://www.wired.com/2014/05/icon-e-flyer-2/">
                  <img alt="" src="/i/2-wired_logo.png"/>        
              </a>
            </div>
          </div>
      </div>
      <div class="yui3-u-1-3">
          <div class="bounding-box top front fill front-center" id="box1">
            <p style="margin-bottom: 4px;" class="overviewBody">“An electric-powered bicycle that looks like it came out of the Milwaukee workshop of William S. Harley and Arthur Davidson circa 1915. It's got fat cruiser tires, a hydroformed aluminium frame, brushed nickel, steel and brass details - and pedals.”
            </p>
            <p style="font-style: italic; text-align: right; margin-bottom: 4px;" class="overviewBody">
              Brendan McAleer<br>
              Road &amp; Track
            </p>
            <div style="width: 100px; height:auto; float:right;" class="overviewBody">
              <a href="http://www.roadandtrack.com/new-cars/news/a5932/icon-releases-its-first-electric-bike/">
                  <img alt="" src="/i/road-and-track.png"/>        
              </a>
            </div>
          </div>
      </div>
      <div class="yui3-u-1-3">
         <div class="bounding-box top front fill" id="box1">
            <p style="margin-bottom: 4px;" class="overviewBody">“From Apples to HPs, products invented in Silicon Valley garages have taken the world by storm. Now, a group of young entrepreneurs from Los Gatos is making a splash on the world stage with the vintage-style electric bikes they're handcrafting with skill and precision.”
            </p>
            <p style="font-style: italic; text-align: right; margin-bottom: 12px;" class="overviewBody">
              Judy Peterson<br>
              Mercury News
            </p>
            <div style="width: 100px; height:auto; float:right;" class="overviewBody">
              <a href="http://www.mercurynews.com/los-gatos/ci_25284068/young-los-gatos-entrepreneurs-launch-vintage-electric-bicycle">
                  <img alt="" src="/i/mercury.png"/>        
              </a>
            </div>
          </div>
      </div>
    </div>  -->  
    
    <h1 style="text-align: center; margin-top:30px; margin-bottom:40px;">Команда</h1>

<!--     <div class="responsive-image" style="min-height: 910px;">
      <div class="img" style="background-image: url(/i/veb-squad.jpg); "></div>
    </div> -->
    
    <div style="padding-top: 20px;" class="full-photo">
      <img src="/i/veb-squad.jpg" class="photo" />
    </div>
    
  </div>
  
  
</div>
</section>

<?php

get_footer();
