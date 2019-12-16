    <footer class="footer bg-dark navbar-dark  ">
        <div class="footer-div-1 d-flex align-items-center justify-content-between container">
            <nav class="nav-1 navbar navbar-dark ">
                <a class="nav-link medium text-light d-flex align-items-center" href="contato/">
                    <img src="<?php echo get_stylesheet_directory_uri();?>/assets/images/icons/icon-contato.png" width="35" height="25" class="contato-img d-inline-block align-top"
                        alt=""> Contato
                </a>
                <a class="medium nav-link nav-link-barra" href="">|</a>
                <a class="medium nav-link nav-link-barra" href="index.php/quem-somos/">Quem somos</a>
                <a class="medium nav-link nav-link-barra" href="index.php/como-participar/">Como participar</a>
                <a class="medium nav-link nav-link-barra" href="index.php/category/projetos/">Projetos</a>
                <a class="medium nav-link nav-link-barra" href="index.php/category/noticias">Blog</a>
                <a class="medium nav-link nav-link-barra" href="http://wiki.coolab.org">Documentação</a>
            </nav>

            <nav class="nav-2 navbar navbar-dark justify-content-center row">
                <a class="nav-link text-light img-redes" href="https://www.facebook.com/coolab.br"><img src="<?php echo get_stylesheet_directory_uri();?>/assets/images/icons/icon-fb.png"
                        width="35" alt=""></a>
                <a class="nav-link text-light img-redes" href="https://www.flickr.com/search/?sort=date-taken-desc&safe_search=1&tags=coolab&user_id=35034359718%40N01&view_all=1"><img
                        src="<?php echo get_stylesheet_directory_uri();?>/assets/images/icons/icon-flickr.png" width="35" alt=""></a>
                <a class="nav-link text-light img-redes" href="https://twitter.com/coolabdiz"><img src="<?php echo get_stylesheet_directory_uri();?>/assets/images/icons/icon-twitter.png"
                        width="35" alt=""></a>
            </nav>

        </div>
        <div class="footer-div-2 d-flex align-items-end justify-content-between container ">
            <nav class="nav-3 navbar navbar-dark d-flex flex-column align-items-start">
                <label class="medium" for="email">Assinar a newsletter</label>
                <div class="d-flex bg-transprent">
                    <input type="email" name="email" id="">
                    <button>
                        <img src="<?php echo get_stylesheet_directory_uri();?>/assets/images/icons/seta.png" alt="">
                    </button>
                </div>
            </nav>
            <nav class="nav-4 navbar navbar-dark d-flex flex-column">
                <p class="medium">&copy; 2020 Coolab. Todos os direitos reservados.</p>
            </nav>
        </div>

    </footer>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <?php wp_footer(); ?>

  </body>

</html>
