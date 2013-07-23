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
                        <ul class="large-block-grid-5 small-block-grid-1">
                            <?php dynamic_sidebar("Footer"); ?>
                            <?php // narga_footer_navigation(); ?>
                        </ul>
                    </div>
                </div>
                <div class="row">
                    <div class="large-12 text-center columns" style="padding-bottom: 1.2em; ">
                        <a href="<?php bloginfo('url') ?>" style="opacity:.7;" title="AdsYolo" rel="company"><img style="max-width: 100px;" src="<?php bloginfo('url')?>/wp-content/uploads/2013/06/adsyolo-logo-ay.png" alt="AdsYolo Short Logo"></a>
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
