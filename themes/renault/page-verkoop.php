<?php 
/*
	Template Name: Verkoop
*/
get_header();

$thisID = get_the_ID();
get_template_part('templates/page', 'banner');
$showhide_intro = get_field('showhide_intro', $thisID);
$introsec = get_field('introsec', $thisID);
?>

<section class="vrk-product-grid-sec-wrp">
  <div class="container">
    <div class="row">
      <div class="col-sm-12">
        <div class="vrk-product-grid-wrp">
          <div class="vrk-product-grid-head">
            <?php 
              if(!empty($introsec['titel'])) printf('<h2 class="vrk-product-grid-head-title">%s</h2>', $introsec['titel']);
              if(!empty($introsec['beschrijving'])) echo wpautop( $introsec['beschrijving'], true );
            ?>
          </div>
          <div class="vrk-product-grid-tabs-wrp clearfix">
            <div class="vrk-product-grid-tabs">
              <ul class="reset-list clearfix vrk-tabs-menu">
                <li><a href="#">Renault</a></li>
                <li><a href="#">Dacia</a></li>
              </ul>
            </div>
            <div class="tabs">
              <div class="vrk-product-grid-inr clearfix">
                <div class="vrk-product-grid">
                  <div class="vrk-product-grid-item">
                    <div class="vrk-product-grid-img-cntlr">
                      <div class="vrk-product-grid-img">
                        <a href="#"><img src="<?php echo THEME_URI; ?>/assets/images/vrk-product-grid-img-1.png"></a>
                      </div>
                    </div>
                    <div class="vrk-product-grid-dsc mHc">
                      <h3 class="vrk-product-grid-dsc-title mHc1"><a href="#">Renault Megane</a></h3>
                      <p class="mHc2">De family car, nieuwe generatie</p>
                      <a>
                        <i>
                          <svg class="vrk-product-grid-angle-svg" width="6" height="10" viewBox="0 0 6 10" fill="#CBCBCB">
                            <use xlink:href="#vrk-product-grid-angle-svg"></use>
                          </svg> 
                        </i>
                      </a>
                    </div>
                  </div>
                </div>
                <div class="vrk-product-grid">
                  <div class="vrk-product-grid-item">
                    <div class="vrk-product-grid-img-cntlr">
                      <div class="vrk-product-grid-img">
                        <a href="#"><img src="<?php echo THEME_URI; ?>/assets/images/vrk-product-grid-img-2.png"></a>
                      </div>
                    </div>
                    <div class="vrk-product-grid-dsc mHc">
                      <h3 class="vrk-product-grid-dsc-title mHc1"><a href="#">Renault Talisman</a></h3>
                      <p class="mHc2">De family car, nieuwe generatie</p>
                      <a>
                        <i>
                          <svg class="vrk-product-grid-angle-svg" width="6" height="10" viewBox="0 0 6 10" fill="#CBCBCB">
                            <use xlink:href="#vrk-product-grid-angle-svg"></use>
                          </svg> 
                        </i>
                      </a>
                    </div>
                  </div>
                </div>
                <div class="vrk-product-grid">
                  <div class="vrk-product-grid-item">
                    <div class="vrk-product-grid-img-cntlr">
                      <div class="vrk-product-grid-img">
                        <a href="#"><img src="<?php echo THEME_URI; ?>/assets/images/vrk-product-grid-img-3.png"></a>
                      </div>
                    </div>
                    <div class="vrk-product-grid-dsc mHc">
                      <h3 class="vrk-product-grid-dsc-title mHc1"><a href="#">Renault Koleos</a></h3>
                      <p class="mHc2">De family car, nieuwe generatie</p>
                      <a>
                        <i>
                          <svg class="vrk-product-grid-angle-svg" width="6" height="10" viewBox="0 0 6 10" fill="#CBCBCB">
                            <use xlink:href="#vrk-product-grid-angle-svg"></use>
                          </svg> 
                        </i>
                      </a>
                    </div>
                  </div>
                </div>
                <div class="vrk-product-grid">
                  <div class="vrk-product-grid-item">
                    <div class="vrk-product-grid-img-cntlr">
                      <div class="vrk-product-grid-img">
                        <a href="#"><img src="<?php echo THEME_URI; ?>/assets/images/vrk-product-grid-img-4.png"></a>
                      </div>
                    </div>
                    <div class="vrk-product-grid-dsc mHc">
                      <h3 class="vrk-product-grid-dsc-title mHc1"><a href="#">Renault Grand Scenic</a></h3>
                      <p class="mHc2">De family car, nieuwe generatie</p>
                      <a>
                        <i>
                          <svg class="vrk-product-grid-angle-svg" width="6" height="10" viewBox="0 0 6 10" fill="#CBCBCB">
                            <use xlink:href="#vrk-product-grid-angle-svg"></use>
                          </svg> 
                        </i>
                      </a>
                    </div>
                  </div>
                </div>
                <div class="vrk-product-grid">
                  <div class="vrk-product-grid-item">
                    <div class="vrk-product-grid-img-cntlr">
                      <div class="vrk-product-grid-img">
                        <a href="#"><img src="<?php echo THEME_URI; ?>/assets/images/vrk-product-grid-img-5.png"></a>
                      </div>
                    </div>
                    <div class="vrk-product-grid-dsc mHc">
                      <h3 class="vrk-product-grid-dsc-title mHc1"><a href="#">Renault Clio</a></h3>
                      <p class="mHc2">De family car, nieuwe generatie</p>
                      <a>
                        <i>
                          <svg class="vrk-product-grid-angle-svg" width="6" height="10" viewBox="0 0 6 10" fill="#CBCBCB">
                            <use xlink:href="#vrk-product-grid-angle-svg"></use>
                          </svg> 
                        </i>
                      </a>
                    </div>
                  </div>
                </div>
                <div class="vrk-product-grid">
                  <div class="vrk-product-grid-item">
                    <div class="vrk-product-grid-img-cntlr">
                      <div class="vrk-product-grid-img">
                        <a href="#"><img src="<?php echo THEME_URI; ?>/assets/images/vrk-product-grid-img-6.png"></a>
                      </div>
                    </div>
                    <div class="vrk-product-grid-dsc mHc">
                      <h3 class="vrk-product-grid-dsc-title mHc1"><a href="#">Renault Kadjar</a></h3>
                      <p class="mHc2">De family car, nieuwe generatie</p>
                      <a>
                        <i>
                          <svg class="vrk-product-grid-angle-svg" width="6" height="10" viewBox="0 0 6 10" fill="#CBCBCB">
                            <use xlink:href="#vrk-product-grid-angle-svg"></use>
                          </svg> 
                        </i>
                      </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="tabs">
              <div class="vrk-product-grid-inr clearfix">
                <div class="vrk-product-grid">
                  <div class="vrk-product-grid-item">
                    <div class="vrk-product-grid-img-cntlr">
                      <div class="vrk-product-grid-img">
                        <a href="#"><img src="<?php echo THEME_URI; ?>/assets/images/vrk-product-grid-img-1.png"></a>
                      </div>
                    </div>
                    <div class="vrk-product-grid-dsc mHc">
                      <h3 class="vrk-product-grid-dsc-title mHc1"><a href="#">Renault Megane</a></h3>
                      <p class="mHc2">De family car, nieuwe generatie</p>
                      <a>
                        <i>
                          <svg class="vrk-product-grid-angle-svg" width="6" height="10" viewBox="0 0 6 10" fill="#CBCBCB">
                            <use xlink:href="#vrk-product-grid-angle-svg"></use>
                          </svg> 
                        </i>
                      </a>
                    </div>
                  </div>
                </div>
                <div class="vrk-product-grid">
                  <div class="vrk-product-grid-item">
                    <div class="vrk-product-grid-img-cntlr">
                      <div class="vrk-product-grid-img">
                        <a href="#"><img src="<?php echo THEME_URI; ?>/assets/images/vrk-product-grid-img-2.png"></a>
                      </div>
                    </div>
                    <div class="vrk-product-grid-dsc mHc">
                      <h3 class="vrk-product-grid-dsc-title mHc1"><a href="#">Renault Talisman</a></h3>
                      <p class="mHc2">De family car, nieuwe generatie</p>
                      <a>
                        <i>
                          <svg class="vrk-product-grid-angle-svg" width="6" height="10" viewBox="0 0 6 10" fill="#CBCBCB">
                            <use xlink:href="#vrk-product-grid-angle-svg"></use>
                          </svg> 
                        </i>
                      </a>
                    </div>
                  </div>
                </div>
                <div class="vrk-product-grid">
                  <div class="vrk-product-grid-item">
                    <div class="vrk-product-grid-img-cntlr">
                      <div class="vrk-product-grid-img">
                        <a href="#"><img src="<?php echo THEME_URI; ?>/assets/images/vrk-product-grid-img-3.png"></a>
                      </div>
                    </div>
                    <div class="vrk-product-grid-dsc mHc">
                      <h3 class="vrk-product-grid-dsc-title mHc1"><a href="#">Renault Koleos</a></h3>
                      <p class="mHc2">De family car, nieuwe generatie</p>
                      <a>
                        <i>
                          <svg class="vrk-product-grid-angle-svg" width="6" height="10" viewBox="0 0 6 10" fill="#CBCBCB">
                            <use xlink:href="#vrk-product-grid-angle-svg"></use>
                          </svg> 
                        </i>
                      </a>
                    </div>
                  </div>
                </div>
                <div class="vrk-product-grid">
                  <div class="vrk-product-grid-item">
                    <div class="vrk-product-grid-img-cntlr">
                      <div class="vrk-product-grid-img">
                        <a href="#"><img src="<?php echo THEME_URI; ?>/assets/images/vrk-product-grid-img-4.png"></a>
                      </div>
                    </div>
                    <div class="vrk-product-grid-dsc mHc">
                      <h3 class="vrk-product-grid-dsc-title mHc1"><a href="#">Renault Grand Scenic</a></h3>
                      <p class="mHc2">De family car, nieuwe generatie</p>
                      <a>
                        <i>
                          <svg class="vrk-product-grid-angle-svg" width="6" height="10" viewBox="0 0 6 10" fill="#CBCBCB">
                            <use xlink:href="#vrk-product-grid-angle-svg"></use>
                          </svg> 
                        </i>
                      </a>
                    </div>
                  </div>
                </div>
                <div class="vrk-product-grid">
                  <div class="vrk-product-grid-item">
                    <div class="vrk-product-grid-img-cntlr">
                      <div class="vrk-product-grid-img">
                        <a href="#"><img src="<?php echo THEME_URI; ?>/assets/images/vrk-product-grid-img-5.png"></a>
                      </div>
                    </div>
                    <div class="vrk-product-grid-dsc mHc">
                      <h3 class="vrk-product-grid-dsc-title mHc1"><a href="#">Renault Clio</a></h3>
                      <p class="mHc2">De family car, nieuwe generatie</p>
                      <a>
                        <i>
                          <svg class="vrk-product-grid-angle-svg" width="6" height="10" viewBox="0 0 6 10" fill="#CBCBCB">
                            <use xlink:href="#vrk-product-grid-angle-svg"></use>
                          </svg> 
                        </i>
                      </a>
                    </div>
                  </div>
                </div>
                <div class="vrk-product-grid">
                  <div class="vrk-product-grid-item">
                    <div class="vrk-product-grid-img-cntlr">
                      <div class="vrk-product-grid-img">
                        <a href="#"><img src="<?php echo THEME_URI; ?>/assets/images/vrk-product-grid-img-6.png"></a>
                      </div>
                    </div>
                    <div class="vrk-product-grid-dsc mHc">
                      <h3 class="vrk-product-grid-dsc-title mHc1"><a href="#">Renault Kadjar</a></h3>
                      <p class="mHc2">De family car, nieuwe generatie</p>
                      <a>
                        <i>
                          <svg class="vrk-product-grid-angle-svg" width="6" height="10" viewBox="0 0 6 10" fill="#CBCBCB">
                            <use xlink:href="#vrk-product-grid-angle-svg"></use>
                          </svg> 
                        </i>
                      </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<?php 
  $showhide_intro2 = get_field('showhide_intro2', $thisID);
  $introsec2 = get_field('introsec2', $thisID);
  if( $showhide_intro2 ):
