<?php 
/*
	Template Name: Contact
*/
get_header();

$thisID = get_the_ID();
$spacialArry = array(".", "/", "+", " ");$replaceArray = '';
$gmap = get_field('google_maps', $thisID);
$contact = get_field('contacteer_ons', $thisID);
$google_map = $gmap['maps'];

get_template_part('templates/page', 'banner');
?>
<section class="rw-contact-form-sec-wrp">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="contact-form-block clearfix">
        <?php if(!empty($contact['afbeelding'])): ?>
          <div class="contact-form-img" style="background:url(<?php echo cbv_get_image_src($contact['afbeelding'], 'contactimg'); ?>);">
            <?php echo cbv_get_image_tag($contact['afbeelding'], 'contactimg'); ?>
          </div>
        <?php endif; ?>
          <div class="contact-form-wrp clearfix">
            <span class="contact-bdr"></span>
            <div class="contact-form-dsc">
			      <?php 
	            if(!empty($contact['titel'])) printf('<h2 class="contact-form-dsc-title">%s</h2>', $contact['titel']);
	            if(!empty($contact['beschrijving'])) echo wpautop( $contact['beschrijving'], true );
          	?>
            </div>
            <div class="wpforms-container">
            	<?php if( !empty( $contact['form_shortcode'] ) ) echo do_shortcode($contact['form_shortcode']); ?>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>    
</section>
<?php 
$cmek = get_field('cmekaniek', 'options');
$ccar = get_field('ccarrosserie', 'options');
$cgmapsurl = $cmek['google_maps'];

$caddress = $cmek['address'];
$cemailadres = $cmek['emailaddress'];
$cshow_telefoon = $cmek['telephone'];
$ctelefoon = trim(str_replace($spacialArry, $replaceArray, $cshow_telefoon));

$craddress = $ccar['address'];
$crgmapsurl = $ccar['google_maps'];
$cremailadres = $ccar['emailaddress'];
$crshow_telefoon = $ccar['telephone'];
$crtelefoon = trim(str_replace($spacialArry, $replaceArray, $crshow_telefoon));
$cgmaplink = !empty($cgmapsurl)?$cgmapsurl: 'javascript:void()';
$crgmaplink = !empty($crgmapsurl)?$crgmapsurl: 'javascript:void()';

$mekaniek = get_field('contacgroup', $thisID);
$mshowrooms = $mekaniek['mshowrooms']['showroom'];
$mnaverkoop = $mekaniek['mnaverkoop']['showroom'];

