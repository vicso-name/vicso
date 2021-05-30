<div class="post-header">
    <h1><?php the_title() ?></h1>
    <div class="post-header__meta">

        <div id="add-to-favorite" data-post-id="<?php the_ID() ?>" data-post-title="<?php the_title(); ?>" data-post-url="<?php the_permalink() ?>" data-post-exception="<?php the_excerpt_custom(140); ?>" title="Add to favorite"  class="add-to-favorite">
            <i data-post-id="<?php the_ID() ?>" id="single-heart" class="single-heart far fa-heart"></i>
            <div class="duplicate-alert">
                <p>You have already added it</p>
            </div>
        </div>

        <div class="social-share">
            <i class="fas fa-share-alt"></i>
            <ul >
                <?php $postUrl = 'http' . ( isset( $_SERVER['HTTPS'] ) ? 's' : '' ) . '://' . "{$_SERVER['HTTP_HOST']}{$_SERVER['REQUEST_URI']}"; ?>
                <li><a target="_blank" class="share-button share-facebook" href="https://www.facebook.com/sharer/sharer.php?u=<?php echo $postUrl; ?>" title="Share on Facebook"><i class="fab fa-facebook-square"></i></a></li>
                <li><a target="_blank" class="share-button share-twitter" href="https://twitter.com/intent/tweet?url=<?php echo $postUrl; ?>&text=<?php echo the_title(); ?>&via=<?php the_author_meta( 'twitter' ); ?>" title="Tweet this"><i class="fab fa-twitter-square"></i></a></li>
            </ul>
        </div>
    </div>
</div>

<div class="post-content">
    <?php the_content() ?>
</div>
