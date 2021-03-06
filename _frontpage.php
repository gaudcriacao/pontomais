<?php
/**
 * Template Name: Frontpage
 * The template used for displaying page content in page.php
 */
get_header();
?>

<!-- BEGIN SHOWCASE -->
<div class="intro">
  <?php if(is_desktop()) {
    putRevSlider( 'showcase' );
  };
   ?>
   <?php if(is_mobile()) {
     putRevSlider( 'mobile' );
    };
    ?>
</div>
<!-- END SHOWCASE -->

<!-- BEGIN VANTAGENS -->
<div id="solu" class="pre-section-solucoes">
  <div class="container">
    <div class="row">
      <div class="col-md-12 text-center">
        <div class="intro-section">
          <h3 class="intro-title"><?php
          the_field('titulo_secao_vantagens');
          ?></h3>
          <div class="intro-content">
            <?php
            the_field('texto_secao_vantagens');
            ?>
         </div>
        </div>

      </div>
    </div>
  </div>
</div>
<div class="section-solucoes">
  <div class="bg-left hidden-xs"></div>
  <div class="bg-right hidden-xs"></div>
  <div class="container">
    <div class="row">
      <div class="col-md-8 col-md-push-4">

        <?php
if (have_rows('vantagens')):
?>

          <ul class="solucoes-list equal-height">

          <?php
    while (have_rows('vantagens')):
        the_row();

        // vars
        $tituloVantagem = get_sub_field('titulo_vantagem');
        $sobreVantagem  = get_sub_field('sobre_vantagem');
        $iconeVantagem  = get_sub_field('icone_vantagem');

?>

            <li class="item">

                  <div class="icone">
                    <?php echo $iconeVantagem; ?>
                  </div>

                <div class="right-content">
                  <h4 class="titulo"><?php echo $tituloVantagem; ?></h4>
                  <div class="conteudo">
                    <?php echo $sobreVantagem; ?>
                 </div>
                </div>

            </li>

          <?php
              endwhile;
          ?>

          </ul>

        <?php
        endif;
        ?>

          <div class="nav-list">
            <span class="slider-prev"></span><span class="slider-next hvr-float"></span>
          </div>

      </div>

    </div>
  </div>
</div>
<!-- END VANTAGENS -->
<!-- BEGIN FUNCIONALIDADES -->
<div id="funcionalidades" class="section-funcionalidades">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <h3 class="section-title text-white text-center">Mas afinal, o que o Pontomais tem a mais?</h3>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12">

        <!-- FUNCIONALIDADES CARROSSEL NAV -->
        <?php
        if (have_rows('funcionalidades')):
        ?>

          <div class="func-main js-flickity"
           data-flickity-options='{ "prevNextButtons": true, "cellAlign": "center", "pageDots": false, "freeScroll": true, "wrapAround": true }'>

          <?php
              while (have_rows('funcionalidades')):
                  the_row();

                  // vars
                  $tituloFunc = get_sub_field('titulo_func');
                  $iconeFunc  = get_sub_field('icone_func');

          ?>

              <div class="box-func">

                    <div class="icone-func">
					  <?php echo $iconeFunc; ?>
                    </div>

                    <div class="title-func">
                      <?php echo $tituloFunc; ?>
                   </div>

              </div>

          <?php
              endwhile;
          ?>

          </div>

        <?php
        endif;
        ?>

      </div>
    </div>
  </div>
  <div class="sobre-func-container">
    <div class="container">
      <div class="row">
        <div class="col-md-12">

          <!-- FUNCIONALIDADES CONTEUDO -->
          <?php
          if (have_rows('funcionalidades')):
          ?>

            <div class="func-nav js-flickity"
             data-flickity-options='{ "asNavFor": ".func-main", "prevNextButtons": false, "contain": true, "pageDots": false, "draggable": false }'>

            <?php
                while (have_rows('funcionalidades')):
                    the_row();

                    // vars
                    $tituloInternaFunc = get_sub_field('titulo_interna');
                    $sobreFunc         = get_sub_field('sobre_func');
                    $imgFunc           = get_sub_field('imagem_func');

            ?>

              <div class="content-func">

              <div class="row">
                <div class="col-md-5 col-sm-12">
                  <?php if (!empty($imgFunc)): ?>

                      <img src="<?php echo $imgFunc['url']; ?>" alt="<?php echo $imgFunc['alt']; ?>" class="img-responsive" />

                  <?php
                          endif;
                  ?>

               </div>
                <div class="col-md-7 col-sm-12">
                  <h3 class="title-inner-func"><?php echo $tituloInternaFunc; ?></h3>

                  <div class="sobre-func"><?php echo $sobreFunc; ?></div>
                </div>
              </div>

              </div>

            <?php
                endwhile;
            ?>

            </div>

          <?php
            endif;
            ?>

        </div>
      </div>
    </div>
  </div>
