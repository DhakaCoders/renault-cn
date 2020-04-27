<?php
$thisID = get_the_ID();
$pageTitle = get_the_title($thisID);
$standaardbanner = get_field('pagebanner', $thisID);
if( empty($standaardbanner) ) $standaardbanner = THEME_URI.'/assets/images/rn-breadcrumbs-sec-bg.jpg';
?>
<section class="rn-breadcrumbs-sec">
  <div class="rn-breadcrumbs-sec-bg" style="background: url('<?php echo $standaardbanner; ?>');">
    
  </div>
  <div class="rn-breadcrumbs-sec-des">
    <div class="rn-breadcrumbs-sec-des-inr">
      <h1 class="rn-breadcrumbs-sec-des-inr-title"><?php echo $pageTitle; ?></h1>
      <?php cbv_breadcrumbs(); ?>
      <div class="rn-td-brdcm clearfix">
        <div class="rn-td-brdcm-left">
          <a href="<?php echo esc_url( home_url() ); ?>">Home</a>
        </div>
        <div class="rn-td-brdcm-right">
          <a href="javascript:history.back()">
            Terug
            <i>
              <svg class="rn-td-brdcm-xs-svg" width="5" height="8" viewBox="0 0 5 8" fill="white">
                <use xlink:href="#rn-td-brdcm-xs-svg"></use>
              </svg> 
            </i>
          </a>
        </div>
      </div>
      <div class="rn-breadcrumbs-sec-icon">
        <img src="<?php echo THEME_URI; ?>/assets/images/rn-breadcrumbs-sec-icon.png">
      </div>
    </div>
  </div>
  
</section>