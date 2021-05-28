<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package vicso
 */

?>

    </main>

    <footer class="footer">
        <div class="main_container">
            <div class="footer-content">
                <ul>
                    <?php if(have_rows('social', 'option')): the_row();
                        $whatsapp    = get_sub_field('whatsapp');
                        $telegram    = get_sub_field('telegram');
                        $linkedin    = get_sub_field('linkedin');
                    ?>
                    <li><a href="https://wa.me/<?php echo $whatsapp ?>"><i class="fab fa-whatsapp"></i></a></li>
                    <li><a href="https://t.me/<?php echo $telegram ?>"><i class="fab fa-telegram-plane"></i></a></li>
                    <li><a href="<?php echo $linkedin ?>"><i class="fab fa-linkedin-in"></i></a></li>
                    <?php endif; ?>
                </ul>
                <div class="copyright">
                    Copyright <?php echo date("Y"); ?>  @VICSO
                </div>
            </div>
        </div>
    
    </footer>


</div>

<div id="success-sent" class="success-sent">
        <div id="close-form-success" ><i class="far fa-times-circle"></i></div>
        <div class="success-sent__guts">
            <div class="success-sent__guts-content">
                <h2>Thanks for messaging!</h2>
                <p>Your message was successfully sent.</p>
            </div>
        </div>
    </div>
    <div class="modal-overlay" id="modal-overlay">

<?php wp_footer(); ?>
<script src="https://kit.fontawesome.com/6997fd8dc6.js" crossorigin="anonymous"></script>
    
   

</body>
</html>