</div>
<!-- END FUNCIONALIDADES -->

<!-- BEGIN INFOGRAFICO -->
<div id="section-info">
	<h4 class="section-title text-center text-verd-dark">O fechamento de ponto não precisa te dar tanta dor de cabeça</h4>
</div>
<div class="section-infografico hidden-xs">
  <div class="bg-left hidden-xs"></div>
  <div class="bg-right hidden-xs"></div>
  <div class="container">
  <div class="row">
      <div class="row-height">
        <div class="col-md-6 col-height col-md-middle">
          <h3 class="infografico-title text-center text-grey">
            Fechamento de folha ponto hoje
          </h3>
        </div>
        <div class="col-md-6 col-height col-md-middle">
          <h3 class="infografico-title text-center text-white">
            Fechamento com PontoMais
          </h3>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/infografico.png" alt="" class="img-responsive" />
      </div>
    </div>
  </div>
</div>
<!-- END INFOGRAFICO -->

<!-- BEGIN CONTADOR -->
<div class="section-contador">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <h3 class="section-title text-center">Você economiza mais tempo</h3>
      </div>
	  <div class="row-height">
        <div class="col-md-6 col-height col-md-middle">
          <p class="infografico-title text-center text-grey">
            Informe a quantidade de funcionários
          </p>
			<input class="form-control input-lg input-sp text-center" type="text" name="txt" value="" oninput="calcular(this.value)">
        </div>
        <div class="col-md-6 col-height col-md-middle">
          <p class="infografico-title text-center text-grey">
            Veja quanto tempo você economiza
          </p>
		  <h3 class="section-title text-center text-verd-dark" id="qtdresultado">0 minutos</h3>
		  </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- END CONTADOR -->

<!-- BEGIN EXPERIMENTE -->
<div id="section-experimente">
  <div class="container">
    <div class="row">
      <div class="col-md-12 text-center">
        <h4 class="section-title text-white">O que você acha de testar o sistema?</h4>
      </div>
    </div>
    <div class="row">
      <div class="row-height">
        <div class="col-md-7 col-md-height col-md-middle hidden-xs">
          <ul class="stores-list">
            <li class="store-item">
              <svg class="android" data-name="ANdroid" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 39 48">
                <path d="M35,15.54A1.51,1.51,0,1,1,36.52,17h0A1.52,1.52,0,0,1,35,15.54h0Zm-16.5,21V26a3,3,0,0,0-6,0v10.5a3,3,0,1,0,6,0h0ZM44,23H20V42.48a2.85,2.85,0,0,0,2.85,2.85H23V53a3,3,0,1,0,6,0V45.33h6V53a3,3,0,1,0,6,0V45.33h0.21A2.84,2.84,0,0,0,44,42.48V23Zm1.49,3v10.5a3,3,0,1,0,6,0V26a3,3,0,0,0-6,0h0ZM29,15.54A1.51,1.51,0,0,1,27.5,17,1.48,1.48,0,0,1,26,15.55s0,0,0,0A1.49,1.49,0,0,1,27.5,14,1.52,1.52,0,0,1,29,15.54h0Zm-9,6H44a12,12,0,0,0-5-9.73l2.51-2.51a0.74,0.74,0,0,0,0-1h0a0.74,0.74,0,0,0-1.05,0h0L37.71,11a11.74,11.74,0,0,0-11.44,0L23.5,8.22a0.7,0.7,0,0,0-1,0l0,0a0.74,0.74,0,0,0,0,1.05h0l2.47,2.51a12.09,12.09,0,0,0-5,9.73h0Z" transform="translate(-12.49 -8)"/>
              </svg>
              <small>Android</small>
            </li>
            <li class="store-item">
              <svg class="ios" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 38 45.39">
                <path d="M34.47,19.89a15.36,15.36,0,0,1-2.84.46,12.39,12.39,0,0,1,2.13-7q2-2.92,6.81-4a1.85,1.85,0,0,1,.07.3,1.89,1.89,0,0,0,.07.3c0,0.07,0,.16,0,0.27s0,0.2,0,.27a10.4,10.4,0,0,1-.79,3.71,11.16,11.16,0,0,1-2.53,3.76A7.78,7.78,0,0,1,34.47,19.89ZM46.69,39a10.39,10.39,0,0,1-1.88-6.08,9.69,9.69,0,0,1,1.77-5.64,17.55,17.55,0,0,1,3.11-3.22,14.1,14.1,0,0,0-2.84-2.73A10,10,0,0,0,41,19.56a15.39,15.39,0,0,0-4.71.93,13.53,13.53,0,0,1-3.9.93,17.47,17.47,0,0,1-3.76-.82,18.13,18.13,0,0,0-4.83-.82,9.42,9.42,0,0,0-7.75,3.93A16.18,16.18,0,0,0,13,33.91a28,28,0,0,0,4,13.72q4.06,7.06,8.21,7.06a9.86,9.86,0,0,0,3.6-.93,10.49,10.49,0,0,1,3.88-.9,12.08,12.08,0,0,1,4.12.87,12.56,12.56,0,0,0,3.82.87q3.49,0,7-5.35A26.52,26.52,0,0,0,51,42.45,8.29,8.29,0,0,1,46.69,39Z" transform="translate(-13 -9.31)"/>
              </svg>
              <small>IOS</small>
            </li>
            <li class="store-item">
              <svg class="svg-icon" data-name="Windows" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32">
                <polygon points="15 2.5 32 0 32 15 15 15 15 2.5"/>
                <polygon points="0 4.7 13 2.8 13 15 0 15 0 4.7"/>
                <polygon points="15 29.5 32 32 32 17 15 17 15 29.5"/>
                <polygon points="0 27.3 13 29.2 13 17 0 17 0 27.3"/>
              </svg>
              <small>Windows Phone</small>
            </li>
            <li class="store-item">
              <svg class="web" data-name="Web" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 48 41.14">
                <path d="M25.14,14.86h3.43v3.43H25.14V14.86Zm-6.86,0h3.43v3.43H18.29V14.86Zm-6.86,0h3.43v3.43H11.43V14.86ZM52.57,49.14H11.43V21.71H52.57V49.14Zm0-30.86H32V14.86H52.57v3.43ZM56,14.86a3.43,3.43,0,0,0-3.43-3.43H11.43A3.43,3.43,0,0,0,8,14.86V49.14a3.43,3.43,0,0,0,3.43,3.43H52.57A3.43,3.43,0,0,0,56,49.14V14.86Z" transform="translate(-8 -11.43)"/>
              </svg>
              <small>Web</small>
            </li>
          </ul>
        </div>
        <div class="col-md-5 col-md-height col-md-middle text-center">
          <a href="http://app.pontomaisweb.com.br/#/cadastrar" class="btn btn-xl btn-default">Experimente agora!</a>
          <small class="assist-btn">Cadastre-se e experimente o<br>PontoMais por 14 dias gratuitamente.</small>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- END EXPERIMENTE -->

