<?php

    /**
    * Template Name: Contact
    * @package vicso
    */

    get_header();

?>

<div class="main_container">
    
    <div class="contact-page__content-wrapp"> 
        <div class="contact-page__content">
            
            <div class="contact-data">

                <div class="contact-data__list-wrapper">
                    <h4>Get the price and proposal to your Email!</h4>
                    <ul class="contact-data__list">
                        <li><a href="tel:+380955956457">+38(095)595-64-57</a></li>
                        <li><a href="mailto:start@vicsothemes.com">start@vicsothemes.com</a></li>
                    </ul>
                </div>
                
                <ul class="social-contact-data__list">
                    <li><a href="https://wa.me/+380955956457"><img src="<?php echo get_template_directory_uri() ?>/images/whatsapp.svg" alt="contact-icon"></a></li>
                    <li><a href="https://m.me/viktor.sokoliuk"><img src="<?php echo get_template_directory_uri() ?>/images/facebook.svg" alt="contact-icon"></a></li>
                    <li><a href="viber://chat/?number=%2B380955956457"><img src="<?php echo get_template_directory_uri() ?>/images/viber.svg" alt="contact-icon"></a></li>
                    <li><a href="https://t.me/@victor_devcore"><img src="<?php echo get_template_directory_uri() ?>/images/telegram.svg" alt="contact-icon"></a></li>
                </ul>

            </div>

            <div class="contact-form__wrapp">
                <h1>Let's contact</h1>
                <form id="contact-form" class="contact-form" action="">

                    <div class="contact-form_row">
                        <div class="input-wrapp">
                            <input type="text" name="name" id="" require placeholder="Name">
                        </div>
                        <div class="input-wrapp">
                            <input type="tel" name="phone" id="" require placeholder="Contact phone number">
                        </div>
                    </div>

                    <div class="contact-form_row">
                        <div class="input-wrapp">
                            <input type="email" name="mail" id="" require placeholder="E-mail">
                        </div>
                        <div class="input-wrapp">
                            <input type="text" name="subject" id="" placeholder="Message subject">
                        </div>
                    </div>

                    <div class="input-wrapp">
                        <textarea name="message" id="message"></textarea>
                    </div>

                    <button class="contact-form-btn" type="button">send message</button>

                    
                </form>

            </div>
        </div>
    </div>
    
</div>


<?php
get_footer();