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

            <div class="contact-data__wrapp">
                <div class="contact-data">
                    
                    <div class="contact-data__list-wrapper">
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
            </div>
            
            <div class="contact-form__wrapp">
                <h1>Let's contact</h1>

                <form id="contact-form" class="contact-form">

                    <div class="contact-form_row">
                        <div class="input-wrapp">
                            <input type="text" name="name" id="username" require placeholder="Name">
                        </div>
                        <div class="input-wrapp">
                            <input type="tel" name="phone" id="userphone" require placeholder="Contact phone number">
                        </div>
                    </div>

                    <div class="contact-form_row">
                        <div class="input-wrapp">
                            <input type="email" name="mail" id="usermail" require placeholder="E-mail">
                        </div>
                        <div class="input-wrapp">
                            <input type="text" name="subject" id="usermessage" placeholder="Message subject">
                        </div>
                    </div>

                    <div class="input-wrapp">
                        <textarea placeholder="Enter your message here..." class="form-message" name="message" id="message"></textarea>
                    </div>

                    <button id="contact-form-btn" class="contact-form-btn" type="button">Send Message</button>
 
                </form>

            </div>

        </div>
    </div>
    
</div>


<?php
get_footer();