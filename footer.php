<?php
/**
 *
 * @package Ashare
 */
?>

<footer class="footer">
    <div class="footer__content container">
        <?php get_template_part('template-parts/layout/social', 'links'); ?>
    </div>
        <div class="footer__copy container">
        <?php echo esc_html(date("Y"));  esc_html_e(' all rights reserved', 'ashare'); ?> &copy;
        </div>
</footer>

<div id="scroll-up">
    <div class="arrow"></div>
</div>

<?php wp_footer(); ?>

</body>
</html>