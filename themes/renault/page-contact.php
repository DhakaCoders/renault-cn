<?php 
/*
	Template Name: Contact
*/
get_header();
while ( have_posts() ) :
  the_post();
$thisID = get_the_ID();
$spacialArry = array(".", "/", "+", " ");$replaceArray = '';
$e_mailadres = get_field('emailaddress', 'options');
$show_telefoon = get_field('telephone', 'options');
$telefoon = trim(str_replace($spacialArry, $replaceArray, $show_telefoon));

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
              <form class="wpforms-form">
                
                <div class="wpforms-field-container">
                  
                  <div class="wpforms-field VrnCustomField">
                    <label class="wpforms-field-label">Voornaam </label>
                    <input type="text" name="name" placeholder="Mathias" required>
                  </div>
                  <div class="wpforms-field VrnCustomField">
                    <label class="wpforms-field-label">Achternaam</label>
                    <input type="text" name="name" placeholder="Her |" required>
                  </div>

                  <div class="wpforms-field">
                    <label class="wpforms-field-label">Telefoon </label>
                    <input type="tel" name="text" placeholder="Telefoon" required>
                  </div>

                  <div class="wpforms-field wpforms-has-error">
                    <label class="wpforms-field-label">E-mailadres</label>
                    <input type="email" name="email" placeholder="mathias2conversalbe" class="form-control" required>
                    <label class="wpforms-error">x incorrecte email</label>
                  </div>

                  <div class="wpforms-field subjectField">
                    <label class="wpforms-field-label">onderwerpen</label>
                    <input type="subject" name="text" placeholder="Onderwerpen" required>
                  </div>

                  <div class="wpforms-field wpforms-field-textarea">
                    <label class="wpforms-field-label">Bericht</label>
                    <textarea name="message" placeholder="Bericht"></textarea>
                  </div>
                </div><!-- end of .wpforms-field-container-->
                <div class="wpforms-submit-container">
                  <button type="submit" name="submit" class="wpforms-submit">VeRZENDEN</button>
                </div>

              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>    
