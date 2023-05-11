<?php echo $navbar ?>

<div class="main_contents">
  <div id="models" class="row">

    <!-- X3D Model -->
    <div class="col-sm-8 wrapper_content">
      <div class="card text-left">
        <!-- Choose models tab-->
        <div class="card-header">
          <ul class="nav nav-tabs card-header-tabs">
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">Models</a>
              <div class="dropdown-menu">
                <?php for ($i = 0; $i < count($model_names); $i++){ ?>
                <a class="dropdown-item" href="index.php?view=models&model_Id=<?php echo $i ?>"><?php echo $model_names[$i] ?></a>
                <?php } ?>
              </div>
            </li>
          </ul>
        </div>

        <!-- Model container -->
        <div class="card-body">
          <div>
            <div id="x3dbrand" class="card-title drinksText"><?php echo $model_information['brand'] ?></div>
            <!-- X3D Code -->
            <div class="model3D">
              <x3d id="wire">
                <scene>
                  <inline nameSpaceName="model" mapDEFToID="true" onclick="animateModel()" url="../application/assets/x3d/<?php echo $model_information['x3dModelName']; ?>"> </inline>
                </scene>
              </x3d>
            </div>
            <div id="x3dModelTitle" class="card-text drinksText"><?php echo $model_information['x3dModelTitle'] ?></div>
            <div id="x3dModelDescription" class="card-text drinksText"><?php echo $model_information['modelDescription'] ?></div>
          </div>
        </div>


      </div>
    </div>

    <!-- Buttons panels -->
    <div class="col-sm-4 wrapper_content">
        <div class="card text-left">
          <div class="card-header"></div>
          <div class="card-body">
            <div class="card-Title x3dCamera_Subtitle drinksText">
              <h3>Camera Viewpoints</h3>
            </div>
            <div class=btn-group>
              <a href="javascript:cameraFront()" class="btn btn-secondary btn-responsive">Front</a>
              <a href="javascript:cameraBack()" class="btn btn-secondary btn-responsive">Back</a>
              <a href="javascript:cameraLeft()" class="btn btn-secondary btn-responsive">Left</a>
              <a href="javascript:cameraRight()" class="btn btn-secondary btn-responsive">Right</a>
              <a href="javascript:cameraTop()" class="btn btn-secondary btn-responsive">Top</a>
            </div>
          </div>
        </div>

        <div class="card text-left">
          <div class="card-header"></div>
          <div class="card-body">
            <div class="card-Title x3dCamera_Subtitle drinksText">
              <h3>Model features</h3>
            </div>
            <div class=btn-group>
              <a href="javascript:headlight()" class="btn btn-secondary btn-responsive">Headlight</a>
              <a href="javascript:wireframe()" class="btn btn-secondary btn-responsive">Wireframe</a>
              <a href="javascript:animateModel()" class="btn btn-secondary btn-responsive">Animate</a>
            </div>

          </div>
        </div>
        
        <?php if($model_information['modelName'] == 'coke'){ ?> 
          <div id="cokeTextures" class="card text-left" >
            <div class="card-header"></div>
            <div class="card-body">
              <div class="card-Title x3dCamera_Subtitle drinksText">
                <h3>Coke Can Textures</h3>
              </div>
              <div class=btn-group>
                <a onclick="cokeChange('0')" class="btn btn-secondary btn-responsive">Coke design 1</a>
                <a onclick="cokeChange('1')" class="btn btn-secondary btn-responsive">Coke design 2</a>
                <a onclick="cokeChange('2')" class="btn btn-secondary btn-responsive">Coke design 3</a>
              </div>
            </div>
          </div>
        <?php } ?>

    </div>

  </div>
  <div id="second_contents" class="row">
    <div class="col-sm-12">
      <div class="card text-center">
        <!-- Header tabs -->
        <div class="card-header gallery-header">
          <ul id="model_extras" class="nav nav-tabs card-header-tabs">
            <li id="ajax_content" class="nav-item">
              <a id="gallery_btn" class="nav-link active">Gallery</a>
            </li>
            <li id="ajax_content" class="nav-item">
              <a id="advert_btn" class="nav-link">Latest advert</a>
            </li>
            <li id="ajax_content" class="nav-item">
              <a id="colacoka_btn" class="nav-link"><?php echo $model_information['brand'] ?></a>
            </li>
          </ul>
        </div>
        <!-- Second Content Content -->
        <div id="second_contents_content" class="card-body">
          
          <div class="gallery" id="gallery"  style="display:block">
            <p><?php echo $model_information['brand']; ?> gallery</p>
              <?php $image_array=explode('~', $model_information['galleryImages']); 
              for ($i=0; $i < count($image_array); $i++){ ?>
                <a href="<?php echo $image_array[$i]; ?>" data-fancybox data-caption="Render of my X3D <?php echo $model_information['brand']; ?> model"><img class="card-img-top img-thumbnail" src="<?php echo $image_array[$i]; ?>"/></a>
              <?php } ?>
          </div>
          
          <div id="advert" class="advert style="display:none">
            <p>The latest advert for <?php echo $model_information['brand'] ?></p>
            <div class=video_container>
              <iframe width="560" height="315" src=<?php echo $model_information['advertUrl'] ?> title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
            </div>
            <a href="<?php echo $model_information['advertUrl']; ?>" class="btn btn-info">Watch in Youtube</a>
          </div>

          <div id="colacoka" class="colacoka" style="display:none">
            <p><?php echo $model_information['modelDescription']; ?></p>
            <a href="<?php echo $model_information['webUrl']; ?>" class="btn btn-info">See official website</a>
          </div>

        </div>
      </div> <!-- End gallery card -->
    </div> <!-- End gallery column -->    
  </div>
</div>

<?php echo $footer ?>
