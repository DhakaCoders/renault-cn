<?php 

get_header(); 
  $slidersec = get_field('slidersec', HOMEID);
  $hslides = $slidersec['slides'];
  if($hslides):
?>
<section class="main-slider-section">
  <div class="main-slider-prv-nxt">
    <span class="msprev">
      <i>
        <svg class="prev-arrow-white-svg" width="17" height="28" viewBox="0 0 17 28" fill="#fff">
          <use xlink:href="#prev-arrow-white-svg"></use>
        </svg> 
      </i>
    </span>
    <span class="msnxt">
      <i>
        <svg class="next-arrow-white-svg" width="17" height="28" viewBox="0 0 17 28" fill="#fff">
          <use xlink:href="#next-arrow-white-svg"></use>
        </svg> 
      </i>
    </span>
  </div>
  <div class="main-slider mainSlider">
    <?php
      foreach( $hslides as $hslide ): 
    ?>
    <div class="mainSlide-item">
      <div class="clearfix mainSlide-item-inr">
        <?php if( !empty($hslide['afbeelding']) ): ?>
        <div class="main-slide-fea-img" style="background: url(<?php echo cbv_get_image_src($hslide['afbeelding'], 'homeslide'); ?>);">
        </div>
        <?php endif; ?>
        <div class="main-slide-des">
          <div class="main-slide-des-inr clearfix">
            <div class="main-slide-des-cnter-cntlr">
              <i class="black-traingle"><img src="<?php echo THEME_URI; ?>/assets/images/black-traingle.png"></i>
              <div>
              <?php
              if( $hslide['layout_type'] == 2 ){
                $dslide = $hslide['layout_two'];
                if( !empty($dslide['titel']) ) printf('<strong class="msd-title">%s</strong>', $dslide['titel']);
                if( !empty($dslide['subtitel']) ) printf('<span class="msd-sub-title">%s</span>', $dslide['subtitel']);
                if( !empty($dslide['beschrijving']) ) echo wpautop( $dslide['beschrijving'] );
              } else {
                $dslide = $hslide['layout_one'];
                if( !empty($dslide['titel']) ) printf('<strong class="msd-title">%s</strong>', $dslide['titel']);
                if( !empty($dslide['subtitel']) ) printf('<span class="msd-sub-title">%s</span>', $dslide['subtitel']);
                if( !empty($dslide['beschrijving']) ) echo wpautop( $dslide['beschrijving'] );
              }
              ?>
                <div class="main-slide-btns">
                <?php 
                  $knop1 = $hslide['knop_1'];
                  $knop2 = $hslide['knop_2'];
                  if( is_array( $knop1 ) &&  !empty( $knop1['url'] ) ){
                      printf('<div class="msb-1"><a href="%s" target="%s">%s</a></div>', $knop1['url'], $knop1['target'], $knop1['title']); 
                  }
                  if( is_array( $knop2 ) &&  !empty( $knop2['url'] ) ){
                      printf('<div class="msb-2"><a href="%s" target="%s">%s</a></div>', $knop2['url'], $knop2['target'], $knop2['title']); 
                  } 
                ?>
                </div>
              </div>
            </div>
            <div class="slider-features">
              <div class="slider-features-cntlr">
                <?php 
                if( $hslide['layout_type'] == 2 ): 
                  $spslide = $hslide['layout_two']['specificaties'];
                ?>
                  <?php if( !empty($spslide['titel']) ) printf('<div><strong class="sfc-title-2">%s</strong></div>', $spslide['titel']); ?>
                <?php 
                  else:  
                  $spslide = $hslide['layout_one']['specificaties'];
                ?>
                <div>
                  <?php if( !empty($spslide['titel']) ) printf('<strong class="sfc-title">%s</strong>', $spslide['titel']); ?>
                  <div class="slider-features-icon-cntlr">
                    <?php if( !empty($spslide['fuel_type']) ): ?>
                    <div>
                      <i>
                        <svg class="s-fea-icon-01-svg" width="20" height="20" viewBox="0 0 20 20" fill="#232531">
                          <use xlink:href="#s-fea-icon-01-svg"></use>
                        </svg> 
                      </i>
                      <span><?php echo $spslide['fuel_type']; ?></span>
                    </div>
                  <?php endif; if( !empty($spslide['edisplacement']) ): ?>
                    <div>
                      <i>
                        <svg class="s-fea-icon-02-svg" width="20" height="20" viewBox="0 0 20 20" fill="#232531">
                          <use xlink:href="#s-fea-icon-02-svg"></use>
                        </svg> 
                      </i>
                      <span><?php echo $spslide['edisplacement']; ?> cm3</span>
                    </div>
                    <?php endif; if( !empty($spslide['bhp']) ): ?>
                    <div>
                      <i>
                        <svg class="s-fea-icon-03-svg" width="20" height="20" viewBox="0 0 20 20" fill="#232531">
                          <use xlink:href="#s-fea-icon-03-svg"></use>
                        </svg> 
                      </i>
                      <span><?php echo $spslide['bhp']; ?> bhp</span>
                    </div>
                    <?php endif; if( !empty($spslide['fwd']) ): ?>
                    <div>
                      <i>
                        <svg class="s-fea-icon-04-svg" width="20" height="20" viewBox="0 0 20 20" fill="#232531">
                          <use xlink:href="#s-fea-icon-04-svg"></use>
                        </svg> 
                      </i>
                      <span><?php echo $spslide['fwd']; ?></span>
                    </div>
                  <?php endif;?>
                  </div>
                </div>
                <?php endif; ?>
              </div>
              <div class="slide-date-title-area">
                <strong>
                  <i>
                    <svg class="white-calender-icon-svg" width="24" height="24" viewBox="0 0 24 24" fill="#ffffff">
                      <use xlink:href="#white-calender-icon-svg"></use>
                    </svg> 
                  </i>
                  <span>Proefrit reserveren</span>
                </strong>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <?php endforeach; ?>
  </div>    
