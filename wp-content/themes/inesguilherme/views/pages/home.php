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
            <?php 
            $bg_src = wp_get_attachment_image_src(18, "large", true)[0];
 
            if (empty($bg_src)) {
                $bg_src = wp_get_attachment_image_src(18, "full", true)[0];
            }

            if (strpos($_SERVER['HTTP_ACCEPT'], 'image/webp') !== false && file_exists(str_replace(home_url(), ABSPATH, $bg_src) . '.webp')) {
                $bg_src = $bg_src . '.webp';
            }?>
            <div class="home-slide one" style="background-image: url(<?php echo esc_url($bg_src); ?>);">                
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
                    <div class="home-slide--cta">
                        <a href="<?php echo esc_url('https://maps.app.goo.gl/wZjCC751UaiL3inP9') ?>" class="cta" target="_blank">Aceder à Capela</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="swiper-slide">
            <div class="home-slide five">
                <div>
                    <h2>O copo de água !</h2>
                    <h3>Quinta Redolho de Cima</h3>
                    <div class="home-slide--cta">
                        <a href="<?php echo esc_url('https://maps.app.goo.gl/AdWWdsQqzrSi3yA36') ?>" class="cta" target="_blank">Aceder à Quinta</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="swiper-slide"> 
            <div class="home-slide six">
                <div>
                    <h2>Informações</h2>
                    <div class="home-slide--cta">
                        <a href="<?php echo esc_url(home_url().'/inscricoes') ?>" class="cta">Confirma a tua presença</a>
                    </div>
                    <div class="home-slide--cta">
                        <a href="<?php echo esc_url(home_url().'/contactos') ?>" class="cta">Contacta-nos</a>
                    </div>
                    <div class="home-slide--cta">
                        <a href="<?php echo esc_url(home_url().'/donativos') ?>" class="cta">Donativos</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="swiper-slide"> 
            <div class="home-slide seven">
                <div>
                    <h2>Alojamentos</h2>
                    <div class="home-slide--cta">
                        <a href="<?php echo esc_url(home_url().'/hoteis') ?>" class="cta">Hoteis</a>
                    </div>
                    <div class="home-slide--cta">
                        <a href="<?php echo esc_url(home_url().'/hostels') ?>" class="cta">Hostels</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="home-pagination"></div>
</div>

<?php get_footer();