<?php while (have_posts()) : the_post(); ?>
  <article <?php post_class(); ?>>
      <h1 class="entry-title"><?php the_title(); ?></h1>
      <div class="featured-image-wrapper">
      <div class="featured-image" style="background-image: url('<?php
                                if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it.
                                  the_post_thumbnail_url('large');
                                }
                                ?>')"></div>
      </div>
    <div class="blog-post">

    <?php get_template_part('templates/parts/social-share'); ?>

    <?php the_content(); ?>

    <?php get_template_part('templates/parts/social-share'); ?>

    </div>

    <div class="sidebar">
      <div class="author-sidebar">
        <h5>Author</h5>
        <div class="author-image" style="background-image: url(<?php echo get_avatar_url(get_the_author_meta('ID'), 'medium'); ?>)"></div>
        <div class="author-name"><?php echo get_the_author(); ?></div>
      </div>
      <div class="content">
        <h3>We help people build simple software that solves hard problems.</h3>
        <a href="https://codecorps.org" class="button default">Help us out</a>
      </div>
    </div>
  </article>
<?php endwhile; ?>

