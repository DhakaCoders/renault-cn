<?php 
get_header();

$ccat = get_queried_object();
$thisID = 11;
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
          <?php 
            $taxonomies = get_terms( array(
                'taxonomy' => 'verkoop_cat',
                'hide_empty' => false
            ) );
          ?>
          <div class="vrk-product-grid-tabs-wrp clearfix">
            <div class="vrk-product-grid-tabs">
              <ul class="reset-list clearfix vrk-tabs-menu">
              <?php if ( !empty($taxonomies) ) : ?>
              <?php 
              foreach( $taxonomies as $taxonomie ) {
              ?>
                <li <?php echo ($taxonomie->slug == $ccat->slug)? 'class="active"': ''; ?>><a href="<?php echo esc_url( get_term_link( $taxonomie ) ); ?>"><?php echo $taxonomie->name; ?></a></li>
              <?php } ?>
              <?php endif; ?>
              </ul>
            </div>
          <?php 
            $verkoop_query = new WP_Query(array( 
              'post_type'=> 'verkoops',
              'post_status' => 'publish',
              'posts_per_page' => 3,
              'orderby' => 'date',
              'order'=> 'desc',
              'tax_query' => array(
              array(
                  'taxonomy' => 'verkoop_cat',
                  'field'    => 'term_id',
                  'terms'    => $ccat->term_id
              ),
            ),
            ) 
            );
            $notIDs = array();
          ?>
        <?php if($verkoop_query->have_posts()): ?>
            <div class="tabs-wrapp">
              <div class="vrk-product-grid-inr clearfix">
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

                  $notIDs []=  get_the_ID();
              ?>
              <div class="vrk-product-grid">
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
            </div>
            <?php 
           endif;  
           wp_reset_postdata();
        ?>
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
<?php 
$verkoop1_query = new WP_Query(array( 
  'post_type'=> 'verkoops',
  'post_status' => 'publish',
  'posts_per_page' => -1,
  'orderby' => 'date',
  'order'=> 'desc',
  'post__not_in' => $notIDs,
  'tax_query' => array(
      array(
          'taxonomy' => 'verkoop_cat',
          'field'    => 'term_id',
          'terms'    => $ccat->term_id
      ),
    ),
  ) 
);
?>
<?php if($verkoop1_query->have_posts()): ?>
<section class="vrk-product-grid-btm-sec-wrp">
  <div class="container">
    <div class="row">
      <div class="col-sm-12">
        <div class="vrk-product-grid-inr clearfix">
      <?php 
            $cat_slug = '';
            while($verkoop1_query->have_posts()): $verkoop1_query->the_post();
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
      <div class="vrk-product-grid">
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
      </div>
    </div>
  </div>
</section>
<?php 
   endif;  
   wp_reset_postdata();
?>
<?php get_template_part('templates/section', 'offerte'); ?>
<?php get_footer(); ?>