</section>
<?php endif; ?>

<section class="hm-cat-boxes-section">
 <div class="container">
   <div class="row">
     <div class="col-md-12">
       <div class="hm-cat-boxes-sec-cntlr">
         <ul class="reset-list clearfix">
           <li>
             <div class="dft-renault-area">
              <div class="dft-renault-item clearfix">
                <a class="overlay-link" href=""></a>
                <div class="dft-renault-item-fea-img" style="background: url(<?php echo THEME_URI; ?>/assets/images/hm-cat-img-01.jpg);">
                </div>
                <div class="dft-renault-item-des">
                  <div>
                    <strong class="my-renault-title">Verkoop</strong>
                    <i class="drif-arrow-icon"></i>
                  </div>
                </div>
              </div>
            </div>
           </li>
           <li>
             <div class="dft-renault-area">
              <div class="dft-renault-item clearfix">
                <a class="overlay-link" href=""></a>
                <div class="dft-renault-item-fea-img" style="background: url(<?php echo THEME_URI; ?>/assets/images/hm-cat-img-02.jpg);">
                </div>
                <div class="dft-renault-item-des">
                  <div>
                    <strong class="my-renault-title">Online afspraak</strong>
                    <i class="drif-arrow-icon"></i>
                  </div>
                </div>
              </div>
            </div>
           </li>
           <li>
             <div class="dft-renault-area">
              <div class="dft-renault-item clearfix">
                <a class="overlay-link" href=""></a>
                <div class="dft-renault-item-fea-img" style="background: url(<?php echo THEME_URI; ?>/assets/images/hm-cat-img-03.jpg);">
                </div>
                <div class="dft-renault-item-des">
                  <div>
                    <strong class="my-renault-title">Naverkoop</strong>
                    <i class="drif-arrow-icon"></i>
                  </div>
                </div>
              </div>
            </div>
           </li>
           <li>
             <div class="dft-renault-area">
              <div class="dft-renault-item clearfix">
                <a class="overlay-link" href=""></a>
                <div class="dft-renault-item-fea-img" style="background: url(<?php echo THEME_URI; ?>/assets/images/hm-cat-img-04.jpg);">
                </div>
                <div class="dft-renault-item-des">
                  <div>
                    <strong class="my-renault-title">Carrosserie</strong>
                    <i class="drif-arrow-icon"></i>
                  </div>
                </div>
              </div>
            </div>
           </li>
         </ul>
       </div>
     </div>
   </div>
 </div>
