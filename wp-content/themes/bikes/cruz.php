<?php
/**
 * The template for displaying cruz page.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 * Template Name: Cruz
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package bikes
 */

get_header(); ?>




<section style="width:100% !important;" class="clearfix" id="content">
  <!-- CRUZ press release page -->
<style>
/* Sticky navigationation for page */  
  
.sticky-cell a {
  padding-top: 20px;
  padding-bottom: 20px;
  display: block;
}
  
@media (max-width:767px) {
 .sticky-cell a {
    padding-top: 2px;
    padding-bottom: 2px;
  } 
}
  
.sticky-grid {
	max-width: 1440px;
    margin: 0px auto;
}
  
.sticky-fixed {
	position: fixed;
  	top: 0px;
    left: 0px;
}
  
#sticky {
  background: #ece9e6;
  text-align: center;
  width: 100%;
  z-index: 999;
}
  
#sticky a {
  color: #000;
}
  
#sticky-buy {
  background-color: #862633;
}
  
#sticky #sticky-buy a {
  color: white;
}
  
/* End sticky */
  
.photo {
    display: block;
    margin-left: auto;
    margin-right: auto;
}

.full-photo {
    position: relative;
}

.full-photo img {
    width:100% !important;
    height:auto;
    display:block;
}
  
.description {
  padding: 0px 20px 0px;
}

.press-release {
  max-width: 800px;
  margin-right: auto;
  margin-left: auto;
  display: block;
}

@media (max-width:767px) {
  .desktop {
    display: none;
  }  
}
  
@media (min-width:768px) {
  .mobile {
    display: none;
  }
}
  
.section {
  padding-top: 60px;
}
  
</style>

<div id="sticky" class="">
  <div class="sticky-grid" style="text-align: center;"> 
  <div class="yui3-g-r ">
    <!-- spot 1 -->
    <div class="sticky-cell yui3-u-1-5">
      <a href="#introduction">Введение</a>
    </div>

    <!-- spot 2 -->
    <div class="sticky-cell yui3-u-1-5">
        <a href="#features">Особенности</a>
    </div>
    <!-- spot 3 -->
    <div class="sticky-cell yui3-u-1-5">
        <a href="#specs">Характеристики</a>
    </div>
    <!-- spot 4 -->
    <div class="sticky-cell yui3-u-1-5">
        <a href="#media">Фото</a>
    </div>
    <div class="sticky-cell yui3-u-1-5" id="sticky-buy">
        <a style="width: 100%;" href="/cruz-order/">Купить</a>
    </div>
  </div>
</div>
</div>
<div id="sticky-space" style="height: 0px;"></div>

