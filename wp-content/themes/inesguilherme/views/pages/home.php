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
                <div class="home-slide--wrapper">
                    <h1>Inês & Guilherme</h1>
                    <h2>1 de Setembro de 2023</h2>
                    <h3>Entre Braga e Lousada</h3>
                </div>
            </div>
        </div>
        <div class="swiper-slide">
            <div class="home-slide two">
                <div class="home-slide--wrapper">
                    <p>Sim! Vamos casar!<br>
                        E sim, estás convidado!<br>
                        E não, a Inês não está grávida...<br><br>
                        Só queremos mesmo celebrar o nosso amor, e comemorar este dia especial contigo!                    
                    </p>
                </div>
            </div>
        </div>
        <div class="swiper-slide">
            <div class="home-slide three">
                <div class="home-slide--wrapper">
                    <h2><strong>PS:</strong></h2>
                    <p>Não te esqueças de fazer um treininho antecipado,<br>porque nós também não!</p>
                </div>
            </div>
        </div>  
        <div class="swiper-slide"> 
            <div class="home-slide four">
                <div class="home-slide--wrapper">
                    <h2>A Cerimónia!</h2>
                    <h3>Capela de<br>Nossa Senhora do Parto</h3>
                    <div class="home-slide--cta">
                        <a href="<?php echo esc_url('https://maps.app.goo.gl/wZjCC751UaiL3inP9') ?>" class="cta" target="_blank" rel="noreferrer noopener">
                            <img src="<?php echo esc_url(folder_img_url().'home/Google.svg'); ?>" alt="">
                            <span>Aceder à Capela</span>
                        </a>
                    </div>
                    <div class="home-slide--cta">
                        <a href="<?php echo esc_url('https://www.quintaredolhodecima.com/') ?>" class="underline" target="_blank" rel="noreferrer noopener">Sobre a capela</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="swiper-slide">
            <div class="home-slide five">
                <div class="home-slide--wrapper">
                    <h2>O copo de água!</h2>
                    <h3>Quinta Redolho de Cima</h3>
                    <div class="home-slide--cta">
                        <a href="<?php echo esc_url('https://maps.app.goo.gl/AdWWdsQqzrSi3yA36') ?>" class="cta" target="_blank">
                            <img src="<?php echo esc_url(folder_img_url().'home/Google.svg'); ?>" alt="">
                            <span>Aceder à Quinta</span>
                        </a>
                    </div>
                    <div class="home-slide--cta">
                        <a href="<?php echo esc_url('https://www.guiadacidade.pt/pt/poi-igreja-de-nossa-senhora-do-parto-284963') ?>" class="underline" target="_blank">Sobre a quinta</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="swiper-slide"> 
            <div class="home-slide six">
                <div class="home-slide--wrapper">
                    <h2>Informações</h2>
                    <div class="home-slide--cta">
                        <a href="<?php echo esc_url(get_permalink(12)) ?>" class="cta">Confirma a tua presença</a>
                    </div>
                    <div class="home-slide--cta">
                        <a href="<?php echo esc_url(get_permalink(8)) ?>" class="cta">Como nos contactar</a>
                    </div>
                    <div class="home-slide--cta">
                        <a href="<?php echo esc_url(get_permalink(10)) ?>" class="cta">Ajuda-nos com Donativos</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="swiper-slide"> 
            <div class="home-slide seven">
                <div class="home-slide--wrapper">
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