</section>


<section class="show-sm sm-slider-content-sec">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="sm-slider-con-sec-inr">
          <h3>In de kijker</h3>
          <div class="sm-slider-con-sec-fea-img">
            <img src="<?php echo THEME_URI; ?>/assets/images/sm-slider-con-sec-fea-img.jpg">
          </div>
          <div class="slider-features-cntlr">
            <div class="clearfix">
              <strong class="sfc-title">Renault Talisman Blue dCi 150 S-Edition</strong>
              <div class="slider-features-icon-cntlr clearfix">
                <div>
                  <i>
                    <svg class="s-fea-icon-01-svg" width="20" height="20" viewBox="0 0 20 20" fill="#232531">
                      <use xlink:href="#s-fea-icon-01-svg"></use>
                    </svg> 
                  </i>
                  <span>Diesel</span>
                </div>
                <div>
                  <i>
                    <svg class="s-fea-icon-02-svg" width="20" height="20" viewBox="0 0 20 20" fill="#232531">
                      <use xlink:href="#s-fea-icon-02-svg"></use>
                    </svg> 
                  </i>
                  <span>1749 cm3</span>
                </div>
                <div>
                  <i>
                    <svg class="s-fea-icon-03-svg" width="20" height="20" viewBox="0 0 20 20" fill="#232531">
                      <use xlink:href="#s-fea-icon-03-svg"></use>
                    </svg> 
                  </i>
                  <span>148 bhp</span>
                </div>
                <div>
                  <i>
                    <svg class="s-fea-icon-04-svg" width="20" height="20" viewBox="0 0 20 20" fill="#232531">
                      <use xlink:href="#s-fea-icon-04-svg"></use>
                    </svg> 
                  </i>
                  <span>FWD</span>
                </div>
              </div>
            </div>
          </div>

          <div class="slide-date-title-area">
            <strong>
              <i>
                <svg class="white-calender-icon-svg" width="24" height="24" viewBox="0 0 24 24" fill="#ffffff">
                  <use xlink:href="#white-calender-icon-svg"></use>
                </svg> 
              </i>
              <span>Proefrit reserveren</span>
            </strong>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>