<!-- BEGIN PLANOS -->
<div id="section-planos">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <h4 class="section-title text-center text-verd-dark">Preços justos. Sem taxas e sem surpresas.</h4>
      </div>
    </div>
  </div>
  <section id="pricing-table">
              <div class="container">
                  <div class="row">
                      <div class="pricing">
                          <div class="row-height">
                            <div class="col-md-3 col-sm-3 col-xs-12 col-sm-height">
                                <div class="pricing-table">
                                    <div class="pricing-header">
                                        <p class="pricing-title">FREE</p>
                                        <p class="pricing-rate"><span>FREE para sempre</span></p>
                                    </div>
                                    <div class="pricing-list">
                                        <ul>
                                            <li><strong>Até 10 colaboradores</strong></li>
                                            <li>Aplicativo Mobile</li>
                                            <li>Marcações de ponto via web/smartphone/tablet</li>											<li>Painel de indicadores</li>											<li>Fechamento de folha ponto</li>											<li>Notificações de ocorrências e marcações</li>											<li>Controle de hora extra</li>											<li>Monitor de banco de horas</li>											<li>Captura de dados do relógio ponto</li>
                                        </ul>
                                    </div>
                                    <div class="assinar-table">
                                      <a href="http://app.pontomaisweb.com.br/#/cadastrar">Assinar</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-3 col-xs-12 col-sm-height">
                                <div class="pricing-table table-destaque">
                                    <div class="pricing-header">
                                        <p class="pricing-title">Pequeno</p>
                                        <p class="pricing-rate"><sup>$</sup> 99 <span>/mês</span></p>
                                    </div>
                                    <div class="pricing-list">
                                        <ul>
											<li><strong>Até 100 colaboradores</strong></li>                                            <li>Aplicativo Mobile</li>                                            <li>Marcações de ponto via web/smartphone/tablet</li>											<li>Painel de indicadores</li>											<li>Fechamento de folha ponto</li>											<li>Notificações de ocorrências e marcações</li>											<li>Controle de hora extra</li>											<li>Monitor de banco de horas</li>											<li>Captura de dados do relógio ponto</li>
                                        </ul>
                                    </div>
                                    <div class="assinar-table">
                                      <a href="http://app.pontomaisweb.com.br/#/cadastrar">Assinar</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-3 col-xs-12 col-sm-height">
                                <div class="pricing-table">
                                    <div class="pricing-header">
                                        <p class="pricing-title">Médio</p>
                                        <p class="pricing-rate"><sup>$</sup> 239 <span>/mês</span></p>
                                    </div>
                                    <div class="pricing-list">
                                        <ul>
											<li><strong>Até 300 colaboradores</strong></li>                                            <li>Aplicativo Mobile</li>                                            <li>Marcações de ponto via web/smartphone/tablet</li>											<li>Painel de indicadores</li>											<li>Fechamento de folha ponto</li>											<li>Notificações de ocorrências e marcações</li>											<li>Controle de hora extra</li>											<li>Monitor de banco de horas</li>											<li>Captura de dados do relógio ponto</li>
                                        </ul>
                                    </div>
                                    <div class="assinar-table">
                                      <a href="http://app.pontomaisweb.com.br/#/cadastrar">Assinar</a>
                                    </div>
                                </div>
                            </div>														<div class="col-md-3 col-sm-3 col-xs-12 col-sm-height">                                <div class="pricing-table">                                    <div class="pricing-header">                                        <p class="pricing-title">Grande</p>                                        <p class="pricing-rate"><sup>$</sup> 399 <span>/mês</span></p>                                    </div>                                    <div class="pricing-list">                                        <ul>											<li><strong>Até 500 colaboradores</strong></li>                                            <li>Aplicativo Mobile</li>                                            <li>Marcações de ponto via web/smartphone/tablet</li>											<li>Painel de indicadores</li>											<li>Fechamento de folha ponto</li>											<li>Notificações de ocorrências e marcações</li>											<li>Controle de hora extra</li>											<li>Monitor de banco de horas</li>											<li>Captura de dados do relógio ponto</li>                                        </ul>                                    </div>                                    <div class="assinar-table">                                      <a href="http://app.pontomaisweb.com.br/#/cadastrar">Assinar</a>                                    </div>                                </div>                            </div>
                          </div>
                      </div>
                  </div>
              </div>
          </section>