?>
<section class="vrk-two-part-sec-wrp">
  <div class="vrk-two-part-lft">
    <?php if(!empty($introsec2['afbeelding'])): ?>
    <div class="vrk-two-part-img" style="background: url(<?php echo cbv_get_image_src($introsec2['afbeelding'], 'verkoopintro2'); ?>);">
      <?php echo cbv_get_image_tag($introsec2['afbeelding'], 'verkoopintro2'); ?>
    </div>
    <?php endif; ?>
  </div>
  <div class="container">
    <div class="row">
      <div class="col-sm-12">
        <div class="vrk-two-part-rgt-wrp clearfix">
          <div class="vrk-two-part-rgt">
            <div class="vrk-two-part-rgt-dsc">
              <?php 
                if(!empty($introsec2['toptitel'])) printf('<strong class="vrk-two-part-rgt-title-1">%s</strong>', $introsec2['toptitel']);
                if(!empty($introsec2['titel'])) printf('<h3 class="vrk-two-part-rgt-title-2">%s</h3>', $introsec2['titel']);
                if(!empty($introsec2['subtitel'])) printf('<span>%s</span>', $introsec2['subtitel']);
                if(!empty($introsec2['beschrijving'])) echo wpautop( $introsec2['beschrijving'], true );
                $link_1 = $introsec2['knop'];
                if( is_array( $link_1 ) &&  !empty( $link_1['url'] ) ){
                  printf('<a href="%s" target="%s">%s</a>', $link_1['url'], $link_1['target'], $link_1['title']); 
                }
              ?>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<?php endif; ?>

