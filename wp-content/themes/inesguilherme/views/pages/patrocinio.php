<?php
/**
 * PAGE
 *
 * Template for displaying post
 *
 * @link https://github.com/christophefrancoiscorreia
 *
 * @package WordPress
 * @subpackage Christophe Correia
 * @since 1.0
 * @version 1.0
 */
get_header();

?>
    <!--END HEADER-->

    <!--BODY-->
<div class="patrocinios">
    <div class="patrocinios-wrapper">
        <div class="patrocinios-content">
            <h1><?php echo $title; ?></h1>  
            <?php echo $content; ?>
            <div class="iban">
                <div data-copy="Inês Isabela Ribeiro Braga">
                    <div class="title"><svg xmlns="http://www.w3.org/2000/svg" role="button" height="24" viewBox="0 96 960 960" width="24"><path d="M180 975q-24 0-42-18t-18-42V312h60v603h474v60H180Zm120-120q-24 0-42-18t-18-42V235q0-24 18-42t42-18h440q24 0 42 18t18 42v560q0 24-18 42t-42 18H300Zm0-60h440V235H300v560Zm0 0V235v560Z"/></svg><strong>Conta:</strong></div>
                    <div>Inês Isabela Ribeiro Braga</div>
                </div> 
                <div data-copy="PT50001800034474055302056">
                    <div class="title"><svg xmlns="http://www.w3.org/2000/svg" role="button" height="24" viewBox="0 96 960 960" width="24"><path d="M180 975q-24 0-42-18t-18-42V312h60v603h474v60H180Zm120-120q-24 0-42-18t-18-42V235q0-24 18-42t42-18h440q24 0 42 18t18 42v560q0 24-18 42t-42 18H300Zm0-60h440V235H300v560Zm0 0V235v560Z"/></svg><strong>IBAN:</strong></div>
                    <div>PT50 0018 0003 4474 0553 0205 6</div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
global $post;
structured_data($post);

get_footer(); ?>