</div>
<!-- END PLANOS -->

<!-- BEGIN NEWS -->
<div id="section-news">
  <div class="header-title">
    <h4 class="section-title text-center text-white">
      - Novidades no Blog -
    </h4>
  </div>
<div class="news-container">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="row">

          <?php
            $args_list = array (
              'post_type'              => array( 'post' ),
              'posts_per_page'         => '3',
              'order'                  => 'DESC',
              'orderby'                => 'date',
            );

            $blog_list = new WP_Query( $args_list );
          ?>

          <?php if ( $blog_list->have_posts() ) : ?>

            <?php while ( $blog_list->have_posts() ) : $blog_list->the_post(); ?>

              <div class="col-md-4 col-sm-4">
                <div class="home-news">
                  <div class="news-title"><?php the_title(); ?></div>
                  <div class="news-expert">
                    <?php echo excerpt(25); ?>
                  </div>
                  <div class="read-more">
                    <a href="<?php the_permalink(); ?>" class="hvr-grow">Continue lendo</a>
                  </div>
                </div>
              </div>

            <?php endwhile; ?>


          <?php else : ?>
            <p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
          <?php endif; ?>

        </div>
      </div>
    </div>
  </div>
</div>
</div>
<!-- END NEWS -->
<!-- BEGIN DEPOIMENTOS -->
<!-- BEGIN DEPOIMENTOS -->
   <div id="section-depoimentos">
     <div class="container">
       <div class="row">
         <div class="col-md-12">
           <h2 class="text-center dark-blue-text">Veja o que estão falando da gente</h2>
           <div class="depoimentos-list">
             <?php
 							$args_depo = array (
 								'post_type'              => array( 'depoimento' ),
 								'nopaging'               => true,
 								'posts_per_page'         => '9',
 								'order'                  => 'DESC',
 								'orderby'                => 'rand',
 							);

 							$depoimentos = new WP_Query( $args_depo );
 						?>

            <?php if ( $depoimentos->have_posts() ) : ?>

							<?php while ( $depoimentos->have_posts() ) : $depoimentos->the_post(); ?>


                <div class="depoimento-item">
                  <div class="header-depoimento">
                    <div class="avatar">
                      <?php
  										if ( has_post_thumbnail() ) { the_post_thumbnail('thumbnail'); }
  										?>
                    </div>
                    <h4 class="depoimento-nome"><?php the_title(); ?></h4>
                    <h5 class="depoimento-local"><?php the_field('empresa_depo'); ?></h5>
                  </div>
                  <div class="depoimento-content">
                    <?php the_content(); ?>
                  </div>
                </div>

							<?php endwhile; ?>


						<?php else : ?>
							<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
						<?php endif; ?>

           </div>
         </div>
       </div>
     </div>
   </div>
   <!-- END DEPOIMENTOS -->
<?php
get_footer();
?>
