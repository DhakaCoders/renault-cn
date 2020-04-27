<?php 
/*
  Template Name: Overons
*/
get_header();
$thisID = get_the_ID();
get_template_part('templates/page', 'banner');
$showhide_intro = get_field('showhide_intro', $thisID);
$introsec = get_field('introsec', $thisID);
if( $showhide_intro ):
?>
<section class="renault-wieze-sec overons-renault-wieze-sec">
  <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="renault-wieze-sec-cntlr">
            <div class="renault-wieze-sec-fea-img-cntlr">
              <?php if(!empty($introsec['afbeelding'])): ?>
              <span></span>
              <div class="renault-wieze-sec-fea-img" style="background: url(<?php echo cbv_get_image_src($introsec['afbeelding'], 'overons1'); ?>);">
                
              </div>
              <?php endif; ?>
            </div>
            <div class="renault-wieze-sec-des">
              <?php 
                if(!empty($introsec['titel'])) printf('<h2 class="rwsd-title">%s</h2>', $introsec['titel']);
                if(!empty($introsec['subtitel'])) printf('<span class="rwsd-sub-title">%s</span>', $introsec['subtitel']);
                if(!empty($introsec['beschrijving'])) echo wpautop( $introsec['beschrijving'], true );

                $link_1 = $introsec['knop_1'];
                $link_2 = $introsec['knop_2'];
                if( is_array( $link_1 ) &&  !empty( $link_1['url'] ) ){
                  printf('<a href="%s" target="%s">%s</a>', $link_1['url'], $link_1['target'], $link_1['title']); 
                }
                if( is_array( $link_2 ) &&  !empty( $link_2['url'] ) ){
                  printf('<a href="%s" target="%s">%s</a>', $link_2['url'], $link_2['target'], $link_2['title']); 
                }
              ?>
            </div>
          </div>
        </div>
      </div>
  </div>    
</section>
<?php endif; ?>
<?php
  $hshowhide_usp = get_field('showhide_usp', $thisID);
  $uspssec = get_field('uspssec', $thisID);
  $husps = $uspssec['alle_usps'];
  if( $hshowhide_usp ):
?>
<section class="hm-about-us-section overons-about-us-section">
  <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="about-us-sec-cntlr">
            <?php if( $husps ){ ?>
            <div class="fl-aboutUsSlider hmAboutUsSecSlider">
              <?php foreach( $husps as $husp ): ?>
              <div class="fl-about-us-item mHc">
                <?php if( !empty($husp['icon']) ): ?>
                <span class="about-us-item-icon mHc1">
                  <img src="<?php echo $husp['icon']; ?>" alt="<?php echo cbv_get_image_alt( $husp['icon'] ); ?>">
                </span>
                <?php endif; 
                  if( !empty($husp['titel']) ) printf('<h4 class="aui-title mHc2">%s</h4>', $husp['titel']);
                  if( !empty($husp['beschrijving']) ) echo wpautop( $husp['beschrijving'] );
                ?>
              </div>
              <?php endforeach; ?>

            </div>
            <?php } ?>
          </div>
        </div>
      </div>
  </div>    
</section>
<?php endif; ?>
<?php 
$showhide_intro2 = get_field('showhide_intro2', $thisID);
$introsec2 = get_field('introsec2', $thisID);
if( $showhide_intro2 ):
?>
<section class="overons-two-grid-sec-wrp">
  <span></span>
  <div class="overons-two-grid-rgt">
    <?php if(!empty($introsec2['afbeelding'])): ?>
    <div class="overons-two-grid-rgt-img" style="background:url(<?php echo cbv_get_image_src($introsec2['afbeelding'], 'overons2'); ?>);">
      <?php echo cbv_get_image_tag($introsec2['afbeelding'], 'overons2'); ?>
    </div>
    <?php endif; ?>
  </div>
  <div class="container">
    <div class="row">
      <div class="col-sm-12">
        <div class="overons-two-grid-lft">
          <div class="overons-two-grid-lft-dsc">
            <?php 
              if(!empty($introsec2['titel'])) printf('<h3 class="overons-two-grid-lft-dsc-title">%s</h3>', $introsec2['titel']);
              if(!empty($introsec2['beschrijving'])) echo wpautop( $introsec2['beschrijving'], true );
            ?>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<?php endif; ?>
