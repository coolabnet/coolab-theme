<?php
/*
Template Name: Quem somos
*/
?>
<?php get_header();?>
<div class="content-wrapper" style="top:0; background-color: #e6eaf4;">
    <div id="coolab-sobre">
          <div class="pure-g">
            <div class="pure-u-1 pure-u-md-1-5"> </div>
            <div class="pure-u-1 pure-u-md-3-5">
            <h1>Sobre a Coolab</h1>
              <iframe width="100%" height="385" src="https://www.youtube.com/embed/Pw9I6r34SNA" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
              
            </div>
       
       
            <div class="pure-u-1 pure-u-md-1-5"> </div>
            <!-- <div class="pure-u-1 pure-u-md-2-5"> </div> -->
            <div class="pure-u-1 " style="margin-left: 23%; margin-top: 50px; "> 
              
              <p>A Coolab - laboratório cooperativo de redes livres - é uma iniciativa que agrega diversas <br/>
              pessoas envolvidas com projetos de telecomunicação comunitária. Nosso objetivo é fomentar <br/>
              as infraestruturas autônomas, através da capacitação técnica e ativação comunitária e,</br>
              sempre que possível, financiar esses projetos.</p>

              <p>Entre os projetos que tiveram a participação de membros da cooperativa, citamos:</p>
              <ul>
                <li> Redes WiFi da Casa dos Meninos, São Paulo/SP</li>
                <li>Rede comunitária de Fumaça, Resende/RJ</li>
                <li>Provedores comunitários no município de Campos/RJ</li>
                <li>Transmissão de rádio digital por ondas curtas na Amazônia</li>
                <li>Rede comunitária Kalungas</li>
              </ul>
              <p>No começo de 2017, a Coolab foi selecionada no Desafio Equal Rating da Mozilla como <br/>
              projeto mais inovador, recebendo um apoio de 30 mil dólares para começar as operações.<br/> Com essa verba vamos montar as primeiras redes. Além disso vamos ter um apoio de 10<br/>
              mil reais da Fundação Ford através da Nuvem</p>
            </div>
    <div class="content" id ="coolab-trabalhos" style="text-align:center;">
            <h2 class="content-head is-center">Como Trabalhamos</h2>
            <div class="pure-g"  style="border-bottom:1px solid #a5a5a5;">
                <div class="l-box pure-u-1 pure-u-md-1-3 pure-u-lg-1-3">
                    <div class="trabalho">
                      <div class='img-trabalho'>
                        <img src="<?php echo get_stylesheet_directory_uri();?>/images/icons/apoiar.png"/>
                      </div>
                      <div class="descricao">
                        <h3 class="content-subhead">
                            Apoiar

                        </h3>
                        <p>
                            A Coolab acredita que ajudar as 
                            comunidades a criarem suas próprias
                            redes através de recursos financeiros
                            emprestados é um caminho para que 
                            este espírito solidário se multiplique e cada vez mais elas possam se ajudar
                        </p>
                      </div>
                    </div>
                </div>
                <div class="l-box pure-u-1 pure-u-md-1-3 pure-u-lg-1-3">
                    <div class="trabalho">
                    <div class="img-trabalho">
                     <img src="<?php echo get_stylesheet_directory_uri();?>/images/icons/capacitar.png">
                    </div>
                      <div class="descricao">
                         <h3 class="content-subhead">
                            Capacitar
                        </h3>
                        <p>
                            Só a infraestrutura não basta, para se ter
                            autonomia é preciso apropriação do 
                            conhecimento e vontade de fazer 
                            acontecer. Nós compreendemos que 
                            conhecimento só existe se for 
                            compartilhado e nos enganjamos e 
                            incentivamos que todos que 
                            participarem deste processo possam
                            aderir a esta corrent do bem.
                        </p>
                      </div>
                    </div>
                </div>
                <div class="l-box pure-u-1 pure-u-md-1-3 pure-u-lg-1-3">
                    <div class="trabalho">
                    <div class="img-trabalho">
                      <img src="<?php echo get_stylesheet_directory_uri();?>/images/icons/conectar.png">
                    </div>
                        <div class="descricao">
                          <h3 class="content-subhead">
                            Conectar
                          </h3>
                          <p>
                            A rede não é meramente técnica, a rede
                            é feita de pessoas. Acreditamos que as
                            redes comunitárias são extensões da
                            nossa vida real e nada melhor do que
                            estarmos conectados com quem 
                            vivemos tão próximos.
                          </p>
                        
                        </div>
                    </div>
                </div>

            </div>
            <a href="participe.html" style="display:inline-block;" class="pure-button">Como Participar</a>
    </div>
	 <!--chama os projetos-->
  	<?php get_template_part('template-parts/coolab','projetos'); ?>            
    <!-- footer vai arqui-->
    <?php get_footer();?>
</div>