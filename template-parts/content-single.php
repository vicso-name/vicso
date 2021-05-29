<div class="post-header">
    <h1><?php the_title() ?></h1>
    <div class="post-header__meta">
        <div id="add-to-favorite" data-post-id="<?php the_ID() ?>" data-post-title="<?php the_title(); ?>" data-post-url="<?php the_permalink() ?>" data-post-exception="<?php the_excerpt_custom(140); ?>" title="Add to favorite"  class="add-to-favorite">
            <i class="far fa-heart"></i>
        </div>
        <div class="social-share">
            <i class="fas fa-share-alt"></i>
            <ul >
                <li><i class="fab fa-facebook-square"></i></li>
                <li><i class="fab fa-twitter-square"></i></li>
            </ul>
        </div>
    </div>
</div>

<div class="post-content">
    <?php the_content() ?>
</div>
