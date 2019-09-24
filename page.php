<?php get_header();?>
<div class="main" style="height: 65%;">
	<div class="container" >
		<?php if(have_posts()) :?>
		  <?php while(have_posts()) : the_post();?>

		    <?php get_template_part( 'template-parts/page/content', get_post_format() );?>
		  <?php endwhile; ?>
		<?php else : ?>
		  <h2>Página não encontrada</h2>
		<?php endif;?>
	</div>
</div>


<!-- footer vai arqui-->
<?php get_footer();?>