<?php
  $showhide_who = get_field('showhide_who', $thisID);
  $whoarewe = get_field('whoarewe', $thisID);
  $profiles = $whoarewe['whoareprofiles'];
  if( $showhide_who ):
?>
<section class="overons-post-grid-sec-wrp">
  <div class="container">
    <div class="row">
      <div class="col-sm-12">
        <div class="overons-post-grid-wrp">
          <div class="overons-post-grid-head">
            <?php 
              if(!empty($whoarewe['titel'])) printf('<h4 class="overons-post-grid-head-title">%s</h4>', $whoarewe['titel']);
              if(!empty($whoarewe['beschrijving'])) echo wpautop( $whoarewe['beschrijving'], true );
            ?>
          </div>
          <?php if( $profiles ): ?>
          <div class="overons-post-grid-dsc-wrp">
            <ul class="clearfix reset-list">
              <?php foreach( $profiles as $profile ): ?>
              <li>
                <div class="overons-post-grid-dsc-inr">
                  <div class="overons-post-grid-img-cntlr">
                  <?php if( !empty($profile['knop']) ): ?>
                    <a href="<?php echo $profile['knop']; ?>" class="overlay-link"></a>
                  <?php endif; ?>
                  <?php if(!empty($profile['afbeelding'])): ?>
                    <div class="overons-post-grid-img" style="background:url(<?php echo cbv_get_image_src($profile['afbeelding']); ?>);">
                    </div>
                  <?php endif; ?>
                  </div>
                  <div class="overons-post-grid-dsc mHc">
                    <?php 
                    if( !empty($profile['knop']) ){
                      if(!empty($profile['naam'])) printf('<h4 class="overons-post-grid-dsc-title mHc1"><a href="%s">%s</a></h4>', $profile['knop'], $profile['naam']);
                    } else {
                      if(!empty($profile['naam'])) printf('<h4 class="overons-post-grid-dsc-title mHc1">%s</h4>', $profile['naam']);
                    }
                    if(!empty($profile['aanwijzing'])) printf('<span>%s</span>', $profile['aanwijzing']);
                    if(!empty($profile['beschrijving'])) printf('<p class="mHc2">%s</p>', $profile['beschrijving']);
                    ?>
                  </div>
                </div>
              </li>
              <?php endforeach; ?>
            </ul>
          </div>
          <?php endif; ?>
        </div>
      </div>
    </div>
  </div>
</section>
<?php endif; ?>
<?php
$Query = new WP_Query(array(
  'post_type' => 'testimonial',
  'posts_per_page'=> -1,
));
if( $Query->have_posts() ){
?>
<section class="rw-blockcode-slider-sec-wrp">
  <div class="container">
    <div class="row">
      <div class="col-sm-12">
        <div class="rw-blockcode-slider-wrp">
          <div class="rwblockcodearrows">
            <span class="leftArrow">
              <i>
                <svg class="left-arrow-iocn-svg" width="17" height="28" viewBox="0 0 17 28" fill="#fff">
                  <use xlink:href="#left-arrow-iocn-svg"></use>
                </svg> 
              </i>
            </span>
            <span class="rightArrow">
              <i>
                <svg class="right-arrow-iocn-svg" width="17" height="28" viewBox="0 0 17 28" fill="#fff">
                  <use xlink:href="#right-arrow-iocn-svg"></use>
                </svg> 
              </i>
            </span>
          </div>
          <div class="rw-blockcode-slider">
            <?php 
              while($Query->have_posts()): $Query->the_post(); 
              $fc_diensten = get_field('beschrijving', get_the_ID());
              $naam = get_field('naam', get_the_ID());
              $positie = get_field('positie', get_the_ID());
            ?>
            <div class="rw-blockcode-slide-item">
              <div class="rw-blockcode-slide-item-dsc">
                <i>
                  <svg class="blockquote-icon-svg" width="88" height="89" viewBox="0 0 88 89" fill="#fff">
                    <use xlink:href="#blockquote-icon-svg"></use>
                  </svg> 
                </i>
                <?php 
                  printf('<blockquote>%s</blockquote>', $fc_diensten);
                  printf('<strong class="rw-blockcode-title">-%s, %s</strong>', $naam, $positie);
                ?>
              </div>
            </div>
          <?php endwhile; ?>
        </div>
      </div>
    </div>
  </div>
</section>
<?php wp_reset_postdata(); } ?>
<?php get_template_part('templates/section', 'offerte'); ?>
<?php get_footer(); ?>