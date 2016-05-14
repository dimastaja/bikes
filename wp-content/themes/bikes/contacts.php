<?php
/**
 * The template for displaying contact page.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 * Template Name: Контакты 
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package bikes
 */

get_header(); ?>
<section style="width:100% !important;" class="clearfix" id="content">
  <style>
  h1 {
    visibility:hidden;
  }
</style>

<div class="row" id="page">
  
  <div class="span12">
    <h1>Контакты</h1>
    <div class="page-with-contact-form">
      
           
      

        	
            <div class="yui3-u-2-3">

                  <h3 class="overviewTitle">Контакты</h3>
          
                  <div style="padding:15px;">

                    <p>Это форма - самый простой способ связаться с нами. Пожалуйста, напишите нам.</p>
                  
                    <form accept-charset="UTF-8" class="contact-form" id="contact_form" action="/sendmail.php" method="post"><input type="hidden" name="form_type" value="contact"><input type="hidden" value="✓" name="utf8">
                    

                    

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
                        <label>Сообщение:</label><br>
                        <textarea placeholder="Ваше сообщение" name="body" id="contactFormMessage" cols="75" rows="15"></textarea>
                      </p>
                      <p>
                        <input type="submit" class="btn" value="Отправить" id="contactFormSubmit">
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

<style>
.jurinfo p
{
    margin-bottom:0px!important;
}
</style>

<div style="margin-left:15px; font-size: 9px; color:grey" class="jurinfo">
<p>Юридическая информация</p>
<p>Наименование: ОБЩЕСТВО С ОГРАНИЧЕННОЙ ОТВЕТСТВЕННОСТЬЮ "ВЕНЧУРСТОР"</p>
<p>Сокращенное наименование: ООО "ВЕНЧУРСТОР"</p>
<p>Сокращенное наименование VENTURESTORE LTD.
(Eng):</p>
<p>Адрес (место нахождения): 107031, г. Москва, пер. Петровский, д. 8 стр. 1 помещение III, КОМН 2-4</p>
<p>ОГРН: 1117746680040</p>
</div>


</section>

<?php

get_footer();
