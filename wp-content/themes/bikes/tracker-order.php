<?php
/**
 * The template for displaying tracker page.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 * Template Name: Tracker Order
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package bikes
 */

get_header(); ?>




<section id="content" class="clearfix" style="width:100% !important;">
  












<style>
#color-picker-wrapper{display:none}fieldset{border:0px}legend{padding-top:40px;font-size:17px;padding-bottom:10px;border-bottom:1px solid;display:block;width:100%;text-transform:uppercase}input{margin-right:10px}label{display:block;padding-right:10px}.square{width:16px;height:16px;display:inline-block;-moz-border-radius:8px;-webkit-border-radius:8px;border-radius:8px;margin-right:3px;vertical-align:middle}#button-o{padding-left:10px} #button-o .submit{text-shadow:none;box-shadow:none; height:60px;width:200px;padding:5px 15px;background:#862633;border:0 none;cursor:pointer;-webkit-border-radius:0px;border-radius:0px;font-size:17px;color:white}@media (max-width: 767px){.desktop{display:none}}@media (min-width: 768px){.mobile{display:none}}@media (min-width: 768px){#scroller{left:50%;max-width:800px}}#updates{display:none !important}

</style>


<div class="row">
  <div class="span12">

    <!-- breadcrum -->
    <div class="breadcrumb clearfix" style="padding-left: 20px;">
      <span itemtype="http://data-vocabulary.org/Breadcrumb"><a href="/Store/" title="Магазин" itemprop="url"><span itemprop="Store">Магазин</span></a></span> 
      <span class="arrow-space">&gt;</span>
      <strong>Tracker</strong>
    </div>
  </div>
  
  <h1 style="padding-left: 13px;">Создай свой Tracker</h1>

  <form id="form" action="/order/" method="post">
  <input type="hidden" name="bikeName" value="Tracker" />
  <input type="hidden" name="totalSumm" value="499000"/>
    <!-- begin PREVIEW -->
    <div id="scroller" style="position: absolute; top: 349.5px;">
      <div id="spacer" class="desktop"></div>
      <div id="preview">
        <h3 style="text-align: center;">Предосмотр</h3>
          
          <style>
.overlayImage {
  position: relative;
}

.overlayImage .base {
 top: 0;
 left: 0;
 z-index : 0;
}

.overlayImage .overlay {
 position: absolute;
 top: 0;
 left: 0;
} 

.overlay, .overlay-rack {
  display: none;
}
</style>

<div class="overlayImage" id="oImage">
   <img id="base" class="base" src="/i/tracker-order/tracker-builder-base-no-frame.jpg">
   <img style="display: none;" class="overlay overlay-color-0" src="/i/tracker-order/tracker-builder-color-red.png">
   <img style="display: none;" class="overlay overlay-color-1" src="/i/tracker-order/tracker-builder-color-blue.png">
   <img style="display: inline;" class="overlay overlay-color-2" src="/i/tracker-order/tracker-builder-color-gray.png">
   <img style="display: none;" class="overlay overlay-color-3" src="/i/tracker-order/tracker-builder-color-green.png">
   <img class="overlay overlay-color-4 overlay-custom-color" src="/i/tracker-order/tracker-builder-color-custom-base.png" style="display: none;">
   <img style="display: none;" class="overlay overlay-tire" src="/i/tracker-order/tracker-builder-tires-black.png">

   <div style="display: none;" class="overlay-rack">
      <img style="display: none;" class="overlay overlay-color-0" src="/i/tracker-order/tracker-builder-rack-red.png">
      <img style="display: none;" class="overlay overlay-color-1" src="/i/tracker-order/tracker-builder-rack-blue.png">
      <img style="display: inline;" class="overlay overlay-color-2" src="/i/tracker-order/tracker-builder-rack-gray.png">
      <img style="display: none;" class="overlay overlay-color-3" src="/i/tracker-order/tracker-builder-rack-green.png">
      <img style="display: none;" class="overlay overlay-color-4 overlay-custom-color" src="/i/tracker-order/tracker-builder-rack-custom-base.png">
   </div>

  <img style="display: none;" class="overlay overlay-bags" src="/i/tracker-order/tracker-builder-bags.png">
  <img style="display: none;" class="overlay overlay-challengebag" src="/i/tracker-order/tracker-builder-challenge-bag.png">
