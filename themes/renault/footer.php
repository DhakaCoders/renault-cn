<?php 
  $spacialArry = array(".", "/", "+", " ");$replaceArray = '';
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

  $lfooter = get_field('lfooter', 'options');
  $logoObj = $lfooter['ftlogo'];
  if( is_array($logoObj) ){
    $logo_tag = '<img src="'.$logoObj['url'].'" alt="'.$logoObj['alt'].'" title="'.$logoObj['title'].'">';
  }else{
    $logo_tag = '';
  }
  $copyright_text = get_field('copyright_text', 'options');
  $smedias = get_field('sociale_media', 'options');
?>
<footer class="footer-wrp">
  <div class="ftr-top">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <div class="ftr-col-main clearfix">
            <div class="ftr-col ftr-col-1">
              <div class="ftr-logo">
                <a href="<?php echo esc_url(home_url('/')); ?>">
                  <?php echo $logo_tag; ?>
                  <?php if( !empty($lfooter['title']) ) printf('<strong>%s</strong>', $lfooter['title']); ?>
                  <?php if( !empty($lfooter['subtitel']) ) printf('<span>%s</span>', $lfooter['subtitel']); ?>
                </a>
              </div>
              <div class="ftr-socail-icon">
              <?php if(!empty($smedias)):  ?>
                <ul class="reset-list clearfix">
                  <?php foreach($smedias as $smedia): ?>
                  <li>
                    <a target="_blank" href="<?php echo $smedia['url']; ?>">
                      <?php echo $smedia['icon']; ?>
                    </a>
                 </li>
               <?php endforeach; ?>
                </ul>
              <?php endif; ?>
              </div>
            </div>
            <div class="ftr-col ftr-col-2"> 
              <?php 
                _e( '<h6 class="active"><span>Navigatie</span></h6>', THEME_NAME ); 
                $fmenuOptionsa = array( 
                    'theme_location' => 'cbv_fta_menu', 
                    'menu_class' => 'reset-list clearfix',
                    'container' => 'nav',
                    'container_class' => 'nav'
                  );
                wp_nav_menu( $fmenuOptionsa ); 
              ?>
            </div>
            <div class="ftr-col ftr-col-3">
              <?php _e( '<h6><span>Contact Mekaniek</span></h6>', THEME_NAME ); ?>
              <ul class="reset-list clearfix">
                <?php if( !empty($caddress) ): ?>
                <li>
                  <a href="<?php echo $cgmaplink; ?>" target="_blank">
                    <i>
                      <svg class="ftr-map-icon-svg" width="16" height="22" viewBox="0 0 16 22" fill="white">
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
                      <svg class="ftr-cell-icon-svg" width="14" height="25" viewBox="0 0 14 25" fill="white">
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
                      <svg class="ftr-mail-icon-svg" width="18" height="18" viewBox="0 0 18 18" fill="white">
                        <use xlink:href="#ftr-mail-icon-svg"></use>
                      </svg> 
                    </i>
                    <span><?php echo $cemailadres; ?></span>
                  </a>
                </li>
                <?php endif; ?>
              </ul>               
            </div>
            <div class="ftr-col ftr-col-4">
              <?php _e( '<h6><span>Contact Carrosserie</span></h6>', THEME_NAME ); ?>
              <ul class="reset-list clearfix">
                <?php if( !empty($craddress) ): ?>
                <li>
                  <a href="<?php echo $crgmaplink; ?>" target="_blank">
                    <i>
                      <svg class="ftr-map-icon-svg" width="16" height="22" viewBox="0 0 16 22" fill="white">
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
                      <svg class="ftr-cell-icon-svg" width="14" height="25" viewBox="0 0 14 25" fill="white">
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
                      <svg class="ftr-mail-icon-svg" width="18" height="18" viewBox="0 0 18 18" fill="white">
                        <use xlink:href="#ftr-mail-icon-svg"></use>
                      </svg> 
                    </i>
                    <span><?php echo $cremailadres; ?></span>
                  </a>
                </li>
                <?php endif; ?>
              </ul>              
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="ftr-btm">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <div class="ftr-btm-innr clearfix">
            <div class="ftr-btm-col-1">
              <?php if( !empty( $copyright_text ) ) printf( '<span>%s</span>', $copyright_text); ?>  
            </div>
            <div class="ftr-btm-col-2">
              <?php 
                $ftmenuOptions = array( 
                    'theme_location' => 'cbv_copyright_menu', 
                    'menu_class' => 'reset-list clearfix',
                    'container' => 'copynav',
                    'container_class' => 'copynav'
                  );
                wp_nav_menu( $ftmenuOptions ); 
              ?>
            </div>
            <div class="ftr-btm-col-3 text-right">
              <a href="#">webdesign by conversal</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</footer>


<div class="show-sm">
  <div class="xs-nav-menu-bar clearfix">
   <div class="xs-nav-menu-innr clearfix">
    <div class="nav-opener">
       <div class="nav-opener-btn">
          <span></span>
          <span></span>
          <span></span>
        </div>
        <strong>MENU</strong>
    </div>
    <div class="xs-ftr-tel">
      <a href="#">
        <img src="<?php echo THEME_URI; ?>/assets/images/xs-ftr-tel.png">
      </a>
    </div>
   </div>
  </div>
</div>
<div class="xs-popup-menu">
    <div class="xs-popup-menu-innr" style="position: relative;">
       <div class="xs-logo">
          <div class="ftr-logo">
            <a href="<?php echo esc_url(home_url('/')); ?>">
              <?php echo $logo_tag; ?>
              <?php if( !empty($lfooter['title']) ) printf('<strong>%s</strong>', $lfooter['title']); ?>
              <?php if( !empty($lfooter['subtitel']) ) printf('<span>%s</span>', $lfooter['subtitel']); ?>
            </a>
          </div>
       </div>
        <nav class="xs-main-nav">
          <?php 
            $mainnavOptions = array( 
                'theme_location' => 'cbv_main_menu', 
                'menu_class' => 'clearfix reset-list',
                'container' => 'mainnav',
                'container_class' => 'mainnav'
              );
            wp_nav_menu( $mainnavOptions );
          ?>
        </nav>
        <div class="xs-menu-info">
          <a href="<?php echo esc_url( home_url('offerte-aanvragen') );?>">Offerte aanvragen</a>
        </div>
        <div class="pop-up-ftr-socail-icons">
         <?php if(!empty($smedias)):  ?>
            <ul class="reset-list clearfix">
              <?php foreach($smedias as $smedia): ?>
              <li>
                <a target="_blank" href="<?php echo $smedia['url']; ?>">
                  <?php echo $smedia['icon']; ?>
                </a>
             </li>
           <?php endforeach; ?>
            </ul>
          <?php endif; ?>
        </div>
        <div class="xs-menu-close-btn-controller">
           <div class="fl-close-btn">
             <span></span>
             <span></span>
             <span></span>
           </div>
           <strong>sluit</strong>
        </div>
    </div>
</div>
<?php wp_footer(); ?>
</body>
</html>