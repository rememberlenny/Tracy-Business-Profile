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
        <footer class="row" role="contentinfo">
            <div id="footer-widgets">
                <?php dynamic_sidebar("Footer"); ?>
            </div>
                <hr />
                <div class="row">
                    <div class="large-6 columns">
                        <a href="http://www.atriangle.com" title="a triangle corporation" rel="designer">Built by &#9650; Triangle</a>
                    </div>
                    <div class="large-6 columns">
                        <?php narga_footer_navigation(); ?>
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
