<?php get_header(); ?>

            <section class="medium-8 columns">

				<?php if ( have_posts() ) : ?>

					<?php do_action( 'foundationpress_before_content' ); ?>

					<?php while ( have_posts() ) : the_post(); ?>
						<?php get_template_part( 'content', get_post_format() ); ?>
					<?php endwhile; ?>

					<?php else : ?>
						<?php get_template_part( 'content', 'none' ); ?>


					<?php do_action( 'foundationpress_before_pagination' ); ?>

				<?php endif;?>
                <ul class="pagination">
                      <li class="arrow unavailable"><a href="">&laquo;</a></li>
                      <li class="current"><a href="">1</a></li>
                      <li><a href="">2</a></li>
                      <li><a href="">3</a></li>
                      <li><a href="">4</a></li>
                      <li class="unavailable"><a href="">&hellip;</a></li>
                      <li><a href="">12</a></li>
                      <li><a href="">13</a></li>
                      <li class="arrow"><a href="">&raquo;</a></li>
                </ul>
            </section>

            <?php get_sidebar(); ?>

<?php get_footer(); ?>
