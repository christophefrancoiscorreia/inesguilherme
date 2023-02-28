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
            <div class="home-slide one"></div>
        </div>
        <div class="swiper-slide">
            <div class="home-slide two"></div>
        </div>
        <div class="swiper-slide">
            <div class="home-slide three"></div>
        </div>
        <div class="swiper-slide"> 
            <div class="home-slide four"></div>
        </div>
        <div class="swiper-slide">
            <div class="home-slide five"></div>
        </div>
        <div class="swiper-slide"> 
            <div class="home-slide six"></div>
        </div>
    </div>
    <div class="home-pagination"></div>
</div>

<?php get_footer();