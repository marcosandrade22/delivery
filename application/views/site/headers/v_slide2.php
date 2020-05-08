<!-- ======= Slider Section ======= -->
  <div id="home" class="slider-area">
    <div class="bend niceties preview-2">
      <div id="ensign-nivoslider" class="slides">
        <?php foreach ($slides_id as $row)  :?>
          <img src="<?php echo $row->imagem_slide;?>" alt="" title="#<?php echo $row->id_slide;?>" />
        <?php endforeach; ?>
          
       
      </div>
        <?php foreach($slides as $row):?>
      <!-- direction 1 -->
      <div id="<?php echo $row->id_slide;?>" class="slider-direction slider-one">
        <div class="container">
          <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
              <div class="slider-content">
                <!-- layer 1 -->
                <div class="layer-1-1 hidden-xs wow slideInDown" data-wow-duration="2s" data-wow-delay=".2s">
                  <h2 class="title1"><?php echo $row->texto_1;?> </h2>
                </div>
                <!-- layer 2 -->
                <div class="layer-1-2 wow slideInUp" data-wow-duration="2s" data-wow-delay=".1s">
                  <h1 class="title2"><?php echo $row->texto_2;?></h1>
                </div>
                <!-- layer 3 -->
                <div class="layer-1-3 hidden-xs wow slideInUp" data-wow-duration="2s" data-wow-delay=".2s">
                  <a class="ready-btn page-scroll" href="<?php echo $row->link_slide;?>">Saiba Mais</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <?php endforeach; ?>
     
    </div>
  </div><!-- End Slider -->