<section class="hm-tweedehands-section">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="hm-tweedehands-sec-hdr">
          <h2 class="hmts-hdr-title">Tweedehands</h2>
          <p>Nam nulla lacus, euismod sit amet mollis sed, efficitur sit amet lorem. Proin efficitur ultricies dolor ac lacinia. </p>
        </div>
      </div>
      <div class="col-md-12">
        <div class="hm-tweedehands-sec-products">
          <div class="rn-grid-sec clearfix">
              <div class="rn-grid-item">
                <div class="rn-grid-item-img-ctlr">
                  <a href="#" class="overlay-link"></a>
                  <div class="rn-grid-item-img" style="background: url('<?php echo THEME_URI; ?>/assets/images/rn-td-grid-item-1.jpg');">
                    
                  </div>
                </div>
                <div class="rn-grid-item-hdr">
                  <h3 class="rn-grid-item-title mHc1"><a href="#">Renault Talisman Blue dCi 150 S-Edition</a></h3>
                  <strong>Prijs: € 20.500 </strong>
                  <span>(BTW incl)</span>
                </div>
                <div class="rn-grid-item-ftr clearfix">
                  <div class="rn-grid-item-ftr-race">
                    <span>
                    19.792 Km.
                      <i>
                        <svg class="rn-td-race-svg" width="20" height="20" viewBox="0 0 20 20" fill="#232531">
                          <use xlink:href="#rn-td-race-svg"></use>
                        </svg> 
                      </i>
                    </span>
                  </div>
                  <div class="rn-grid-item-ftr-calender">
                    <span>
                    20.04.19
                      <i>
                        <svg class="rn-td-calender-svg" width="20" height="20" viewBox="0 0 20 20" fill="#232531">
                          <use xlink:href="#rn-td-calender-svg"></use>
                        </svg> 
                      </i>
                    </span>
                  </div>
                  <div class="rn-grid-item-ftr-gas-station">
                    <span>
                    Diesel
                      <i>
                        <svg class="rn-td-gas-station-svg" width="20" height="20" viewBox="0 0 20 20" fill="#232531">
                          <use xlink:href="#rn-td-gas-station-svg"></use>
                        </svg> 
                      </i>
                    </span>
                  </div>
                  <div class="rn-grid-item-ftr-power">
                    <span>
                    1749 cm3
                      <i>
                        <svg class="rn-td-power-svg" width="20" height="20" viewBox="0 0 20 20" fill="#232531">
                          <use xlink:href="#rn-td-power-svg"></use>
                        </svg> 
                      </i>
                    </span>
                  </div>
                </div>
                <div class="rn-grid-item-des">
                  <p class="mHc2">12V-aansluiting voor- en achteraan , Airco , Elektrische Ruiten , Multifunctioneel stuur ,...</p>
                  <a href="#">Bekijk</a>
                </div>
              </div>
              <div class="rn-grid-item">
                <div class="rn-grid-item-img-ctlr">
                  <a href="#" class="overlay-link"></a>
                  <div class="rn-grid-item-img" style="background: url('<?php echo THEME_URI; ?>/assets/images/rn-td-grid-item-2.jpg');">
                  
                  </div>
                </div>
                <div class="rn-grid-item-hdr">
                  <h3 class="rn-grid-item-title mHc1"><a href="#">Renault Talisman Blue dCi 150 S-Edition</a></h3>
                  <strong>Prijs: € 20.500 </strong>
                  <span>(BTW incl)</span>
                </div>
                <div class="rn-grid-item-ftr clearfix">
                  <div class="rn-grid-item-ftr-race">
                    <span>
                    19.792 Km.
                      <i>
                        <svg class="rn-td-race-svg" width="20" height="20" viewBox="0 0 20 20" fill="#232531">
                          <use xlink:href="#rn-td-race-svg"></use>
                        </svg> 
                      </i>
                    </span>
                  </div>
                  <div class="rn-grid-item-ftr-calender">
                    <span>
                    20.04.19
                      <i>
                        <svg class="rn-td-calender-svg" width="20" height="20" viewBox="0 0 20 20" fill="#232531">
                          <use xlink:href="#rn-td-calender-svg"></use>
                        </svg> 
                      </i>
                    </span>
                  </div>
                  <div class="rn-grid-item-ftr-gas-station">
                    <span>
                    Diesel
                      <i>
                        <svg class="rn-td-gas-station-svg" width="20" height="20" viewBox="0 0 20 20" fill="#232531">
                          <use xlink:href="#rn-td-gas-station-svg"></use>
                        </svg> 
                      </i>
                    </span>
                  </div>
                  <div class="rn-grid-item-ftr-power">
                    <span>
                    1749 cm3
                      <i>
                        <svg class="rn-td-power-svg" width="20" height="20" viewBox="0 0 20 20" fill="#232531">
                          <use xlink:href="#rn-td-power-svg"></use>
                        </svg> 
                      </i>
                    </span>
                  </div>
                </div>
                <div class="rn-grid-item-des">
                  <p class="mHc2">12V-aansluiting voor- en achteraan , Airco , Elektrische Ruiten , Multifunctioneel stuur ,...</p>
                  <a href="#">Bekijk</a>
                </div>
              </div>
              <div class="rn-grid-item">
                <div class="rn-grid-item-img-ctlr">
                  <a href="#" class="overlay-link"></a>
                  <div class="rn-grid-item-img" style="background: url('<?php echo THEME_URI; ?>/assets/images/rn-td-grid-item-3.jpg');">
                  
                  </div>
                </div>
                <div class="rn-grid-item-hdr">
                  <h3 class="rn-grid-item-title mHc1"><a href="#">Renault Talisman Blue dCi 150 S-Edition</a></h3>
                  <strong>Prijs: € 20.500 </strong>
                  <span>(BTW incl)</span>
                </div>
                <div class="rn-grid-item-ftr clearfix">
                  <div class="rn-grid-item-ftr-race">
                    <span>
                    19.792 Km.
                      <i>
                        <svg class="rn-td-race-svg" width="20" height="20" viewBox="0 0 20 20" fill="#232531">
                          <use xlink:href="#rn-td-race-svg"></use>
                        </svg> 
                      </i>
                    </span>
                  </div>
                  <div class="rn-grid-item-ftr-calender">
                    <span>
                    20.04.19
                      <i>
                        <svg class="rn-td-calender-svg" width="20" height="20" viewBox="0 0 20 20" fill="#232531">
                          <use xlink:href="#rn-td-calender-svg"></use>
                        </svg> 
                      </i>
                    </span>
                  </div>
                  <div class="rn-grid-item-ftr-gas-station">
                    <span>
                    Diesel
                      <i>
                        <svg class="rn-td-gas-station-svg" width="20" height="20" viewBox="0 0 20 20" fill="#232531">
                          <use xlink:href="#rn-td-gas-station-svg"></use>
                        </svg> 
                      </i>
                    </span>
                  </div>
                  <div class="rn-grid-item-ftr-power">
                    <span>
                    1749 cm3
                      <i>
                        <svg class="rn-td-power-svg" width="20" height="20" viewBox="0 0 20 20" fill="#232531">
                          <use xlink:href="#rn-td-power-svg"></use>
                        </svg> 
                      </i>
                    </span>
                  </div>
                </div>
                <div class="rn-grid-item-des">
                  <p class="mHc2">12V-aansluiting voor- en achteraan , Airco , Elektrische Ruiten , Multifunctioneel stuur ,...</p>
                  <a href="#">Bekijk</a>
                </div>
              </div>
            </div>
        </div>
      </div>
    </div>
  </div>