</div>

       </div>

    <div style="text-align: center" id="button-o">
      <input id="button" class="submit" value="500 000 руб. &gt;&gt;" type="submit">
    </div>
      
    <div style="text-align: center; padding-top: 15px;">
    <!--  <a id="learn-more" style="text-align: center; visibility: visible;" href="#">Starting at $440 a month. Learn More</a>-->
    </div>
  </div>
  <!-- end PEVIEW -->

  <div id="grid" class="yui3-g-r">    
    <div class="yui3-u-1-2" id="builder">
      <fieldset>
        

        
        <legend>Цвет</legend>
        <p>Выберите один из четырех классических, или придумайте свой уникальный цвет..</p>

        
        
        

        <label>
          <input  checked="checked"  value="Красный" name="Color" title="Indian Red" data-color="872d38" type="radio">
          <div class="square" style="background: #872d38"></div> Красный
        </label>        
        
        
        

        <label>
          <input name="Color"  value="Синий" title="Excelsior Blue" data-color="265876" type="radio">
          <div class="square" style="background: #265876"></div> Синий
        </label>        
        
        
        

        <label>
          <input name="Color" value="Серый" title="Slate Gray" data-color="575d5e" type="radio">
          <div class="square" style="background: #575d5e"></div> Серый
        </label>        
        
        
        

        <label>
          <input name="Color" value="Зеленый" title="Racing Green" data-color="075548" type="radio">
          <div class="square" style="background: #075548"></div> Зеленый
        </label>        
        

        <label>
          <input name="Color" id="custom" value="Свой цвет +59 900" title="Custom Color" data-color="ff0000" data-productid="9285159235" data-price="59900" type="radio">
          <div class="square" id="custom-color-dot" style="background: #ff0000"></div> Свой цвет +59 900
          <br>

          <div style="display: none;" id="color-picker-wrapper">
            <input id="color-picker" style="display: none;" value="hsv(0, 100%, 100%)" type="text"><div class="sp-container sp-light sp-flat sp-input-disabled sp-buttons-disabled sp-palette-buttons-disabled sp-palette-disabled sp-initial-disabled"><div class="sp-palette-container"><div class="sp-palette sp-thumb sp-cf"></div><div class="sp-palette-button-container sp-cf"><button type="button" class="sp-palette-toggle">less</button></div></div><div class="sp-picker-container"><div class="sp-top sp-cf"><div class="sp-fill"></div><div class="sp-top-inner"><div style="background-color: rgb(255, 0, 0);" class="sp-color"><div class="sp-sat"><div class="sp-val"><div style="display: block; top: -5px; left: -5px;" class="sp-dragger"></div></div></div></div><div title="Clear Color Selection" style="display: none;" class="sp-clear sp-clear-display"></div><div style="" class="sp-hue"><div style="display: block; top: -3px;" class="sp-slider"></div></div></div><div style="" class="sp-alpha"><div class="sp-alpha-inner"><div style="display: block; left: -3px;" class="sp-alpha-handle"></div></div></div></div><div class="sp-input-container sp-cf"><input class="sp-input" spellcheck="false" type="text"></div><div class="sp-initial sp-thumb sp-cf"></div><div class="sp-button-container sp-cf"><a class="sp-cancel" href="#">cancel</a><button type="button" class="sp-choose">choose</button></div></div></div>
          </div>

        </label>
      </fieldset>

      <fieldset>
        <legend>Режимы движения</legend> 
        <p>Гоночный режим позволяет разгоняться до 58 (!!) км/ч</p>
        <label>
          <input name="Power"  value="Уличный" id="street" checked="checked" title="Street Mode - 20 MPH" data-price="0" type="radio">
          Уличный режим
        </label>
        <label>
          <input name="Power"  value="Гоночный  +14 900" id="race" data-productid="884247395" title="Race Mode - 36 MPH" data-price="14900" type="radio">
          Гоночный режим +14 900
        </label>
      </fieldset>

      <fieldset>
        <legend>Управление скоростью</legend>
        <p>Tracker в базовой комплектации имеет ручной управление скоростью. Для регулирования скорости в зависимости от скорости вращения педалями - выберите соответствующую опцию.</p>
        <label>
          <input name="Control"  value="Ручное" id="throttle" checked="checked" title="Thumb Throttle" data-price="0" type="radio">
          Ручное управление
        </label>
        <label>
          <input name="Control"  value="С помощью педаль  +12 900" id="pedal" title="Pedal Assist" data-productid="884243831" data-price="12900" type="radio">
          С помощью педаль +12 900
        </label>
      </fieldset>

      <fieldset>
        <legend>Цвет покрышек</legend>
        <p></p>
        <label>
          <input name="TireColor" value="Кремовый" id="tire-creme" checked="checked" title="Creme" data-price="0" type="radio">
          Кремовый
        </label>
        <label>
          <input name="TireColor"  value="Черный" id="tire-black" title="Black" data-price="0" type="radio">
          Черный
        </label>
      </fieldset>

      <fieldset>
        <legend>Багажник</legend>
        <p></p>
        <label>
          <input name="Rack"  value="Без багажника" id="norack" checked="checked" title="No Rack" data-price="0" type="radio">
          Без багажника
        </label>
        <label>
          <input class="color-match" name="Rack" value="Багажник без сумок +28 900" id="rack" title="Rack With No Saddlebags" data-productid="884244491" data-price="28900" type="radio">
          Багажник без сумок +28 900
        </label>
        <label>
          <input name="Rack" id="rackandbags" value="Багажник с двумя боковыми сумками +79 900" title="Rack Plus Two Saddlebags" data-productid="884246415" data-price="79900" type="radio">
          Багажник с двумя боковыми сумками +79 900
        </label>
      </fieldset>

      <fieldset>
        <legend>Аксессуары</legend>
       <!-- <p>Additional options to enhance your ride.</p>-->
        <label>
          <input name="Taillight" value="Да  +7 500" id="light" data-productid="901169015" data-price="7500" type="checkbox">
          Задный фонарь +7 500
        </label>

        <label>
          <input name="BrooksChallengeBag" value="Да +9 900" id="challengebag" data-productid="901140035" data-price="9900" type="checkbox">
          Бардачок +9 900
        </label>
        
        <label>
          <input name="SpurcycleBell" value="Да  +4 900" data-productid="1872084547" data-price="4900" type="checkbox">
          Звонок +4 900
        </label>

        <!--<label>
          <input name="ABUS Bordo Ecolution 6000 Lock" data-productid="1872476227" data-price="12900" type="checkbox">
          ABUS Bordo Ecolution 6000 Lock +$129
        </label>

        <label>
          <input name="Toolbox" data-productid="1872172611" data-price="14900" type="checkbox">
          Toolbox +$149
        </label>

        <label>
          <input name="Cafe Helmet" id="helmet-checkmark" data-price="7900" type="checkbox">
          Helmet +$79
        </label>
        
        <div id="helmet-sizing" style="padding-left: 40px; display: none;">
          <p>Select a helmet size</p>
          <label>
            <input name="Helmet Size" checked="checked" title="Small" data-productid="637510073900" type="radio">
            Small
          </label>
          <label>
            <input name="Helmet Size" title="Medium" data-productid="6375100931" type="radio">
            Medium
          </label>
          <label>
            <input name="Helmet Size" title="Large" data-productid="637510105900" type="radio">
            Large
          </label>
          <label>
            <input name="Helmet Size" title="Extra-Large" data-productid="" type="radio">
            Extra-Large
          </label>
        </div>-->
      </fieldset>
    </div>
    <div class="yui3-u-1-2">
      <!-- EMPTY -->
    </div>
  </div>
