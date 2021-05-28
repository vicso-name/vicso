<?php

    /**
    * Template Name: Contact
    * @package vicso
    */

    get_header();

?>

<div class="main_container">
    <div class="contact-page__content">
        <div class="contact-data">
            <ul class="contact-data__list">
                <li><a href="tel:+380955956457">+38 (095) 595 64 57</a></li>
                <li><a href="mailto:start@vicsothemes.com">start@vicsothemes.com</a></li>
            </ul>
            <ul class="social-contact-data__list">
                <li><a href="https://wa.me/+380955956457"><img src="<?php echo get_template_directory_uri() ?>/images/whatsapp.svg" alt="contact-icon"></a></li>
                <li><a href="https://m.me/viktor.sokoliuk"><img src="<?php echo get_template_directory_uri() ?>/images/facebook.svg" alt="contact-icon"></a></li>
                <li><a href="viber://chat/?number=%2B380955956457"><img src="<?php echo get_template_directory_uri() ?>/images/viber.svg" alt="contact-icon"></a></li>
                <li><a href="https://t.me/@victor_devcore"><img src="<?php echo get_template_directory_uri() ?>/images/telegram.svg" alt="contact-icon"></a></li>
            </ul>
        </div>
        <div class="contact-form">
            <form action="">
            
            </form>
        </div>
    </div>
</div>


<?php
get_footer();