</section>
<?php
  $showhide_verkoop = get_field('showhide_verkoop', HOMEID);
  $verkoopsec = get_field('verkoopsec', HOMEID);
  if( $showhide_verkoop ):
?>
<section class="hm-verkoop-section">
  <div class="container">
    <div class="row">
      <div class="col-sm-12">
        <div class="hm-verkoop-sec-hdr">
          <?php 
            if(!empty($verkoopsec['titel'])) printf('<h2 class="hmvshdr-title">%s</h2>', $verkoopsec['titel']);
            if(!empty($verkoopsec['beschrijving'])) echo wpautop( $verkoopsec['beschrijving'], true );
          ?>
        </div>
        <div class="hm-verkoop-filters-tabs fl-tabs">
          <button class="tab-link current" data-tab="tab-1"><span>Renault</span></button>
          <button class="tab-link" data-tab="tab-2"><span>Dacia</span></button>
        </div>
      </div>
      <?php 
        $verkoop_query = new WP_Query(array( 
          'post_type'=> 'verkoops',
          'post_status' => 'publish',
          'posts_per_page' => -1,
          'orderby' => 'date',
          'order'=> 'desc'
          ) 
        );
      ?>
      <?php if($verkoop_query->have_posts()): ?>
      <div class="col-md-12">
        <div class="filters-content">
          <div id="tab-1" class="fl-tab-content current">
            <div class="hm-verkoop-slider hmVerkoopSlider">
            <?php 
              $cat_slug = '';
              while($verkoop_query->have_posts()): $verkoop_query->the_post();
                $vknop = get_field('knop', get_the_ID()); 
                $beschrijving = get_field('beschrijving', get_the_ID()); 
                $afbeelding = get_field('afbeelding', get_the_ID()); 
                $post_terms = get_the_terms( get_the_ID(), 'verkoop_cat' );
                if ( ! empty( $post_terms ) && ! is_wp_error( $post_terms ) ) {
                  foreach ( $post_terms as $post_term ) {
                    $cat_slug = $post_term->slug;
                  }
                }
            ?>
              <div class="hmVerkoopSlideItem <?php echo !empty($cat_slug)? $cat_slug: '';?>">
                <div class="vrk-product-grid-item">
                  <div class="vrk-product-grid-img-cntlr">
                    <div class="vrk-product-grid-img">
                      <?php if( !empty($vknop) ): ?>
                      <a href="<?php echo $vknop; ?>">
                        <?php if( !empty($afbeelding) ){ ?>
                          <?php echo cbv_get_image_tag($afbeelding); ?>
                        <?php } ?>
                      </a>
                      <?php else: ?>
                        <?php if( !empty($afbeelding) ){ ?>
                          <?php echo cbv_get_image_tag($afbeelding); ?>
                        <?php } ?>
                      <?php endif; ?>
                    </div>
                  </div>
                  <div class="vrk-product-grid-dsc mHc">
                    <h3 class="vrk-product-grid-dsc-title mHc1">
                      <?php if( !empty($vknop) ): ?>
                      <a href="<?php echo $vknop; ?>"><?php the_title(); ?></a>
                      <?php else: ?>
                        <?php the_title(); ?>
                      <?php endif; ?>
                    </h3>
                    <?php if( !empty($beschrijving) ) printf('<p class="mHc2">%s</p>', $beschrijving); ?>
                    <?php if( !empty($vknop) ): ?>
                    <a href="<?php echo $vknop; ?>">
                      <i>
                        <svg class="vrk-product-grid-angle-svg" width="6" height="10" viewBox="0 0 6 10" fill="#CBCBCB">
                          <use xlink:href="#vrk-product-grid-angle-svg"></use>
                        </svg> 
                      </i>
                    </a>
                    <?php else: ?>
                    <a>
                      <i>
                        <svg class="vrk-product-grid-angle-svg" width="6" height="10" viewBox="0 0 6 10" fill="#CBCBCB">
                          <use xlink:href="#vrk-product-grid-angle-svg"></use>
                        </svg> 
                      </i>
                    </a>
                    <?php endif; ?>
                  </div>
                </div>
              </div>
              <?php endwhile; ?>
            </div>
            <?php 
              $link_7 = $verkoopsec['knop'];
              if( is_array( $link_7 ) &&  !empty( $link_7['url'] ) ){
                printf('<div class="fl-pro-more-btn"><a href="%s" target="%s">%s</a></div>', $link_7['url'], $link_7['target'], $link_7['title']); 
              }
            ?>
          </div>
        </div>
      </div>
      <?php 
        endif;  
        wp_reset_postdata();
      ?>
    </div>
  </div>
