<?php
/**
 * Template part for displaying posts
 *
*/

?>
<div class="blog-post col-10 col-md-8 col-sm-10">
	<div class="blog-post-info">
		<h2 class="blog-post-title"><?php the_title(); ?></h2>
		<p class="blog-post-meta"><?php the_date(); ?> , <?php the_author(); ?></p>
	</div>

	<?php if (is_single()): ?>

		<div class="blog-post-content"><?php the_content(); ?></div>


	<?php else : ?>
  <p class="blog-post-content"<?php the_excerpt(); ?>
		<br><?php the_shortlink ( $text="Leia aqui" ); ?></p>

	<?php endif; ?>

</div><!-- /.blog-post -->
