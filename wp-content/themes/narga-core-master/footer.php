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
                <div class="large-11 large-centered text-center columns" style="">
                  <div class="large-4 pt1em column short-desc">
                    <h4 class="white subheader">
                      AdsYolo
                    </h4>
                    <p class="fs07em greyd fw100" style="color: #ddd">
                      AdsYolo is a New York and Beijing-based mobile and full-service marketing agency, focused on influencing consumers in China via its leading in-app advertising network.
                    </p>
                  </div>
                  <div class="large-8 column content-info pb1em">
                    <div class="row">
                      <div class="large-4 pt1em column pb1em bl1px" style="">
                        <h5 class="greyd white fw100">New York</h5>
                        <p class="address white fs07em" ref="address" style="opacity:.8">
                          175 Varick Street, 3rd FL.<br>
                          New York, NY 10014<br>
                          United States
                        </p>
                        <p class="phone-number fs07em fs14em white" style="opacity:.8">(888) 806-9656</p>
                      </div>
                      <div class="large-4 pt1em column pb1em bl1px" style="">
                        <h5 class="greyd white fw100">China</h5>
                        <p class="address white fs07em" ref="address" style="opacity:.8">
                          Haidian District Karma Cubic Court Street Building 2-312 <br>
                          Beijing, China
                        </p>
                        <p class="phone-number fs07em fs14em white" style="opacity:.8">+400-6088-215</p>
                      </div>
                      <div class="large-4 pt1em column pb1em bl1px" style="">
                        <h5 class="greyd white fw100">London</h5>
                        <p class="address white fs07em" ref="address" style="opacity:.8">
                          49 Southwark ST <br> 
                          London, SE1 1RU <br>
                          United Kingdom
                        </p>
                        <p class="phone-number fs07em fs14em white" style="opacity:.8">+44 020-8144-3164</p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div style="background:#222">
                <div class="row pt1em">
                    <div class="large-12 fw100 text-center columns" style="">
                        <ul class="d-inline fl mb0em">
                          <li>
                            <ul class="inline-list" style="margin-bottom:.2em;  opacity: .4">
                                <li>
                                    <a href="<?php bloginfo('url') ?>" title="AdsYolo" rel="company"><img style="max-width: 46px;" class='d-inline-f' src="<?php bloginfo('url')?>/wp-content/uploads/2013/06/adsyolo-logo-ay.png" alt="AdsYolo Short Logo"></a>
                                </li>
                                <?php dynamic_sidebar("Footer"); ?>
                            </ul>
                          </li>
                          <li>
                            <ul class="inline-list" style="  opacity: .3">
                              <li class="white fs08em">© 2013 AdsYolo, Inc. All rights reserved.</li>
                            </ul>
                          </li>
                        </ul>
                        <ul class="inline-list fr" style="margin-top: 10px;">
                          <li style="display: block;
                            height: 50px;
                            width: 50px;
                            background: url('<?php bloginfo('template_url')?>/images/social.png') no-repeat center 0;
                            }"></li>
                            <li style="display: block;
                            height: 50px;
                            width: 50px;
                            background: url('<?php bloginfo('template_url')?>/images/social.png') no-repeat center 0; background-position: center -200px;

                            }"></li>
                            <li style="display: block;
                            height: 50px;
                            width: 50px;
                            background: url('<?php bloginfo('template_url')?>/images/social.png') no-repeat center 0; background-position: center -400px;

                            }"></li>
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
