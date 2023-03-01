<?php
/**
 * FRONT PAGE
 *
 * The home template file
 *
 * @link https://github.com/christophefrancoiscorreia
 *
 * @package WordPress
 * @subpackage Christophe Correia
 * @since 1.0
 * @version 1.0
 */
get_header(); ?>

<div id="swiper" class="home-wrapper swiper-container">
    <div class="swiper-wrapper">
        <div class="swiper-slide">
            <div class="home-slide one">                
                <div>
                    <h1>Inês & Guilherme</h1>
                    <h2>1 de Setembro de 2023</h2>
                    <h3>Entre Braga e Lousada</h3>
                </div>
            </div>
        </div>
        <div class="swiper-slide">
            <div class="home-slide two">
                <div>
                    <p>Sim! Vamos casar!<br>
                        E sim, estás convidado!<br>
                        E não, a Inês não está grávida...<br>
                        Só queremos mesmo celebrar o nosso amor, e comemorar este dia especial contigo!                    
                    </p>
                </div>
            </div>
        </div>
        <div class="swiper-slide">
            <div class="home-slide three">
                <div>
                    <h2><strong>PS:</strong></h2>
                    <p>Não se esqueçam de fazer um treininho antecipado, porque nós também  não! xD</p>
                </div>
            </div>
        </div> 
        <div class="swiper-slide"> 
            <div class="home-slide four">
                <div>
                    <h2>A Cerimonia !</h2>
                    <h4>Capela de<br>Nossa Senhora do Parto</h4>
                    <div>
                        <a href="<?php echo esc_url('https://maps.app.goo.gl/wZjCC751UaiL3inP9') ?>" class="cta" target="_blank">Aceder à Capela</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="swiper-slide">
            <div class="home-slide five">
                <div>
                    <h2>O copo de agua !</h2>
                    <h3>Quinta Redolho de Cima</h3>
                    <div>
                        <a href="<?php echo esc_url('https://maps.app.goo.gl/AdWWdsQqzrSi3yA36') ?>" class="cta" target="_blank">Aceder à Quinta</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="swiper-slide"> 
            <div class="home-slide six">
                <div>
                    <h2>Informações</h2>
                    <div>
                        <a href="<?php echo esc_url(home_url().'/inscricoes') ?>" class="cta">Informa-nos da tua presença</a>
                    </div>
                    <div>
                        <a href="<?php echo esc_url(home_url().'/contactos') ?>" class="cta">Contacta-nos para qualquer duvida</a>
                    </div>
                    <div>
                        <a href="<?php echo esc_url(home_url().'/donativos') ?>" class="cta">Donativos</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="home-pagination"></div>
</div>

<?php get_footer();