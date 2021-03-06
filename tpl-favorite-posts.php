<?php

    /**
    * Template Name: Favorite Posts
    * @package vicso
    */

    get_header();

?>

<div class="main_container">
   
    <div class="container">
		<div class="page-header">
            <h1 class="page-header__title">This is a featured articles page. The materials that you have marked as liked are displayed here.</h1>
            <p class="page-header__content">Pay attention. You do not need to be a registered user to add your favorite article to your favorites list. It is enough to click the "Add to favorites" button on the article you liked, and it will immediately appear here in your wishlist. This is a cool feature. And if you want you can find out how to do the same for your personal website or for your client's project.</p>
        </div>
	</div>

    <div class="container">
        <h2 class="favorite-posts__title"><span>My Favorite Posts</span></h2>
    </div>


<!-- Fav Content -->

<div class="container-guts favorite-page">
    <div id="no-favorite"></div>
    <div id="favorite-list" class="favorite-content-grid"></div>
</div>
    
</div>

<?php
get_footer();