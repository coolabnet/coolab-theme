<?php
/*
Template Name: Contato
*/
?>
<?php get_header();?>
<div class="content-wrapper" style="top:0; background: #e6eaf4;">
  <div id="coolab-contato">
          <div class="pure-g">
            <div class="pure-u-1 pure-u-md-1-5"> </div>
            
            <div class="pure-u-1 pure-u-md-3-5"> 
              <h1> Contato </h1>
              <form class="pure-form pure-form-aligned">
              <fieldset>
                  <div class="pure-control-group">
                      <input id="nome" type="text" placeholder="Nome">
                  </div>

                  <div class="pure-control-group">
                      <input id="email" type="email" placeholder="Email">
                  </div>

                  <div class="pure-control-group">
                      <input id="assunto" type="text" placeholder="Assunto">
                  </div>

                  <div class="pure-group">
                      <textarea id="mensagem" class="pure-input-1-1" placeholder="Sua mensagem"></textarea>
                  </div>

                  <div class="pure-controls">
                     <button type="submit" class="pure-button pure-button-primary">Enviar</button>
                  </div>
              </fieldset>
          </form>
              
            <div class="pure-u-1 pure-u-md-1-5"> </div>
        </div>
  <!--chama os projetos-->
  <?php get_template_part('template-parts/coolab','projetos'); ?>
  <!-- footer vai arqui-->
  <?php get_footer();?>
  </div>
</div>