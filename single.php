<?php get_header();?>

<?php while ( have_posts() ) : the_post(); ?>
  <div class="container mt-5">
    <div class="site-main">
      <div class="row">
        <div class="col-lg-8">
          <header class="entry-header">
            <?php the_title('<h1 class="mb-4">', '</h1>'); ?>
            <p class="entry-meta mb-3">
              <?php lean_entry_meta(); ?>
            </p>
          </header>
          <?php
          // 显示页面内容
          get_template_part( 'template-parts/formats/format', get_post_format() ); ?>

          <?php // 显示标签
          $posttags = get_the_tags();
          if ( $posttags ) {
            echo '<div class="post-tags mb-5 text-center">';
            foreach( $posttags as $tag ) {
              echo '<a href="' . get_tag_link( $tag->term_id ) . '" class="btn btn-secondary mr-3 mb-2">' . $tag->name . '</a>';
            }
            echo '</div>';
          } ?>

          <?php
          //相关文章
          related_posts(); ?>

          <?php // 加载评论
          if ( comments_open() || get_comments_number() ) :
            comments_template();
          endif;
          ?>
          <?php endwhile; // end of the loop. ?>

        </div>

        <?php get_sidebar();?>
      </div>
    </div><!-- /.row -->
  </div><!-- /.container -->
<?php get_footer();?>
