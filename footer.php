<?php
/**
 * Default Footer
 *
 * @package WordPress
 * @subpackage BootstrapWP
 */
?>
        <footer>
            <div class="footer row">
                <div class="col-md-12">
                    <?php
                    if (function_exists('dynamic_sidebar')) {
                        dynamic_sidebar("footer-content");
                    } ?>
                </div><!--col 12-->
                <p class="pull-right">&copy; <?php bloginfo('name'); ?> <?php the_time('Y') ?></p>
            </div><!-- /footer row -->
        </footer>
        <?php wp_footer(); ?>
    </body>
</html>