</section>
<?php endif; ?>

<?php
  $showhide_intro2 = get_field('showhide_intro2', HOMEID);
  $introsec2 = get_field('introsec2', HOMEID);
  if( $showhide_intro2 ):
?>
<section class="renault-wieze-sec">
  <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="renault-wieze-sec-cntlr">
            <div class="renault-wieze-sec-fea-img-cntlr">
              <?php if(!empty($introsec2['afbeelding'])): ?>
              <span></span>
              <div class="renault-wieze-sec-fea-img" style="background: url(<?php echo cbv_get_image_src($introsec2['afbeelding'], 'overons1'); ?>);">
                
              </div>
              <?php endif; ?>
            </div>
            <div class="renault-wieze-sec-des">
              <?php 
                if(!empty($introsec2['titel'])) printf('<h2 class="rwsd-title">%s</h2>', $introsec2['titel']);
                if(!empty($introsec2['subtitel'])) printf('<span class="rwsd-sub-title">%s</span>', $introsec2['subtitel']);
                if(!empty($introsec2['beschrijving'])) echo wpautop( $introsec2['beschrijving'], true );

                $link_8 = $introsec2['knop'];
                if( is_array( $link_8 ) &&  !empty( $link_8['url'] ) ){
                  printf('<a href="%s" target="%s">%s</a>', $link_8['url'], $link_8['target'], $link_8['title']); 
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
  $hshowhide_usp = get_field('showhide_usp', HOMEID);
  $uspssec = get_field('uspssec', HOMEID);
  $husps = $uspssec['alle_usps'];
  if( $hshowhide_usp ):
?>
<section class="hm-about-us-section">
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
              <?php endif; ?>
                <?php
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
<?php get_template_part('templates/section', 'offerte'); ?>
<?php get_footer(); ?>