<section class="vrk-product-grid-btm-sec-wrp">
  <div class="container">
    <div class="row">
      <div class="col-sm-12">
         <div class="vrk-product-grid-inr clearfix">
          <div class="vrk-product-grid">
            <div class="vrk-product-grid-item">
              <div class="vrk-product-grid-img-cntlr">
                <div class="vrk-product-grid-img">
                  <a href="#"><img src="<?php echo THEME_URI; ?>/assets/images/vrk-product-grid-img-1.png"></a>
                </div>
              </div>
              <div class="vrk-product-grid-dsc mHc">
                <h3 class="vrk-product-grid-dsc-title mHc1"><a href="#">Renault Megane</a></h3>
                <p class="mHc2">De family car, nieuwe generatie</p>
                <a>
                  <i>
                    <svg class="vrk-product-grid-angle-svg" width="6" height="10" viewBox="0 0 6 10" fill="#CBCBCB">
                      <use xlink:href="#vrk-product-grid-angle-svg"></use>
                    </svg> 
                  </i>
                </a>
              </div>
            </div>
          </div>
          <div class="vrk-product-grid">
            <div class="vrk-product-grid-item">
              <div class="vrk-product-grid-img-cntlr">
                <div class="vrk-product-grid-img">
                  <a href="#"><img src="<?php echo THEME_URI; ?>/assets/images/vrk-product-grid-img-2.png"></a>
                </div>
              </div>
              <div class="vrk-product-grid-dsc mHc">
                <h3 class="vrk-product-grid-dsc-title mHc1"><a href="#">Renault Talisman</a></h3>
                <p class="mHc2">De family car, nieuwe generatie</p>
                <a>
                  <i>
                    <svg class="vrk-product-grid-angle-svg" width="6" height="10" viewBox="0 0 6 10" fill="#CBCBCB">
                      <use xlink:href="#vrk-product-grid-angle-svg"></use>
                    </svg> 
                  </i>
                </a>
              </div>
            </div>
          </div>
          <div class="vrk-product-grid">
            <div class="vrk-product-grid-item">
              <div class="vrk-product-grid-img-cntlr">
                <div class="vrk-product-grid-img">
                  <a href="#"><img src="<?php echo THEME_URI; ?>/assets/images/vrk-product-grid-img-3.png"></a>
                </div>
              </div>
              <div class="vrk-product-grid-dsc mHc">
                <h3 class="vrk-product-grid-dsc-title mHc1"><a href="#">Renault Koleos</a></h3>
                <p class="mHc2">De family car, nieuwe generatie</p>
                <a>
                  <i>
                    <svg class="vrk-product-grid-angle-svg" width="6" height="10" viewBox="0 0 6 10" fill="#CBCBCB">
                      <use xlink:href="#vrk-product-grid-angle-svg"></use>
                    </svg> 
                  </i>
                </a>
              </div>
            </div>
          </div>
          <div class="vrk-product-grid">
            <div class="vrk-product-grid-item">
              <div class="vrk-product-grid-img-cntlr">
                <div class="vrk-product-grid-img">
                  <a href="#"><img src="<?php echo THEME_URI; ?>/assets/images/vrk-product-grid-img-4.png"></a>
                </div>
              </div>
              <div class="vrk-product-grid-dsc mHc">
                <h3 class="vrk-product-grid-dsc-title mHc1"><a href="#">Renault Grand Scenic</a></h3>
                <p class="mHc2">De family car, nieuwe generatie</p>
                <a>
                  <i>
                    <svg class="vrk-product-grid-angle-svg" width="6" height="10" viewBox="0 0 6 10" fill="#CBCBCB">
                      <use xlink:href="#vrk-product-grid-angle-svg"></use>
                    </svg> 
                  </i>
                </a>
              </div>
            </div>
          </div>
          <div class="vrk-product-grid">
            <div class="vrk-product-grid-item">
              <div class="vrk-product-grid-img-cntlr">
                <div class="vrk-product-grid-img">
                  <a href="#"><img src="<?php echo THEME_URI; ?>/assets/images/vrk-product-grid-img-5.png"></a>
                </div>
              </div>
              <div class="vrk-product-grid-dsc mHc">
                <h3 class="vrk-product-grid-dsc-title mHc1"><a href="#">Renault Clio</a></h3>
                <p class="mHc2">De family car, nieuwe generatie</p>
                <a>
                  <i>
                    <svg class="vrk-product-grid-angle-svg" width="6" height="10" viewBox="0 0 6 10" fill="#CBCBCB">
                      <use xlink:href="#vrk-product-grid-angle-svg"></use>
                    </svg> 
                  </i>
                </a>
              </div>
            </div>
          </div>
          <div class="vrk-product-grid">
            <div class="vrk-product-grid-item">
              <div class="vrk-product-grid-img-cntlr">
                <div class="vrk-product-grid-img">
                  <a href="#"><img src="<?php echo THEME_URI; ?>/assets/images/vrk-product-grid-img-6.png"></a>
                </div>
              </div>
              <div class="vrk-product-grid-dsc mHc">
                <h3 class="vrk-product-grid-dsc-title mHc1"><a href="#">Renault Kadjar</a></h3>
                <p class="mHc2">De family car, nieuwe generatie</p>
                <a>
                  <i>
                    <svg class="vrk-product-grid-angle-svg" width="6" height="10" viewBox="0 0 6 10" fill="#CBCBCB">
                      <use xlink:href="#vrk-product-grid-angle-svg"></use>
                    </svg> 
                  </i>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<?php get_template_part('templates/section', 'offerte'); ?>
<?php get_footer(); ?>