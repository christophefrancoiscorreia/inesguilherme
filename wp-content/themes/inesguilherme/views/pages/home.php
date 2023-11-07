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
                    <p>Capela Nossa Senhora do Parto<br><span style="font-size: 1.25em;">13h30</span></p>
                    <div class="home-slide--cta">
                        <a href="<?php echo esc_url('https://maps.app.goo.gl/wZjCC751UaiL3inP9') ?>" class="cta" target="_blank" rel="noreferrer noopener">
                            <img src="<?php echo esc_url(folder_img_url().'home/Google_Maps_icon_(2020).svg'); ?>" alt="">
                            <span>Aceder à Capela</span>
                        </a>
                    </div>
                    <p>Quinta do Redolho de Cima</p>
                    <div class="home-slide--cta">
                        <a href="<?php echo esc_url('https://maps.app.goo.gl/AdWWdsQqzrSi3yA36') ?>" class="cta" target="_blank">
                            <img src="<?php echo esc_url(folder_img_url().'home/Google_Maps_icon_(2020).svg'); ?>" alt="">
                            <span>Aceder à Quinta</span>
                        </a>
                    </div>
                    <h2>1 de Setembro de 2023</h2>
                </div>
            </div> 
        </div>
        <div class="swiper-slide">
            <div class="home-slide two">
                <div class="home-slide--wrapper">
                    <h2>Sim!<br>Ja falta pouco!</h2>
                    <h3>Preparem-se para o rebolation!</h3>
                    <p><strong>Vamos ver a Inês<br>a fazer Breack-dance...<br>E o Guilherme a fazer TWERK !!!</strong></p>
                    <p><strong>Queres o teu ecstasy com vodka ou gin ?</strong></p>
                    <div class="home-slide--cta">
                        <a href="<?php echo esc_url('https://drive.google.com/drive/folders/1y3DZdsiKCJIyVO5C4EreXuyZwsVImNgS?usp=drive_link') ?>" class="cta">
                            <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24" width="24px" fill="#111" style="margin-right: 1em;"><path d="M0 0h24v24H0z" fill="none"/><circle cx="12" cy="12" r="3.2"/><path d="M9 2L7.17 4H4c-1.1 0-2 .9-2 2v12c0 1.1.9 2 2 2h16c1.1 0 2-.9 2-2V6c0-1.1-.9-2-2-2h-3.17L15 2H9zm3 15c-2.76 0-5-2.24-5-5s2.24-5 5-5 5 2.24 5 5-2.24 5-5 5z"/></svg> 
                            Deixa-nos aqui as tuas fotos!
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="swiper-slide"> 
            <div class="home-slide six">
                <div class="home-slide--wrapper">
                    <h2>PATROCÍNIOS<br>
                    <span>para a nossa vida a dois</span></h2> 
                    <p class="texto">E assim, como quem não quer a coisa....<br><em><strong>"Se quiseres ajudar, </strong></em><br><em><strong>nós &nbsp;não dizemos que não!"</strong></em></p>
                    <div class="iban" style="margin-bottom: 30px">
                        <div data-copy="Inês Isabela Ribeiro Braga">
                            <div class="title"><svg xmlns="http://www.w3.org/2000/svg" role="button" height="24" viewBox="0 96 960 960" width="24"><path d="M180 975q-24 0-42-18t-18-42V312h60v603h474v60H180Zm120-120q-24 0-42-18t-18-42V235q0-24 18-42t42-18h440q24 0 42 18t18 42v560q0 24-18 42t-42 18H300Zm0-60h440V235H300v560Zm0 0V235v560Z"/></svg><strong>Conta:</strong></div>
                            <div>Inês Isabela Ribeiro Braga</div>
                        </div> 
                        <div data-copy="PT50001800034474055302056">
                            <div class="title"><svg xmlns="http://www.w3.org/2000/svg" role="button" height="24" viewBox="0 96 960 960" width="24"><path d="M180 975q-24 0-42-18t-18-42V312h60v603h474v60H180Zm120-120q-24 0-42-18t-18-42V235q0-24 18-42t42-18h440q24 0 42 18t18 42v560q0 24-18 42t-42 18H300Zm0-60h440V235H300v560Zm0 0V235v560Z"/></svg><strong>IBAN:</strong></div>
                            <div>PT50 0018 0003 4474 0553 0205 6</div>
                        </div>
                    </div>
                    <div class="home-slide--cta">
                        <a href="<?php echo esc_url(get_permalink(10)) ?>" class="cta">Deixa-nos uma mensagem!</a>
                    </div>
                    <div class="home-slide--cta">
                        <a href="<?php echo esc_url(get_permalink(8)) ?>" class="cta">Como nos contactar</a>
                    </div>
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
                    <p>Comparecer no local pelas 13h30</p>
                </div>
            </div>
        </div>
        <div class="swiper-slide">
            <div class="home-slide five">
                <div class="home-slide--wrapper">
                    <h2>O copo de água!</h2>
                    <h3>Quinta Redolho de Cima</h3>
                    <p>Mais informações serão dadas no final da cerimonia</p>
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
        <!--<div class="swiper-slide"> 
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
        </div>-->
    </div>
    <div class="home-pagination"></div>
</div>

<?php get_footer();