<div class="row">

  <div class="section" id="introduction"></div>
  <div>
    <h1 style="text-align: center; padding-top: 10px">CRUZ</h1>
    <h3 style="text-align: center;">Дальность хода - 56 км. 58 км/ч в гоночном режиме. 2 часа без подзарядки.</h3>
  </div>
  
  <div class="full-photo">
    <img src="/i/main-1440.jpg" class="photo" />
  </div>
  
  <h1 style="text-align: center;" class="section">Создан для Приключений</h1>

  <div style="text-align:center;" class="section">
    <iframe width="100%" height="720" frameborder="0" onresize="" onload="" allowfullscreen="" mozallowfullscreen="" webkitallowfullscreen="" src="https://player.vimeo.com/video/124994694" id="vimeo-frame"></iframe>
  </div>
  
  <div style="background-color: rgba(0,0,0,0.1); padding-top: 40px; padding-bottom: 30px;">
    <div style="" class="press-release description">
      <p>Наша новейшая модель является классическим калифорнийским круизером с элементами дизайна, напоминающими  американский ар-деко. Наша детская мечта и первая модель -  Tracker, был создан под вдохновением от запрещённых  трековых мотоциклов начала 1900-х годов. Наша новейшая модель, CRUZ, также напоминает об ушедшей эпохи.</p>
      
    </div>
  </div>

  <div style="padding-top: 30px; padding-bottom: 30px; margin-top: 30px; text-align:center;">
    <h1 style="text-align: center; padding-top: 30px;">Три цвета</h1>
    <div class="full-photo">
    <img src="/i/ECruz-10-1440.jpg" class="photo" />
    </div>
    
    <div class="yui3-g-r" style="">
      <div class="yui3-u-1-3" id="">
          <div class="full-photo">
            <img src="/i/fiesta-480.jpg" class="photo" />
          </div>
          <h3 style="text-align: center;">Фиеста</h3>
      </div>
      <div class="yui3-u-1-3" id="">
          <div class="full-photo">
            <img src="/i/aqua-480.jpg" class="photo" />
          </div>
        <h3 style="text-align: center;">Аква</h3>
      </div>
      <div class="yui3-u-1-3" id="">
          <div class="full-photo">
            <img src="/i/cola-480.jpg" class="photo" />
          </div>
          <h3 style="text-align: center;">Кола</h3>
      </div>
    </div>
  </div>
  
  <h1 class="section" style="text-align: center;" id="features">Особенности</h1>
    
  <div class="section yui3-g-r">
    <div class="yui3-u-1-2">
      <div class="description" id="description-1">
        <h2>Гоночный режим</h2>
        <p style="">Гоночный режим является дополнительной опцией, использующей  3000-ваттный двигатель на задней ступице, который быстро разгоняет велосипедиста до 58 км / час.  </p> 
      </div>
    </div>
    <div class="yui3-u-1-2">
        <div class="full-photo">
          <img src="/i/ECruz-7-2-1440.jpg" class="photo" />
        </div>
    </div>
  </div>
  
   <div class="section yui3-g-r">
    <div class="desktop yui3-u-1-2">
        <div class="full-photo">
          <img src="/i/ECruz-1-1440.jpg" class="photo" />
        </div>
    </div>
    <div class="yui3-u-1-2">
      <div class="description">
        <h2>Батарея</h2>
        <p style="">Сердце и душа Круза, наша идеально исполненная, запатентованная алюминиевая батарея, изгтовляемая в  Санта Кларе, Калифорния.</p> 
      </div>
    </div>
    <div class="mobile yui3-u-1-2">
      <div class="full-photo">
        <img src="/i/ECruz-1-1440.jpg" class="photo" />
      </div>
    </div>
  </div>
  
  <div class="section yui3-g-r">
    <div class="yui3-u-1-2">
      <div class="description" id="description-1">
        <h2>Рекуперативное торможение</h2>
        <p>Наша система позволяет подзаряжать батарею даже при торможении. Это увеличивает дальность хода, гарантирую 57 км на одном заряде. </p> 
      </div>
    </div>
    <div class="yui3-u-1-2">
        <div class="full-photo">
          <img src="/i/ECruz-7-2-1440.jpg" class="photo" />
        </div>
    </div>
  </div>
  
  <div class="section yui3-g-r">
    <div class="yui3-u-1-2">
      <div class="description">
        <h2>Дисковые тормоза Shimano Alfine</h2>
        <p style=""> Shimano Alfine обеспечивает CRUZ непревзойденно эффективным торможением.</p> 
      </div>
    </div>
    <div class="yui3-u-1-2">
        <div class="full-photo">
          <img src="/i/ECruz-4-1440.jpg" class="photo" />
        </div>
    </div>
  </div>
  
  <div class="section yui3-g-r">
    <div class="desktop yui3-u-1-2">
        <div class="full-photo">
          <img src="/i/fatfrank-1440.jpg" class="photo" />
        </div>
    </div>
    <div class="yui3-u-1-2">
      <div class="description">
        <h2>Шины Schwalbe Fat Frank </h2>
        <p style=""></p> 
      </div>
    </div>
    <div class="mobile yui3-u-1-2">
        <div class="full-photo">
          <img src="/i/fatfrank-1440.jpg" class="photo" />
        </div>
    </div>
  </div>
  
  <div class="section yui3-g-r">
    <div class="yui3-u-1-2">
      <div class="description">
        <h2>Деревянный бак</h2>
        <p style=""></p> 
      </div>
    </div>
    <div class="yui3-u-1-2">
        <div class="full-photo">
          <img src="/i/ECruz-3-1440.jpg" class="photo" />
        </div>
    </div>
  </div>
  
  <div class="section yui3-g-r">
    <div class="desktop yui3-u-1-2">
        <div class="full-photo">
          <img src="/i/ECruz-6-2-1440.jpg" class="photo" />
        </div>
    </div>
    <div class="yui3-u-1-2">
      <div class="description">
        <h2>Тактильный контроль</h2>
        <p style=""></p> 
      </div>
    </div>
    <div class="mobile yui3-u-1-2">
        <div class="full-photo">
          <img src="/i/ECruz-6-2-1440.jpg" class="photo" />
        </div>
    </div>
  </div>
  
  <div class="section yui3-g-r">
    <div class="yui3-u-1-2">
      <div class="description">
        <h2>Ступицы Phil Wood</h2>
        <p style=""></p> 
      </div>
    </div>
    <div class="yui3-u-1-2">
        <div class="full-photo">
          <img src="/i/ECruz-8-2-1440.jpg" class="photo" />
        </div>
    </div>
  </div>
  
  <div class="section yui3-g-r">
    <div class="desktop yui3-u-1-2">
        <div class="full-photo">
          <img src="/i/ECruz-9-1440.jpg" class="photo" />
        </div>
    </div>
    <div class="yui3-u-1-2">
      <div class="description">
        <h2>Основная фара и задний фонарь</h2>
        <p style=""></p> 
      </div>
    </div>
    <div class="mobile yui3-u-1-2">
        <div class="full-photo">
          <img src="/i/ECruz-9-1440.jpg" class="photo" />
        </div>
    </div>
  </div>
  
  <div class="section yui3-g-r">
    <div class="yui3-u-1-2">
      <div class="description">
        <h2>Кожа от Brooks</h2>
        <p style=""></p> 
      </div>
    </div>
    <div class="yui3-u-1-2">
        <div class="full-photo">
          <img src="/i/brooks-800.jpg" class="photo" />
        </div>
    </div>
  </div>
  
  <div class="section" id="specs">
    <h1 style="text-align: center;">Технические характеристики</h1>
    <div class="datagrid">
        <table>
            <thead>
                <tr>
                    <th>Эксплуатационные показатели</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Пробег на одном заряде</td>
                    <td>57 км</td>
                </tr>
                <tr class="alt">
                    <td>Скорость</td>
                    <td>32 км/ч в обычном режиме, 58  км/ч в гоночном режиме</td>
                </tr>
                <tr>
                    <td>Время работы без подзарядки</td>
                    <td>2 часа</td>
                </tr>
            </tbody>
        </table>
    </div>
    <br>
    <!--<div class="datagrid">
        <table>
            <thead>
                <tr>
                    <th>Экономия</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Расчетная экономия топлива</td>
                    <td>1556 MPGe</td>
                </tr>
                <tr class="alt">
                    <td>Стоимость одной подзарядки</td>
                    <td>10 руб.</td>
                </tr>
            </tbody>
        </table>
    </div>-->
    <br>
    <div class="datagrid">
        <table>
            <thead>
                <tr>
                    <th>Двигатель</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Двигатель</td>
                    <td>3000 Вт, трехфазный бесщеточный электрический</td>
                </tr>
                <tr class="alt">
                    <td>Мощность</td>
                    <td>750 Вт в обычном режиме, 3000 Вт в гоночном режиме</td>
                </tr>
                <tr>
                    <td>Рекуперация заряда</td>
                    <td>Система рекуперативного торможения Vintage Electric</td>
                </tr>
                <!--<tr class="alt">
                    <td>Электронный регулятор скорости</td>
                    <td>60 ампер</td>
                </tr>-->
                <tr>
                    <td>Зарядное устройство</td>
                    <td>Высокопроизводительная 52 ЭП постоянного тока 110/220 В совместимый</td>
                </tr>
                <tr class="alt">
                    <td>Батарея</td>
                    <td>52в 12.5 Ач с расчетным сроком службы 48 000 км</td>
                </tr>
            </tbody>
        </table>
    </div>
    <br>
    <div class="datagrid">
        <table>
            <thead>
                <tr>
                    <th>Ходовая часть</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Рама</td>
                    <td>Хромированная сталь</td>
                </tr>
                <tr class="alt">
                    <td>Ручки и сдело</td>
                    <td>Ручная работа от Brooks</td>
                </tr>
                <tr>
                    <td>Тормоза</td>
                    <td>Тормоза гидравлические дисковые. 180 мм спереди. 160мм сзади</td>
                </tr>
                <tr class="alt">
                    <td>Колеса </td>
                    <td>26 дюймов, алюминиевые, 36 спиц</td>
                </tr>
                <tr>
                    <td>Шины</td>
                    <td>Schwalbe Fat Frank 26x2.35 дюймов с кевларовой защитой</td>
                </tr>
                <tr class="alt">
                    <td>Краска</td>
                    <td>Высококачественная порошковая краска, возможен выбор собственного цвета</td>
                </tr>
            </tbody>
        </table>
    </div>
    <br>
    <div class="datagrid">
        <table>
            <thead>
                <tr>
                    <th>Цена</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td></td>
                    <td>от 499 000 руб.</td>
                </tr>
                
            </tbody>
        </table>
    </div>
    <br>
    <div class="datagrid">
        <table>
            <thead>
                <tr>
                    <th>Гарантия</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Велосипед</td>
                    <td>1 год / 50 000 км</td>
                </tr>
                <tr class="alt">
                    <td>Батарея</td>
                    <td>1 год / 50 000 км</td>
                </tr>
            </tbody>
        </table>
    </div>
  </div>
  
  <!--   http://www.dgrin.com/showthread.php?t=250350 -->
  <div style="background-color: rgba(0,0,0,0.1); text-align:center;" id="media" class="section">
    <h1>Фото</h1>
    <iframe width="100%" height="720" frameborder="0" scrolling="no" src="http://kevins.smugmug.com/frame/slideshow?key=mDd2Jd&amp;navigation=1&amp;playButton=1" id="slideshow"></iframe>
  </div>
  
  <div style="text-align: center;" class="section">
    <h1>Добро пожаловать в путешествие длиною в жизнь.</h1>
    
  </div>

