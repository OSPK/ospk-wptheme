<?php
/**
 * Default Footer
 *
 * @package WordPress
 * @subpackage BootstrapWP
 */
?>
</div><!--./contentwrapper-->
        <footer>
            <div class="footer row">
                <div class="col-md-12">
                    <?php
                    if (function_exists('dynamic_sidebar')) {
                        dynamic_sidebar("footer-content");
                    } ?>
                </div><!--col 12-->
            </div><!-- /footer row -->
        </footer>
        <?php wp_footer(); ?>
    </body>
</html>