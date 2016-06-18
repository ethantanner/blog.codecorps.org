<div class="post">
   <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
   <a href="<?php the_permalink(); ?>">
      <div class="featured-image" style="background-image: url('<?php
         if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it.
           the_post_thumbnail_url('large');
         }
         ?>')"></div>
   </a>
   <div class="author">
      <div class="author-image" style="background-image: url(<?php echo get_avatar_url(get_the_author_meta('ID'), 'medium'); ?>)"></div>
      <div class="author-name"><?php echo get_the_author(); ?></div>
   </div>
   <p class="excerpt"><?php echo get_the_excerpt(); ?></p>
</div>
