<?php
/**
 * The front page template file
 *
 * If the user has selected a static page for their homepage, this is what will
 * appear.
 * Learn more: https://codex.wordpress.org/Template_Hierarchy
 *
 */

get_header(); ?>
<?php if ( is_front_page() ) : ?>
    </div>
<?php endif; ?>


        <div class="container">
            <div class="row header-text-row">
                <div class="header-text align-items-start col-lg-6 col-md-9">
                    <h1 class="header-title" style="margin:30px; font-family:'MontserratAlternates';">A Coolab agrega diversas pessoas e projetos de telecomunicação
                        comunitária
                        fomentando infraestruturas autônomas,
                        através da capacitação técnica e ativação</h1>
                        <form action="<?php echo home_url(); ?>/index.php/como-participar/">
                          <button type="submit" class="btn btn-rosa text-light" style="margin-bottom: 50px;"><a  class="text-light">Como
                        participar</a></button></form>
                </div>
            </div>
        </div>
    </section>

 <section class="section-projetos" style="border-bottom: 1px solid #2E374F; padding: 70px 0 40px 0;">
        <div class="container">
            <div class="row row-footer-heading">
                <div class="col">
                    <h2 class="footer-noticias-title">Destaques</h2>
                </div>
                <div class="col">
                    
                </div>
            </div>
            <section class="projetos-card">
                <div class="row row-projetos">

                  <?php
                  $args = array(
                    'numberposts' => 3,
                    'category_name' => 'destaque'
                  );
                  $latest_posts = get_posts( $args );
                  ?>
                  <?php foreach ( $latest_posts as $curr_post ) : ?>
                      <div class="col-lg-4 col-projetos">
                        <div class="row align-items-center">
                            <div class="col">
                                <a href="<?php the_permalink($curr_post); ?>">
                                  <div class="card-destaques">
                                      <div class="card-body card-projetos-body">
                                          <div class="card-projetos-content">
                                              <h5 class="card-title card-projetos-title footer-projetos-title">
                                                <?php echo get_the_title($curr_post); ?>
                                              </h5>
                                              <p class="card-text card-projetos-text"><?php echo get_the_post_thumbnail_caption($curr_post); ?></p>
                                          </div>
                                      </div>
                                  </div>
                                </a>
                            </div>
                        </div>
                      </div>
                  <?php endforeach; ?>


                </div>
            </section>
        </div>
    </section>


    <section class="section-projetos">
        <div class="container">
            <div class="row row-footer-heading">
                <div class="col">
                    <h2 class="footer-noticias-title">Projetos</h2>
                </div>
                <div class="col">
                    <div class="botao-voltar-projeto-post  btn-footer-projetos-noticias">
                        <a class="projetos-link" href="<?php echo (home_url()."/index.php/category/projeto/") ?>">Ver todos os projetos</a>
                        <a class="projetos-link" href="<?php echo (home_url()."/index.php/category/projeto/") ?>">
                            <img class="img" src="<?php echo get_stylesheet_directory_uri();?>/assets/images/icons/seta.png"> </a>
                    </div>
                </div>
            </div>
            <section class="projetos-card">
                <div class="row row-projetos">

                  <?php
                  $args = array(
                    'numberposts' => 3,
                    'category_name' => 'projeto'
                  );
                  $latest_posts = get_posts( $args );
                  ?>
                  <?php foreach ( $latest_posts as $curr_post ) : ?>
                      <div class="col-lg-4 col-projetos">
                        <a href="<?php the_permalink($curr_post); ?>">
                          <div class="card-projetos" style="background-image: url('<?php echo get_the_post_thumbnail_url($curr_post); ?>');">
                              <div class="card-body card-projetos-body">
                                  <div class="card-projetos-content">
                                      <h5 class="card-title card-projetos-title footer-projetos-title">
                                        <?php echo get_the_title($curr_post); ?>
                                      </h5>
                                      <p class="card-text card-projetos-text"><?php echo get_the_post_thumbnail_caption($curr_post); ?></p>
                                  </div>
                              </div>
                          </div>
                        </a>
                      </div>
                  <?php endforeach; ?>


                </div>
            </section>
        </div>
    </section>

    <section class="footer footer-noticias">
        <div class="container">
            <div class="row row-footer-heading">
                <div class="col">
                    <h2 class="footer-noticias-title">
                        Últimas Notícias
                    </h2>
                </div>
                <div class="col">
                    <div class="botao-voltar-projeto-post  btn-footer-projetos-noticias">
                        <a class="projetos-link" href="<?php echo (home_url()."/index.php/category/noticia/") ?>">Ver todas as notícias</a>
                        <a class="projetos-link" href="<?php echo (home_url()."/index.php/category/noticia/") ?>">
                            <img class="img" src="<?php echo get_stylesheet_directory_uri();?>/assets/images/icons/seta.png"> </a>
                    </div>
                </div>
            </div>

            <div class="row row-footer-noticias">

                <?php
                $args = array(
                  'numberposts' => 3,
                  'category_name' => 'notícia'
                );
                $noticias_posts = get_posts( $args );
                ?>
                <?php foreach ( $noticias_posts as $curr_post ) : ?>
                  <?php setup_postdata($curr_post); //because https://developer.wordpress.org/reference/functions/get_the_excerpt/#comment-2457 ?>
                  <div class="col-lg-4 col-footer-noticias">
                      <a href="<?php the_permalink($curr_post); ?>">
                      <div class="card-footer-noticias">

                        <?php if (get_the_post_thumbnail_url($curr_post)):  ?>
                        <div class="card-footer-noticias-img">
                            <img class="card-img-top img-fluid" src="<?php echo get_the_post_thumbnail_url($curr_post); ?>" alt="<?php echo get_the_post_thumbnail_caption($curr_post); ?>">
                        </div>
                        <?php endif; ?>
                        <div class="card-body card-footer-noticias-body">
                          <h5 class="card-title card-footer-noticias-title"><?php echo get_the_title($curr_post); ?>
                          </h5>
                          <h6 class="card-subtitle card-footer-noticias-data mb-2 text-muted"><?php echo get_the_date("",$curr_post); ?>
                          </h6>
                          <p class="card-text card-footer-noticias-text"><?php echo get_the_excerpt($curr_post); ?></p>
                          </div>
                        </div>
                      </a>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>

    </section>

    <section class="section-contador">
        <div class="row row-cols-3">
            <div class="contador-grande col col-sm">
                <span>12</span>
                <p>Comunidades<br>Impactadas</p>
            </div>

            <div class="contador-grande col col-sm">
                <span>08</span>
                <p>Instalações<br>Complementares</p>
            </div>

            <div class="contador-grande col col-sm">
                <span>200</span>
                <p>Pessoas<br>Conectadas</p>
            </div>
        </div>

    </section>



<?php get_footer();
