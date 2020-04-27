<?php 
$showhide_fclink = get_field('showhide_fclink', 'options'); 
if($showhide_fclink):
  $fclink = get_field('fclink', 'options');
?>
<section class="footer-top-sec-wrp has-top-bdr">
  <div class="container">
    <div class="row">
      <div class="col-sm-12">
        <div class="footer-top-wrp clearfix">
          <div class="footer-top-lft">
            <div class="footer-top-lft-dsc">
            <?php 
              if(!empty($fclink['titel'])) printf('<h2 class="footer-top-lft-dsc-title">%s</h2>', $fclink['titel']);
              if(!empty($fclink['beschrijving'])) echo wpautop( $fclink['beschrijving'], true );
            ?>
            </div>
          </div>
          <div class="footer-top-rgt">
            <div class="footer-top-rgt-btn">
              <?php 
                $link_1 = $fclink['knop_1'];
                $link_2 = $fclink['knop_2'];
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
  </div>
</section>
<?php endif; ?>