$cshowrooms = $mekaniek['cshowrooms']['showroom'];
$cnaverkoop = $mekaniek['cnaverkoop']['showroom'];
?>
<section class="contact-info-sec-wrp">
  <div class="container">
    <div class="row">
      <div class="col-sm-12">
        <div class="contact-info-wrp clearfix">
          <div class="contact-info-tabs">
            <ul class="reset-list clearfix info-tabs-menu">
              <li><a href="#tabs">Mekaniek</a></li>
              <li><a href="#tabs">Carrosserie</a></li>
            </ul>
          </div>
          <div class="tabs">
            <div class="contact-info-dsc-wrp clearfix">
              <div class="contact-info-dsc-item">
                <?php _e( '<h6 class="contact-info-item-dsc-title">Contact Mekaniek</h6>', THEME_NAME ); ?>
                <ul class="ulc reset-list clearfix">
                <?php if( !empty($caddress) ): ?>
                 <li>
                    <a href="<?php echo $cgmaplink; ?>" target="_blank">
                      <i>
                        <svg class="ftr-map-icon-svg" width="16" height="22" viewBox="0 0 16 22" fill="#232531">
                          <use xlink:href="#ftr-map-icon-svg"></use>
                        </svg> 
                      </i>
                      <span><?php echo $caddress; ?></span>
                    </a>
                </li>
              	<?php endif; ?>
              	<?php if( !empty($ctelefoon) ): ?>
                <li>
                    <a href="tel:<?php echo $ctelefoon; ?>">
                      <i>
                        <svg class="ftr-cell-icon-svg" width="14" height="25" viewBox="0 0 14 25" fill="#232531">
                          <use xlink:href="#ftr-cell-icon-svg"></use>
                        </svg> 
                      </i>
                      <span><?php echo $cshow_telefoon; ?></span>
                    </a>
                </li>
                <?php endif; ?>
                <?php if( !empty($cemailadres) ): ?>
                <li>
                    <a href="mailto:<?php echo $cemailadres; ?>">
                      <i>
                        <svg class="ftr-mail-icon-svg" width="18" height="18" viewBox="0 0 18 18" fill="#232531">
                          <use xlink:href="#ftr-mail-icon-svg"></use>
                        </svg> 
                      </i>
                      <span><?php echo $cemailadres; ?></span>
                    </a>
                </li>
                <?php endif; ?>
                </ul> 
                <div class="contact-info-btn">
                  <a href="<?php echo $cgmaplink; ?>">Route</a>
                </div>
              </div>
              <div class="contact-info-dsc-item info-dsc-item-mrg">
                <h6 class="contact-info-item-dsc-title">Showroom</h6>
                <?php if( $mshowrooms ): ?>
                <ul class="reset-list clearfix">
                  <?php $i = 1; foreach( $mshowrooms as $mshowroom ): ?>
                  <li>
                  	<?php if( $i==1 ): ?>
                    <i>
                      <svg class="contact-time-icon-svg" width="22" height="22" viewBox="0 0 22 22" fill="#232531">
                        <use xlink:href="#contact-time-icon-svg"></use>
                      </svg> 
                    </i>
                	<?php endif; ?>
                    <?php 
                    $mlabel = ''; if( !empty($mshowroom['label']) ) $mlabel =  $mshowroom['label'].': ';
                    if( !empty($mshowroom['listitem']) ) printf('<span>%s%s</span>', $mlabel, $mshowroom['listitem']);

                    ?>
                  </li>
              	  <?php $i++; endforeach; ?>
                </ul> 
            	<?php endif; ?>
              </div>
              <div class="contact-info-dsc-item info-dsc-item-mrg">
                <h6 class="contact-info-item-dsc-title">Naverkoop</h6>
                <?php if( $mnaverkoop ): ?>
                <ul class="reset-list clearfix">
                  <?php $i = 1; foreach( $mnaverkoop as $mnaverk ): ?>
                  <li>
                  	<?php if( $i==1 ): ?>
                    <i>
                      <svg class="contact-time-icon-svg" width="22" height="22" viewBox="0 0 22 22" fill="#232531">
                        <use xlink:href="#contact-time-icon-svg"></use>
                      </svg> 
                    </i>
                	<?php endif; ?>
                    <?php 
	                    $nlabel = ''; if( !empty($mnaverk['label']) ) $nlabel =  $mnaverk['label'].': ';
	                    if( !empty($mnaverk['listitem']) ) printf('<span>%s%s</span>', $nlabel, $mnaverk['listitem']);
                    ?>
                  </li>
              	  <?php $i++; endforeach; ?>
                </ul> 
            	<?php endif; ?>
              </div>
            </div>
          </div> 
          <div class="tabs">
            <div class="contact-info-dsc-wrp clearfix">
              <div class="contact-info-dsc-item">
                <?php _e( '<h6 class="contact-info-item-dsc-title">Contact Carrosserie</h6>', THEME_NAME ); ?>
                <ul class="ulc reset-list clearfix">
                <?php if( !empty($craddress) ): ?>
                 <li>
                    <a href="<?php echo $crgmaplink; ?>" target="_blank">
                      <i>
                        <svg class="ftr-map-icon-svg" width="16" height="22" viewBox="0 0 16 22" fill="#232531">
                          <use xlink:href="#ftr-map-icon-svg"></use>
                        </svg> 
                      </i>
                      <span><?php echo $craddress; ?></span>
                    </a>
                </li>
              	<?php endif; ?>
              	<?php if( !empty($crtelefoon) ): ?>
                <li>
                    <a href="tel:<?php echo $crtelefoon; ?>">
                      <i>
                        <svg class="ftr-cell-icon-svg" width="14" height="25" viewBox="0 0 14 25" fill="#232531">
                          <use xlink:href="#ftr-cell-icon-svg"></use>
                        </svg> 
                      </i>
                      <span><?php echo $crshow_telefoon; ?></span>
                    </a>
                </li>
                <?php endif; ?>
                <?php if( !empty($cremailadres) ): ?>
                <li>
                    <a href="mailto:<?php echo $cremailadres; ?>">
                      <i>
                        <svg class="ftr-mail-icon-svg" width="18" height="18" viewBox="0 0 18 18" fill="#232531">
                          <use xlink:href="#ftr-mail-icon-svg"></use>
                        </svg> 
                      </i>
                      <span><?php echo $cremailadres; ?></span>
                    </a>
                </li>
                <?php endif; ?>
                </ul> 
                <div class="contact-info-btn">
                  <a href="<?php echo $crgmaplink; ?>">Route</a>
                </div>
              </div>
              <div class="contact-info-dsc-item info-dsc-item-mrg">
                <h6 class="contact-info-item-dsc-title">Showroom</h6>
                <?php if( $cshowrooms ): ?>
                <ul class="reset-list clearfix">
                  <?php $i = 1; foreach( $cshowrooms as $cshowroom ): ?>
                  <li>
                  	<?php if( $i==1 ): ?>
                    <i>
                      <svg class="contact-time-icon-svg" width="22" height="22" viewBox="0 0 22 22" fill="#232531">
                        <use xlink:href="#contact-time-icon-svg"></use>
                      </svg> 
                    </i>
                	<?php endif; ?>
                    <?php 
                    $clabel = ''; if( !empty($cshowroom['label']) ) $clabel =  $cshowroom['label'].': ';
                    if( !empty($mshowroom['listitem']) ) printf('<span>%s%s</span>', $clabel, $cshowroom['listitem']);

                    ?>
                  </li>
              	  <?php $i++; endforeach; ?>
                </ul> 
            	<?php endif; ?>
              </div>
              <div class="contact-info-dsc-item info-dsc-item-mrg">
                <h6 class="contact-info-item-dsc-title">Naverkoop</h6>
                <?php if( $cnaverkoop ): ?>
                <ul class="reset-list clearfix">
                  <?php $i = 1; foreach( $cnaverkoop as $cnaverk ): ?>
                  <li>
                  	<?php if( $i==1 ): ?>
                    <i>
                      <svg class="contact-time-icon-svg" width="22" height="22" viewBox="0 0 22 22" fill="#232531">
                        <use xlink:href="#contact-time-icon-svg"></use>
                      </svg> 
                    </i>
                	<?php endif; ?>
                    <?php 
                    $cnlabel = ''; if( !empty($cnaverk['label']) ) $cnlabel =  $cnaverk['label'].': ';
                    if( !empty($cnaverk['listitem']) ) printf('<span>%s%s</span>', $cnlabel, $cnaverk['listitem']);

                    ?>
                  </li>
              	  <?php $i++; endforeach; ?>
                </ul> 
            	<?php endif; ?>
              </div>
            </div>
          </div> 
        </div>
      </div>
    </div>
  </div>
</section>

<?php if( !empty($google_map) ): ?>
<section class="contact-google-map-wrp">
  <div data-homeurl="<?php echo THEME_URI; ?>" id="googlemap" data-latitude="<?php echo $google_map['lat']; ?>" data-longitude="<?php echo $google_map['lng']; ?>"></div>
</section>
<?php endif; ?>
<?php get_footer(); ?>