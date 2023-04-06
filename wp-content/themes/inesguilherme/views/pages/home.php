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
            $bg_src = wp_get_attachment_image_src(54, "large", true)[0];
 
            if (empty($bg_src)) {
                $bg_src = wp_get_attachment_image_src(54, "full", true)[0];
            }

            if (strpos($_SERVER['HTTP_ACCEPT'], 'image/webp') !== false && file_exists(str_replace(home_url(), ABSPATH, $bg_src) . '.webp')) {
                $bg_src = $bg_src . '.webp';
            }?>
            <div class="home-slide one" style="background-image: url(<?php echo esc_url($bg_src); ?>);">                
                <div class="home-slide--wrapper">
                    <h1>Inês & <br>Guilherme</h1>
                    <h2>1 de Setembro de 2023</h2>
                    <h3>Entre Braga e Lousada</h3>
                </div>
            </div> 
        </div>
        <div class="swiper-slide">
            <div class="home-slide two">
                <div class="home-slide--wrapper">
                    <h2>Sim!<br>Vamos casar!</h2>
                    <h3>E sim, estás convidado!</h3>
                    <p><strong>E não, a Inês não está grávida...</strong></p>
                    <p><strong>Só queremos mesmo celebrar o nosso amor, e comemorar este dia especial contigo!</strong></p>
                </div>
            </div>
        </div>
        <div class="swiper-slide">
            <div class="home-slide three">
                <div class="home-slide--wrapper">
                    <h2><strong>PS:</strong></h2>
                    <p><strong>Não te esqueças de fazer um treininho antecipado,<br>porque nós também não!</strong></p>
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
                            <img src="<?php echo esc_url(folder_img_url().'home/Google_Maps_icon_(2020).svg'); ?>" alt="">
                            <span>Aceder à Capela</span>
                        </a>
                    </div>
                    <div class="home-slide--cta">
                        <a href="<?php echo esc_url('https://www.guiadacidade.pt/pt/poi-igreja-de-nossa-senhora-do-parto-284963') ?>" class="underline" target="_blank" rel="noreferrer noopener">Sobre a capela</a>
                    </div>
                    <p>Pelas 13h00</p>
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
                            <img src="<?php echo esc_url(folder_img_url().'home/Google_Maps_icon_(2020).svg'); ?>" alt="">
                            <span>Aceder à Quinta</span>
                        </a>
                    </div>
                    <div class="home-slide--cta">
                        <a href="<?php echo esc_url('https://www.quintaredolhodecima.com/') ?>" class="underline" target="_blank">Sobre a quinta</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="swiper-slide"> 
            <div class="home-slide six">
                <div class="home-slide--wrapper">
                    <h2>Informações</h2>  
                    <div class="texto">
                        <span>Agradecemos confirmação até dia 30 de Junho 2023 !</span>
                    </div>
                    <div class="home-slide--cta">
                        <a href="<?php echo esc_url(get_permalink(12)) ?>" class="cta">Confirma a tua presença</a>
                    </div>
                    <div class="home-slide--cta">
                        <a href="<?php echo esc_url(get_permalink(8)) ?>" class="cta">Como nos contactar</a>
                    </div>
                    <div class="home-slide--cta">
                        <a href="<?php echo esc_url(get_permalink(10)) ?>" class="cta">A nossa vida a dois!</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="swiper-slide"> 
            <div class="home-slide seven">
                <div class="home-slide--wrapper">
                    <h2>Alojamentos</h2>
                    <div class="home-slide--cta">
                        <a href="<?php echo esc_url('https://www.booking.com/searchresults.fr.html?ss=Lousada%2C+R%C3%A9gion+Nord%2C+Portugal&efdco=1&label=gen173nr-1BCAEoggI46AdIM1gEaE2IAQGYAQ24ARfIAQzYAQHoAQGIAgGoAgO4ArSMhKAGwAIB0gIkZGM4NWQwZWEtODM2ZC00NDJjLTlhZjctY2NlZTk5OWM3MWU02AIF4AIB&sid=98e6b8950c53d2e5bb56114c5ee842be&aid=304142&lang=fr&sb=1&src_elem=sb&src=index&dest_id=-2168234&dest_type=city&ac_position=0&ac_click_type=b&ac_langcode=fr&ac_suggestion_list_length=5&search_selected=true&search_pageview_id=89eb8f9a2129013a&ac_meta=GhA4OWViOGY5YTIxMjkwMTNhIAAoATICZnI6B0xvdXNhZGFAAEoAUAA%3D&checkin=2023-09-01&checkout=2023-09-02&group_adults=2&no_rooms=1&group_children=0&sb_travel_purpose=leisure') ?>" target="_blank" rel="noopener noreferrer" class="cta">Hotéis Lousada</a>
                    </div>
                    <div class="home-slide--cta">
                        <a href="<?php echo esc_url('https://www.booking.com/searchresults.fr.html?ss=Braga%2C+R%C3%A9gion+Nord%2C+Portugal&ssne=Lousada&ssne_untouched=Lousada&label=gen173nr-1BCAEoggI46AdIM1gEaE2IAQGYAQ24ARfIAQzYAQHoAQGIAgGoAgO4ArSMhKAGwAIB0gIkZGM4NWQwZWEtODM2ZC00NDJjLTlhZjctY2NlZTk5OWM3MWU02AIF4AIB&sid=98e6b8950c53d2e5bb56114c5ee842be&aid=304142&lang=fr&sb=1&src_elem=sb&src=searchresults&dest_id=-2160205&dest_type=city&ac_position=0&ac_click_type=b&ac_langcode=fr&ac_suggestion_list_length=5&search_selected=true&search_pageview_id=8bf38fa707230047&ac_meta=GhA4YmYzOGZhNzA3MjMwMDQ3IAAoATICZnI6BUJyYWdhQABKAFAA&checkin=2023-09-01&checkout=2023-09-02&group_adults=2&no_rooms=1&group_children=0&sb_travel_purpose=leisure') ?>" target="_blank" rel="noopener noreferrer" class="cta">Hotéis Braga</a>
                    </div>
                </div> 
            </div>
        </div>   
    </div>
    <div class="home-pagination"></div>
</div>

<?php get_footer();