</div>


<script language="javascript" type="text/javascript">
  window.stickyHeight = 210;
 jQuery(function ($) { 
$(document).ready(function() {
  window.stickyHeight = $("#sticky").position().top;
});  
});
// Returns a function, that, as long as it continues to be invoked, will not
// be triggered. The function will be called after it stops being called for
// N milliseconds. If `immediate` is passed, trigger the function on the
// leading edge, instead of the trailing.
function debounce(func, wait, immediate) {
  var timeout;
  return function() {
      var context = this, args = arguments;
      var later = function() {
          timeout = null;
          if (!immediate) func.apply(context, args);
      };
      var callNow = immediate && !timeout;
      clearTimeout(timeout);
      timeout = setTimeout(later, wait);
      if (callNow) func.apply(context, args);
  };
};
  
$(window).scroll(
    // Debounce 20ms, so we don't jam the browser
  debounce(
    function(){
      var scroll = $(window).scrollTop();
      if (scroll > window.stickyHeight) {
        $("#sticky").addClass("sticky-fixed");
        $("#sticky-space").css("height", $("#sticky").css("height")); 
      } else {
        var top = window.stickyHeight - Math.max(0, scroll)
        $("#sticky").removeClass("sticky-fixed");
        $("#sticky-space").css("height", "0px"); 
      }
    }, 20)
);

</script>


</section>





<?php

get_footer();
