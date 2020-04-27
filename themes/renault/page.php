<?php 
get_header();
while ( have_posts() ) :
  the_post();
  get_template_part('templates/page', 'banner');
?>
<section class="innerpage-con-wrap">
  <?php if(have_rows('inhoud')){  ?>
  <div class="container-sm">
    <div class="row">
      <div class="col-sm-12">
        <article class="default-page-con">
          <?php 
            while ( have_rows('inhoud') ) : the_row(); 
          if( get_row_layout() == 'introductietekst' ){
              $title = get_sub_field('titel');
              $afbeelding = get_sub_field('afbeelding');
              echo '<div class="dfp-promo-module clearfix">';
                if( !empty($title) ) printf('<div><strong class="dfp-promo-module-title">%s</strong></div>', $title);
                if( !empty($afbeelding) ){
                  echo '<div class="dfp-plate-one-img-bx">', cbv_get_image_tag($afbeelding), '</div>';
                }
              echo '</div>';    
          }elseif( get_row_layout() == 'teksteditor' ){
              $beschrijving = get_sub_field('fc_teksteditor');
              echo '<div class="dfp-text-module clearfix">';
                if( !empty( $beschrijving ) ) echo wpautop($beschrijving);
              echo '</div>';    
            }elseif( get_row_layout() == 'afbeelding_tekst' ){
              $fc_afbeelding = get_sub_field('fc_afbeelding');
              $imgsrc = cbv_get_image_src($fc_afbeelding, 'dfpageg1');
              $videourl = get_sub_field('video_url');
              $fc_tekst = get_sub_field('fc_tekst');
              $positie_afbeelding = get_sub_field('positie_afbeelding');
              $imgposcls = ( $positie_afbeelding == 'right' ) ? 'fl-dft-rgtimg-lftdes' : '';
              echo '<div class="fl-dft-overflow-controller">
                <div class="fl-dft-lftimg-rgtdes clearfix '.$imgposcls.'">';
                    if( !empty($videourl) ):
                echo '<div class="fl-dft-lftimg-rgtdes-lft img-div-scale mHc">';
                echo '<div class="fl-dft-lftimg-rgtdes-lft-img-inr img-div inline-bg" style="background-image: url('.$imgsrc.');"></div>';
                echo '<a href="'.$videourl.'" data-fancybox="gallery" class="overlay-link"></a>';
                echo '<i>
                  <svg class="play-icon-white-svg" width="85" height="85" viewBox="0 0 85 85" fill="#ffffff">
                    <use xlink:href="#play-icon-white-svg"></use>
                  </svg> 
                </i>';
                echo '</div>';
                    else:
                      echo '<div class="fl-dft-lftimg-rgtdes-lft mHc" style="background: url('.$imgsrc.');"></div>';
                    endif;
                      echo '<div class="fl-dft-lftimg-rgtdes-rgt mHc">';
                        echo wpautop($fc_tekst);
                      echo '</div>';
              echo '</div></div>';      
            }elseif( get_row_layout() == 'galerij' ){
              $gallery_cn = get_sub_field('afbeeldingen');
              $lightbox = get_sub_field('lightbox');
              $kolom = get_sub_field('kolom');
              if( $gallery_cn ):
              echo "<div class='gallery-wrap clearfix'><div class='gallery gallery-columns-{$kolom}'>";
                foreach( $gallery_cn as $image ):
                $imgsrc = cbv_get_image_src($image['ID'], 'gallerygrid');  
                echo "<figure class='gallery-item'><div class='gallery-icon portrait'>";
                if( $lightbox ) echo "<a data-fancybox='gallery' href='{$image['url']}'>";
                    //echo '<div class="dfpagegalleryitem" style="background: url('.$imgsrc.');"></div>';
                    echo wp_get_attachment_image( $image['ID'], 'gallerygrid' );
                if( $lightbox ) echo "</a>";
                echo "</div></figure>";
                endforeach;
              echo "</div></div>";
              endif;      
            }elseif( get_row_layout() == 'faqs' ){
              $faqsIds = get_sub_field('fc_faqs');
              $fQuery = new WP_Query(array(
                'post_type' => 'faqs',
                'posts_per_page'=> -1,
                'post__in' => $faqsIds
              ));
              if( $fQuery->have_posts() ):
              echo "<div class='dft-question-mark-slider-cntlr'><div class='dft-question-mark-slider dft-slider-pagi'>";
                while($fQuery->have_posts()): $fQuery->the_post();
                  echo "<div class='dft-question-mark-slide-item'><div class='dft-question-mark-slide-item-inr mHc'>";
                    echo '<a class="overlay-link" href="'.get_permalink().'"></a>';
                    echo '<i>
                    <svg class="question-icon-svg" width="60" height="60" viewBox="0 0 60 60" fill="#E2E2E2">
                      <use xlink:href="#question-icon-svg"></use>
                    </svg> 
                  </i>';
                    printf('<h3 class="dft-question-mark-slide-item-title"><strong>%s</strong></h3>', get_the_title());
                    echo '<span><img src="'.THEME_URI.'/assets/images/arrow-orange.svg"></span>';
                  echo "</div></div>";
                endwhile;
              echo "</div></div>";
              endif; wp_reset_postdata();
            }elseif( get_row_layout() == 'quote' ){
              $quoteID = get_sub_field('fc_quote');
              if( !empty($quoteID) ): 
              $fc_diensten = get_field('beschrijving', $quoteID);
              $naam = get_field('naam', $quoteID);
              $positie = get_field('positie', $quoteID);
              echo "<div class='dft-blockquote'>";
              echo '<blockquote>';
              echo '<i>
                <svg class="blockquote-orange-icon-svg" width="88" height="88" viewBox="0 0 88 88" fill="#F3BA4B">
                  <use xlink:href="#blockquote-orange-icon-svg"></use>
                </svg> 
              </i>';
              printf('%s', $fc_diensten);
              printf('<span><strong>-%s, %s</strong></span>', $naam, $positie);
              echo '</blockquote>';
              echo "</div><hr>";
              endif; 
            }elseif( get_row_layout() == 'usps' ){
               if( have_rows('fc_alle_usps') ):
                echo '<div class="dft-about-us-sec-cntlr">
                <div class="about-us-sec-cntlr">
                  <div class="fl-aboutUsSlider dftAboutUsSecSlider">';
                    while( have_rows('fc_alle_usps') ) : the_row();
                      $icon = get_sub_field('icon');
                      $titel = get_sub_field('titel');
                      $beschrijving = get_sub_field('beschrijving');

                    echo '<div class="fl-about-us-item mHc">';
                    if( !empty($icon) ): 
                      echo '<span class="about-us-item-icon mHc1">';
                        echo '<img src="'.$icon.'" alt="'.cbv_get_image_alt( $icon ).'">';
                      echo '</span>';
                      endif;
                    if( !empty($titel) ) printf('<h4 class="aui-title mHc2">%s</h4>', $titel);
                    if( !empty($beschrijving) ) echo wpautop( $beschrijving );
                    echo '</div>';
                    endwhile;
              echo '</div></div></div>';
              endif;
            }elseif( get_row_layout() == 'table' ){
              $fc_table = get_sub_field('fc_table');
              cbv_table($fc_table);
            }elseif( get_row_layout() == 'nieuws' ){
              $fc_product = get_sub_field('fc_nieuws');
              $ns_titel = get_sub_field('ns_titel');
              $ns_teksteditor = get_sub_field('ns_teksteditor');
              $memQuery = new WP_Query(array(
                'post_type' => 'post',
                'posts_per_page'=> -1,
                'post__in' => $fc_product
              ));
              if( $memQuery->have_posts() ):
                echo '<div class="dft-latest-news-module">';
                if( !empty($ns_titel) OR !empty($ns_teksteditor) ): 
                echo '<div class="dft-latest-news-module-hdr">';
                  if( !empty($ns_titel) ) printf('<h2 class="dft-lnm-title">%s</h2>', $ns_titel);
                  if( !empty( $ns_titel ) ) echo wpautop( $ns_teksteditor );
                  echo '</div>';
                endif;
                  
                        while($memQuery->have_posts()): $memQuery->the_post();
                        $gridImage = get_post_thumbnail_id(get_the_ID());
                        if(!empty($gridImage)){
                          $pimgtag = cbv_get_image_tag($gridImage, 'pbloggrid');
                        }else{
                          $pimgtag = '<img src="'.THEME_URI.'/assets/images/df264.png" alt="'.get_the_title().'">';
                        }  
                        echo '<div class="dft-latest-news-bx-wrap">
                        <div class="dft-latest-news-bx-items">
                          <div class="dft-latest-news-bx-item">
                          <div class="dft-latest-news-bx clearfix">';

                        echo '<div class="dft-latest-news-bx-fea-img">
                              <a href="'.get_the_permalink().'">'.$pimgtag.'</a>
                            </div>';
                        echo '<div class="dft-latest-news-bx-des">
                          <span>'.get_the_date('m.d.Y').'</span>
                          <h4 class="dft-latest-news-bx-title"><a href="'.get_the_permalink().'">'.get_the_title().'</a></h4>
                          '.wpautop( get_the_excerpt(), true ).'
                          <a href="'.get_the_permalink().'">Lees meer</a>
                        </div>';

                        echo '</div>';
                        echo '</div>';
                        echo '</div>';
                        echo '</div>';
                    endwhile;

                echo '</div>';
              endif; wp_reset_postdata();
            }elseif( get_row_layout() == 'horizontal_rule' ){
              $fc_horizontal_rule = get_sub_field('fc_horizontal_rule');
              echo '<div class="dft-2grd-img-content-separetor" style="height:'.$fc_horizontal_rule.'px"></div>';
            }elseif( get_row_layout() == 'afbeelding' ){
              $fc_afbeelding = get_sub_field('fc_afbeelding');
              if( !empty( $fc_afbeelding ) ){
                printf('<div class="dfp-plate-one-img-bx">%s</div>', cbv_get_image_tag($fc_afbeelding));
              }
            }elseif( get_row_layout() == 'horizontal_rule' ){
              $rheight = get_sub_field('fc_horizontal_rule');
              printf('<div class="dfhrule clearfix" style="height: %spx;"></div>', $rheight);
          
            }elseif( get_row_layout() == 'gap' ){
             $gap = get_sub_field('fc_gap');
             printf('<div class="gap clearfix" data-value="20" data-md="20" data-sm="20" data-xs="10" data-xxs="10"></div>', $rheight);
            }
          
           endwhile;?>
        </article>

      </div>
    </div>
  </div>
<?php }else{ ?>
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="default-page-con">
                <?php the_content(); ?>
                </div>
            </div>
        </div>
    </div>
<?php } ?>
</section>
<?php 
$showhide_offerte_formulier = get_field('showhide_offerte_formulier', 'options');
$offertef = get_field('offerte_formulier', 'options');
if( $showhide_offerte_formulier ):
?>
<section class="dft-form-wrapp">
  <div class="dft-form-cntlr">
    <div class="tweedehands-overview-form-cntlr">
      <div class="contact-form-wrp clearfix">
        <div class="tweedehands-overview-form-hdr">
          <?php 
            if(!empty($offertef['titel'])) printf('<h3 class="tofh-title">%s</h3>', $offertef['titel']);
            if(!empty($offertef['beschrijving'])) echo wpautop( $offertef['beschrijving'], true );
          ?>
        </div>
        <div class="wpforms-container">
        <?php if( !empty( $offertef['form_shortcode'] ) ) echo do_shortcode($offertef['form_shortcode']); ?>
        </div>
      </div>
    </div>
  </div>
</section>
<?php endif; ?>
<?php get_template_part('templates/section', 'offerte'); ?>
<?php 
endwhile; 
get_footer(); 
?>