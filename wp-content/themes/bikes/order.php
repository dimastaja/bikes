<?php
/**
 * The template for displaying contact page.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 * Template Name: Order 
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package bikes
 */

get_header(); ?>
<section style="width:100% !important;" class="clearfix" id="content">
  <style>
  h1 {
    
  }
</style>

<div class="row" id="page" style="margin-left: 50px;">
  
  <div class="span12">
    
    <div class="page-with-contact-form">
      
           
      

        	
            <div class="yui3-u-2-3">
                
                  <h1 class="overviewTitle">Заказ байка</h1>
                 <div class="order-container" style="margin-left: 15px;">
                  <div> <h3 style="display:inline-block">Вы выбрали</h3>
                  
                  <h2 style="display:inline-block"><b><?=$_REQUEST['bikeName']?></b></h2></div>
                 
                  <?
                  $orderDetails="<h2><b><{$_REQUEST['bikeName']}</b></h2>";
                  
                  /*
                  totalSumm] => 602200
    [Color] => Синий
    [Power] => Уличный
    [Control] => Ручное
    [TireColor] => Кремовый
    [Rack] => Багажник с двумя боковыми сумками +79 900
    [Taillight] => Да  +7 500
    [BrooksChallengeBag] => Да +9 900
    [SpurcycleBell] => Да  +4 900
                  */
                  
                  $arMatch=array(
                    'Color'=>"Цвет", 
                    'Power'=>'Режим движения',
                    'Control'=>'Управление скоростью',
                    'TireColor'=>'Цвет покрышек',
                    'Rack'=>'Багаж',
                    'Taillight'=>'Задний фонарь',
                    'BrooksChallengeBag'=>'Бардочок',
                    'SpurcycleBell'=>'Звонок',
                    );
                  foreach($_REQUEST as $optName => $optValue)
                  {
                    if (in_array($optName, array('totalSumm','bikeName')))
                        continue;
                    echo "<p><b>{$arMatch[$optName]}:</b> $optValue</p>";
                    $orderDetails.="<p><b>{$arMatch[$optName]}:</b> $optValue</p>";
                  }
                  ?>
                  <p>Всего к оплате <b><?=$_REQUEST['totalSumm']?></b> руб.</p>
                  </div>
                  <?
                  $orderDetails.="<p>Всего к оплате <b>{$_REQUEST['totalSumm']}</b> руб.</p>";
                 // printr($_REQUEST);
                  ?>
                  <div style="padding:15px;">

                    <p>Пожалуйста, заполните следующие поля для завершения оформления заказа.</p>
                  
                    <form accept-charset="UTF-8" class="contact-form" id="contact_form" action="/sendorder.php" method="post"><input type="hidden" name="form_type" value="contact"><input type="hidden" value="✓" name="utf8">
                    
                    <textarea name="orderDetails" class="hidden" style="display: none;"><?=$orderDetails?></textarea>
                    

                    <div id="contactFormWrapper">
                      <p>
                        <label>Имя:</label><br>
                        <input type="text" placeholder="Имя" name="name" id="contactFormName">
                      </p>
                      <p>
                        <label>Email:</label><br>
                        <input type="email" placeholder="Email" name="email" id="contactFormEmail">
                      </p>
                      <p>
                        <label>Телефон:</label><br>
                        <input type="telephone" placeholder="Телефон" name="phone" id="contactFormTelephone">
                      </p> 
                      <p>
                        <label>Комментарий к заказку:</label><br>
                        <textarea placeholder="Комментарий" name="body" id="contactFormMessage" cols="75" rows="15"></textarea>
                      </p>
                      <p>
                        <input type="submit" class="btn" value="Отправить заказ" id="contactFormSubmit">
                      </p>
                  </div>
                </form></div>
                
			</div>
      </div>
    </div><!-- end form -->
    
    
    <style>
      @media (max-width:767px) {
        overflow-x: hidden;
      }
      
    </style>


    
 
    
    
    <div class="p10"></div>
  </div>
  
</div>



</section>

<?php

get_footer();
