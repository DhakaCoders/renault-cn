<?php 
/*
	Template Name: Offerte Formulier
*/
get_header();

$thisID = get_the_ID();
get_template_part('templates/page', 'banner');
$showhide_intro = get_field('showhide_intro', $thisID);
$introsec = get_field('introsec', $thisID);
if( $showhide_intro ):
?>
<section class="offer-contact-form-sec-wrp">
  <div class="container">
    <div class="row">
      <div class="col-sm-12">
        <div class="offer-contact-form-block clearfix">
          <div class="contact-form-dsc">
            <?php 
              if(!empty($introsec['titel'])) printf('<h1 class="contact-form-dsc-title">%s</h1>', $introsec['titel']);
              if(!empty($introsec['beschrijving'])) echo wpautop( $introsec['beschrijving'], true );
            ?>
          </div>
          <div class="contact-form-wrp clearfix">
            <div class="wpforms-container">
              <?php if( !empty( $introsec['form_shortcode'] ) ) echo do_shortcode($introsec['form_shortcode']); ?>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<?php endif; ?>
<?php get_footer(); ?>