</form>
</div>  

<script src="/i/tracker-order/spectrum.js" type="text/javascript"></script>

<script type="text/javascript">


// Returns a function, that, as long as it continues to be invoked, will not
// be triggered. The function will be called after it stops being called for
// N milliseconds. If `immediate` is passed, trigger the function on the
// leading edge, instead of the trailing.
function debounce(func, wait, immediate) {
    var timeout;
    return function() {
        var context = this,
            args = arguments;
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

function updatePreviewPosition() {
    var scroll = $(window).scrollTop();
    if ($(window).width() >= 768) {
        // If scroller offset
        if (scroll + $("#scroller").height() > $("#footer").offset().top) { // Bottom of the page
            var height = $("#footer").offset().top - $("#scroller").height();
            $("#scroller").css("top", height + "px");
            $("#scroller").css("position", "absolute");
        } else if (scroll > $("#form").offset().top) { // Middle of the page
            $("#scroller").css("position", "fixed");
            $("#scroller").css("top", "0px");
        } else { // Top of the page
            $("#scroller").css("position", "absolute");
            $("#scroller").css("top", $("#form").offset().top + "px");
        }
    } else {
        $("#scroller").css("position", "static");
        $("#scroller").css("top", "0px");
    }
}

$(window).scroll(updatePreviewPosition);
$(window).resize(updatePreviewPosition);

/********** COLOR PICKER *************/
$("#color-picker").spectrum({
    flat: true,
    showButtons: false
});

$("#color-picker").on('move.spectrum', function(e, tinycolor) {
    $("#custom-color-dot").css("background", tinycolor.toHexString());
    $("#custom")[0].dataset.color = tinycolor.toHexString().slice(1,7);
    console.log(tinycolor.toHsv());

    var hsvValue = tinycolor.toHsv();

    
    // $(".overlay-custom-color").css("-webkit-filter", "hue-rotate(" + hsvValue["h"] + "deg) saturate(" + hsvValue["s"] * 1.8 + ") brightness(" + hsvValue["v"] * 2 +")");

    // L = -4s + 6
    var rise = 4.5;
    var run = 2;

    var newL = (run - rise) * hsvValue["s"] + rise;
    var cssFilter = "hue-rotate(" + hsvValue["h"] + "deg) saturate(" + hsvValue["s"] * 1 + ") brightness(" + hsvValue["v"] * newL +")";
    $(".overlay-custom-color").css("-webkit-filter", cssFilter);
    $(".overlay-custom-color").css("filter", cssFilter);
    
    console.log($(".overlay-custom-color").css("-webkit-filter"));
    

    updateImages();
});

$('input[type=radio][name=Color]').change(function() {
    var color = $('input:radio[name="Color"]:checked')[0].dataset.color;
    var id = $('input:radio[name="Color"]:checked')[0].id;

    if (id == "custom") {
        $("#color-picker-wrapper").show();
    } else {
        $("#color-picker-wrapper").hide();
    }

});
/********** END COLOR PICKER *************/

/**
Update all images to reflect the current color and build

Called on page load, when rack selection goes on/off, custom color change, color radio button change.
*/
function updateImages() {
    //match colors:
    var color = $('input:radio[name="Color"]:checked')[0].dataset.color;

    $(".svg-color-base").css("fill", color);
    $(".svg-color-light").css("fill", color);
    $(".svg-color-lightest").css("fill", color);
    $(".svg-color-dark").css("fill", color);

    if ($('input:radio[name="Color"]:checked')[0].id == "custom-color-radio") {
      $(".overlay-custom-color").show();
    } else { // pre-defined color
      $(".overlay-custom-color").hide();

      var radioButtons = $("input:radio[name='Color']");
      var selectedIndex = radioButtons.index(radioButtons.filter(':checked'));

      // Hide colors above selected index
      for (i = 0; i < radioButtons.length; i++) {
        if (selectedIndex == i) {
          $(".overlay-color-" + i).show();        
        } else {
          $(".overlay-color-" + i).hide();        
        }
      }

      if (radioButtons.length - 1 == selectedIndex) {
        console.log("custom color");
      }
      // if (selectedIndex == 1) {
      //   $(".overlay-color-1").show();
      //   $(".overlay-color-2").hide();
      // } else if (selectedIndex == 2) {
      //   $(".overlay-color-1").hide();
      //   $(".overlay-color-2").show();
      // } else { // base
      //   $(".overlay-color-1").hide();
      //   $(".overlay-color-2").hide()
      // }
    }

    $('input:radio[name="TireColor"]:checked')[0].id == "tire-black" ? $('.overlay-tire').show() : $('.overlay-tire').hide();
    $('input:radio[name="Rack"]:checked')[0].id == "norack" ? $(".overlay-rack").hide() : $(".overlay-rack").show();
    $('input:radio[name="Rack"]:checked')[0].id == "rackandbags" ? $('.overlay-bags').show() : $('.overlay-bags').hide();

    $('#challengebag')[0].checked ? $(".overlay-challengebag").show() : $(".overlay-challengebag").hide();
    
    // how much? $$$
    var $total = 499000;
    $('input:radio:checked').each(function() {
      if (this.dataset.price != undefined) {
        var number = Number(this.dataset.price);
        $total += number;
      }
    });

    $('input:checkbox:checked').each(function() {
      if (this.dataset.price != undefined) {
        var number = Number(this.dataset.price);
        $total += number;
      }
    });

    $('#button').val("" + $total + " руб. >>");
    $('input[name=totalSumm').val($total);
    //updateAffirmAsLowAs($total * 100);
}

// Change the image when a radio input changes
$('input[type=radio]').change(updateImages);
$('input[type=checkbox]').change(updateImages);

$('#helmet-checkmark').change(updateHelmetSizingVisibility);

function updateHelmetSizingVisibility() {
  this.checked ? $('#helmet-sizing').show() : $('#helmet-sizing').hide();

  updatePreviewPosition();
}

$("#fodrm").submit(function(event) {

    event.preventDefault(); // Prevents form from using HTML-specified action

    var $responses = 0;
    var $total = 0;

    // ----- first request ------

    var baseInfo = {};
    $('input:checked[name!="Helmet Size"]').each(function() {
        var name = "properties[" + this.name + "]";

        var title;
        if (this.id == "helmet-checkmark") {
          title = $('input:checked[name="Helmet Size"]')[0].title;
        } else if (this.id == "custom") { // custom color, include HEX
          title = this.title + " #" + this.dataset.color;
        } else {
          title = this.title;
        }

        if (this.dataset.price != undefined && this.dataset.price != "0") {
          title += " +$" + this.dataset.price;
        }

        baseInfo[name] = title;
    });

// make a unique id based on time
    var d = new Date();
    var $uniqueID = "Tracker" + d.getTime();

    baseInfo["properties[builder_id]"] = $uniqueID;
    baseInfo["properties[builder_rgb_color]"] = $('input:checked[name="Color"]')[0].dataset.color;
// $(".overlay-custom-color").css("-webkit-filter", cssFilter);
    
    if ($("input:checked:radio[name='Color']")[0].id == "custom") {
        baseInfo["properties[builder_webkit_config]"] = $(".overlay-custom-color").css("-webkit-filter");
    }

    baseInfo["properties[builder_url]"] = window.location.href;
    baseInfo["properties[builder_key]"] = "tracker";

    var radioButtons = $("input:radio[name='Color']");
    baseInfo["properties[builder_color_number]"] = radioButtons.index(radioButtons.filter(':checked'));
    baseInfo["id"] = 9360616387; // id is the product variant ID
    baseInfo["quantity"] = 1;

    console.log(baseInfo);

    $.ajax({
        type: "POST",
        url: '/cart/add.js',
        data: baseInfo,
        async: false
    });

    // ----- end first request ------

    $('input:checked').each(function() {


        // if undefined, it's an item that's included in the base price
        if (this.dataset.productid != undefined && (this.name == "Helmet Size" && $('#helmet-checkmark')[0].checked || this.name != "Helmet Size")) {
            $total++;
            
            var builderInfo = {};
            
            // Use a unique ID so the cart knows to group all the SKU's as one bike
            builderInfo["properties[builder_id]"] = $uniqueID;
            builderInfo["id"] = this.dataset.productid; // id is the product variant ID
            builderInfo["quantity"] = 1;

            // Stupid shopify only allows us to add products one at a time, so make n requests,
            // and wait until all come back, then redirect to the cart
            /*
            $.post('/cart/add.js', builderInfo, 
               function(data, textStatus) {
                 $responses++;
            }).error(function() { 
              $responses++;
              if ($responses == $total) {
                 $(location).attr('href','/cart'); // redirect to cart after all items have been added
              }
            });*/

            // Cannot post async because that's too fast for shopify's very very slow servers
            $.ajax({
                type: "POST",
                url: '/cart/add.js',
                data: builderInfo,
                async: false
            });
        }       
    });

   $(location).attr('href', '/cart'); // redirect to cart after all items have been added

    return false; // avoid to execute the actual submit of the form.
});

$(document).ready(function() {
    updateImages();
    updatePreviewPosition();
    $("#scroller").show();
    updateHelmetSizingVisibility();

    // Pre-cache the builder images 
        // $('#preview img').map(function(){ 
        //     $('<img />').attr('src',this.src).appendTo('body').css('display','none');
        //   });
        // }
    //});
});
</script>



</section>





<?php

get_footer();