</section>

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
                <h6 class="contact-info-item-dsc-title">Contact Mekaniek</h6>
                <ul class="ulc reset-list clearfix">
                  <li>
                    <a href="#" target="_blank">
                      <i>
                        <svg class="ftr-map-icon-svg" width="16" height="22" viewBox="0 0 16 22" fill="#232531">
                          <use xlink:href="#ftr-map-icon-svg"></use>
                        </svg> 
                      </i>
                      <span>Nieuwstraat 68 <br> 9280 Wieze <br> Oost-Vlaanderen</span>
                    </a>
                  </li>
                  <li>
                    <a href="tel:053/77.52.30">
                      <i>
                        <svg class="ftr-cell-icon-svg" width="14" height="25" viewBox="0 0 14 25" fill="#232531">
                          <use xlink:href="#ftr-cell-icon-svg"></use>
                        </svg> 
                      </i>
                      <span>053/77.52.30</span>
                    </a>
                  </li>
                  <li>
                    <a href="mailto:afspraak@renaultwieze.be">
                      <i>
                        <svg class="ftr-mail-icon-svg" width="18" height="18" viewBox="0 0 18 18" fill="#232531">
                          <use xlink:href="#ftr-mail-icon-svg"></use>
                        </svg> 
                      </i>
                      <span>afspraak@renaultwieze.be</span>
                    </a>
                  </li>
                </ul> 
                <div class="contact-info-btn">
                  <a href="#">Route</a>
                </div>
              </div>
              <div class="contact-info-dsc-item info-dsc-item-mrg">
                <h6 class="contact-info-item-dsc-title">Showroom</h6>
                <ul class="reset-list clearfix">
                  <li>
                    <i>
                      <svg class="contact-time-icon-svg" width="22" height="22" viewBox="0 0 22 22" fill="#232531">
                        <use xlink:href="#contact-time-icon-svg"></use>
                      </svg> 
                    </i>
                    <span>Ma-Do : 8u - 2u & 13u-18u30</span>
                  </li>
                  <li>
                    <span>Vrij :  8u - 12u  & 13u-18u30</span>
                  </li>
                  <li>
                    <span>Zat : 9u - 17u</span>
                  </li>
                </ul> 
              </div>
              <div class="contact-info-dsc-item info-dsc-item-mrg">
                <h6 class="contact-info-item-dsc-title">Naverkoop</h6>
                <ul class="reset-list clearfix">
                  <li>
                    <i>
                      <svg class="contact-time-icon-svg" width="22" height="22" viewBox="0 0 22 22" fill="#232531">
                        <use xlink:href="#contact-time-icon-svg"></use>
                      </svg> 
                    </i>
                    <span>Ma-Do : 8u - 12u  & 13u-18u</span>
                  </li>
                  <li>
                    <span>Vrij :  8u - 12u  & 13u-17u</span>
                  </li>
                  <li>
                    <span>Zat : 9u - 13u</span>
                  </li>
                </ul> 
              </div>
            </div>
          </div> 
          <div class="tabs">
            <div class="contact-info-dsc-wrp clearfix">
              <div class="contact-info-dsc-item">
                <h6 class="contact-info-item-dsc-title">Contact Mekaniek</h6>
                <ul class="reset-list clearfix">
                  <li>
                    <a href="#" target="_blank">
                      <i>
                        <svg class="ftr-map-icon-svg" width="16" height="22" viewBox="0 0 16 22" fill="#232531">
                          <use xlink:href="#ftr-map-icon-svg"></use>
                        </svg> 
                      </i>
                      <span>Nieuwstraat 68 <br> 9280 Wieze <br> Oost-Vlaanderen</span>
                    </a>
                  </li>
                  <li>
                    <a href="tel:053/77.52.30">
                      <i>
                        <svg class="ftr-cell-icon-svg" width="14" height="25" viewBox="0 0 14 25" fill="#232531">
                          <use xlink:href="#ftr-cell-icon-svg"></use>
                        </svg> 
                      </i>
                      <span>053/77.52.30</span>
                    </a>
                  </li>
                  <li>
                    <a href="mailto:afspraak@renaultwieze.be">
                      <i>
                        <svg class="ftr-mail-icon-svg" width="18" height="18" viewBox="0 0 18 18" fill="#232531">
                          <use xlink:href="#ftr-mail-icon-svg"></use>
                        </svg> 
                      </i>
                      <span>afspraak@renaultwieze.be</span>
                    </a>
                  </li>
                </ul> 
                <div class="contact-info-btn">
                  <a href="#">Route</a>
                </div>
              </div>
              <div class="contact-info-dsc-item info-dsc-item-mrg">
                <h6 class="contact-info-item-dsc-title">Showroom</h6>
                <ul class="reset-list clearfix">
                  <li>
                    <i>
                      <svg class="contact-time-icon-svg" width="22" height="22" viewBox="0 0 22 22" fill="#232531">
                        <use xlink:href="#contact-time-icon-svg"></use>
                      </svg> 
                    </i>
                    <span>Ma-Do : 8u - 2u & 13u-18u30</span>
                  </li>
                  <li>
                    <span>Vrij :  8u - 12u  & 13u-18u30</span>
                  </li>
                  <li>
                    <span>Zat : 9u - 17u</span>
                  </li>
                </ul> 
              </div>
              <div class="contact-info-dsc-item info-dsc-item-mrg">
                <h6 class="contact-info-item-dsc-title">Naverkoop</h6>
                <ul class="reset-list clearfix">
                  <li>
                    <i>
                      <svg class="contact-time-icon-svg" width="22" height="22" viewBox="0 0 22 22" fill="#232531">
                        <use xlink:href="#contact-time-icon-svg"></use>
                      </svg> 
                    </i>
                    <span>Ma-Do : 8u - 12u  & 13u-18u</span>
                  </li>
                  <li>
                    <span>Vrij :  8u - 12u  & 13u-17u</span>
                  </li>
                  <li>
                    <span>Zat : 9u - 13u</span>
                  </li>
                </ul> 
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
<?php 
endwhile; 
get_footer(); 
?>