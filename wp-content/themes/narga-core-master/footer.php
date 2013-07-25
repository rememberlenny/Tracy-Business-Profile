<?php
/**
* The template for displaying the footer.
*
* Contains footer content and the closing of the
* #main and #page div elements.
*
* @package WordPress
* @subpackage NARGA Framework
* @since NARGA Framework 1.0
*/
?>

<!-- End row for main content area -->
            </section>      
        </div>		

        <!-- Footer area -->
        <footer class="large-12" role="contentinfo">
            <div class="zigzap" style="height:26px; background-repeat: repeat-x; background:url('<?php bloginfo('url')?>/wp-content/uploads/2013/07/zigzap.png');"></div>
            <div class="background-foot">
                <div class="row">
                    <div class="large-10 large-centered pt1p3em pb1em text-center columns" style="">
                        <?php get_template_part('module-email-contents'); ?>
                    </div>
                </div>
            </div>
            <div class="background-foot-dk pt1em ">
              <div class="row">
                <div class="large-10 large-centered text-center columns" style="">
                  <div class="large-4 pt1em column short-desc">
                    <h4 class="white subheader">
                      AdsYolo
                    </h4>
                    <p class="fs07em greyd fw100">
                      AdsYolo is a New York and Beijing-based mobile and full-service marketing agency, focused on influencing consumers in China via its leading in-app advertising network.
                    </p>
                  </div>
                  <div class="large-8 column content-info">
                    <div class="row">
                      <div class="large-4 pt1em">
                        <h4 class="third-color">New York</h4>
                        <p class="address third-color" ref="address">
                          175 Varick Street, 3rd FL.<br>
                          New York, NY 10014<br><br>
                        </p>
                        <p class="phone-number fs14em third-color">(888) 806-9656</p>
                      </div>
                      <div class="large-4 pt1em">
                        <h4 class="third-color">China</h4>
                        <p class="address third-color" ref="address">
                          Haidian District Karma Cubic Court Street Building 2-312 <br>
                          Beijing, China
                        </p>
                        <p class="phone-number fs14em third-color">+400-6088-215</p>
                      </div>
                      <div class="large-4 pt1em">
                        <h4 class="third-color">London</h4>
                        <p class="address third-color" ref="address">
                          49 Southwark ST <br> 
                          London, SE1 1RU <br>
                          United Kingdom
                        </p>
                        <p class="phone-number fs14em third-color">+44 020-8144-3164</p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div style="background:#222">
                <div class="row pt1em">
                    <div class="large-12 fw100 text-center columns" style="">
                        <ul class="inline-list" style="margin-bottom:.2em;  opacity: .4">
                            <li>
                                <a href="<?php bloginfo('url') ?>" title="AdsYolo" rel="company"><img style="max-width: 40px;" class='d-inline-c' src="<?php bloginfo('url')?>/wp-content/uploads/2013/06/adsyolo-logo-ay.png" alt="AdsYolo Short Logo"></a>
                            </li>
                            <?php dynamic_sidebar("Footer"); ?>
                        </ul>
                        <ul class="inline-list" style="  opacity: .3">
                          <li class="white fs08em">© 2013 AdsYolo, Inc. All rights reserved.</li>
                        </ul>
                    </div>
                </div>
            </div>
        </footer>
        <!-- Check for Zepto support, load jQuery if necessary -->
        <script>
            document.write('<script src=<?php echo get_template_directory_uri(); ?>/javascripts/vendor/'
                + ('__proto__' in {} ? 'zepto' : 'jquery')
                + '.js><\/script>');
            </script>
            <?php wp_footer(); ?>
        </body>
    </html>
