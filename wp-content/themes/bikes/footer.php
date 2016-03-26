<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package bikes
 */

?>

	</div><!-- #content -->

	<?/*<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="site-info">
			<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'bikes' ) ); ?>"><?php printf( esc_html__( 'Proudly powered by %s', 'bikes' ), 'WordPress' ); ?></a>
			<span class="sep"> | </span>
			<?php printf( esc_html__( 'Theme: %1$s by %2$s.', 'bikes' ), 'bikes', '<a href="http://underscores.me/" rel="designer">Underscores.me</a>' ); ?>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->*/?>
    
    
    
    <div class="footer-wrapper" id="footer">
  <footer style="margin-top: 60px;">
    <div class="row">

      <div class="p10"></div>
      <div style="margin-left:10px;" class="yui3-g-r row">


        <div class="yui3-u-1-2">
          <!--<h3>Раз</h3>-->
          
            
           <?renderBottomMenu();
            ?>
        </div>
        <div class="yui3-u-1-2">
          

          

          <div class="span4">          
            <div class="clearfix">
              
              <h4>Подписывайтесь на нас</h4>
              <span class="social-links">
<a title="Follow us on Facebook" href="https://www.facebook.com/vintageelectricbikes"><span class="shopify-social-icon-facebook-circle"></span></a>
<a title="Follow us on Twitter" href="https://twitter.com/VEBikes"><span class="shopify-social-icon-twitter-circle"></span></a>
<a title="Follow us on Pinterest" href="http://www.pinterest.com/sugisugisugi/vintage-electric/"><span class="shopify-social-icon-pinterest-circle"></span></a>

<a title="Follow us on Instagram" href="http://instagram.com/vintageelectric"><span class="shopify-social-icon-instagram-circle"></span></a>




</span>
              
            </div>
            <br>
            <br>
           <!-- <div id="updates">
            <h4>Sign Up for Updates</h4>
              <form method="POST" action="https://www.salesforce.com/servlet/servlet.WebToLead?encoding=UTF-8">
                <input type="hidden" value="00D61000000aCRA" name="oid">
                <div style="padding-bottom: 20px" class="yui3-g">
                  <div class="yui3-u-1-2">
                    <input type="text" style="margin-top: 2px;" placeholder="Email Address" size="20" name="email" maxlength="80" id="email">
                  </div>
                  <div class="yui3-u-1-2">
                    <input type="submit" style="display: inline-block; margin-left: 30px;" class="btn" value="Sign Up" name="submit">
                  </div>
                </div>
              </form> 
              </div>-->
          </div>

          <style>
          .customer-links {
            list-style-type: none;
          }
          </style>
          
  
    <!--<li class="customer-links">
      <a id="customer_login_link" href="/account/login">Log in</a>
      
      <span class="or">or</span>
      <a id="customer_register_link" href="/account/register">Create an account</a>
      
    </li>-->
  

          
        </div>
      </div>

      <!-- Begin copyright -->
      <div class="span12 tc copyright">
        <!-- All website code and content is copyright of Kevin Harrington until payment is recieved from Vintage Electric -->
        <p>2016 Винтажные электробайки </p>
          
      </div>
      <!-- End copyright -->

    </div>       
  </footer>
</div>
    
    
    
    
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
