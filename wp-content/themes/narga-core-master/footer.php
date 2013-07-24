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
                <div class="row pt2em">
                    <div class="large-10 large-centered column">
                    </div>
                </div>
                <div class="row">
                    <div class="large-12 text-center columns" style="">
                    </div>
                </div>
            </div>
            <div class="background-foot-dk">
                <div class="row pt2em">
                    <div class="large-10 large-centered column">
                    </div>
                </div>
                <div class="row">
                    <div class="large-12 text-center columns" style="">
                        <!-- CTA bar -->
                        <?php get_template_part( 'module-contact-bar'); ?>
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
