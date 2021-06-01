<?php

    /**
    * Template Name: About
    * @package vicso
    */

    get_header();

?>


<div class="main_container">

    <div class="about-page__grid">
        <div class="about-page__grid-item">
            <div class="about-page__images">
            
                <div class="about-page__images-wrapper">
                    <img src="<?php the_field('developer_image'); ?>" alt="about-image">
                </div>
                
            </div>
        </div>
        <div class="about-page__grid-item">
            <div class="about-page__content">
                <?php the_field('about_content'); ?>
            </div>
        </div>
    </div>

</div>


<?php
get_footer();