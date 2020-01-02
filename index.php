<?php get_header();?>
  <?php if (is_category('noticia')) : // this checks whether a query for a given category was made ?>
    <main class="main">
      <div class="container-menor">
        <div class="row">
          <div class="col-10 col-md-7 col-sm-10" style="margin: auto; "> <h1>Notícias</h1></div>
        </div>
        <?php if(have_posts()) :?>
          <?php while(have_posts()) : the_post();?>
            <?php get_template_part( 'template-parts/post/content', get_post_format() );?>
          <?php endwhile; ?>
        <?php else : ?>
          <h2>Não há posts de notícias</h2>
        <?php endif;?>
      </div>
    </main>
  <?php elseif (is_category('projeto')) : ?>
    <main class="main main-projetos">
        <div class="container">
          <h1>Projetos</h1>
          <section class="projetos-card">
            <?php if(have_posts()) :?>
              <?php
              $args = array(
                'numberposts' => 9,
                'category_name' => 'projeto'
              );
              $latest_projects = get_posts( $args );
              $i = 1;
              ?>
              <div class="row row-projetos">
              <?php foreach ( $latest_projects as $curr_project ) :
                ?>
                    <div class="col-lg-4 col-projetos"><!-- column <?php echo $i ?> -->
                      <a href="<?php the_permalink($curr_project); ?>">
                          <div class="card-projetos"  style="background-image: url('<?php echo get_the_post_thumbnail_url($curr_project); ?>') ">
                              <div class="card-body card-projetos-body">
                                  <div class="card-projetos-content">
                                      <h5 class="card-title card-projetos-title"><?php echo get_the_title($curr_project); ?></h5>
                                      <p class="card-text card-projetos-text"><?php the_post_thumbnail_caption($curr_project); ?></p>
                                  </div>
                              </div>
                          </div>
                      </a>
                    </div>
                  <?php if ($i==3) : //open new row ?>
                    <?php $i==1; ?>
              </div>
              <div class="row row-projetos">
                <?php else : ?>

                   <?php $i++;  ?>
                <?php endif; ?>
              <?php  endforeach; ?>
            </div>
            <?php else : ?>
              <h2>Não há projetos cadastrados</h2>
            <?php endif;?>

          </section>
        </div>
      </main>

  <?php else : // if it is not a category query, then we'll show a single post?>
    <?php if (in_category('noticia')) : ?>
      <!-- noticia -->
      <?php if(have_posts()) :?>
        <?php while(have_posts()) : the_post();?>
          <?php get_template_part( 'template-parts/post/content', get_post_format() );?>
        <?php endwhile; ?>
      <?php else : ?>
        <h2>Não há posts de notícias</h2>
      <?php endif;?>
      <?php elseif (in_category('projeto')) : ?>
      <!-- projeto -->
      <?php if(have_posts()) :?>
        <?php while(have_posts()) : the_post();?>
          <?php get_template_part( 'template-parts/post/content', get_post_format() );?>
        <?php endwhile; ?>
      <?php else : ?>
        <h2>Não há posts de projetos</h2>
      <?php endif;?>
      <?php elseif (in_category('destaque')) : ?>
      <!-- projeto -->
      <?php if(have_posts()) :?>
        <?php while(have_posts()) : the_post();?>
          <?php get_template_part( 'template-parts/post/content', get_post_format() );?>
        <?php endwhile; ?>
      <?php else : ?>
        <h2>Não há posts de projetos</h2>
      <?php endif;?>
    <?php endif; ?>
  <?php endif; ?>


<?php get_footer();?>
