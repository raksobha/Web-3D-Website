<?php echo $navbar; ?>

<div class="container-fluid main_contents">
    <div id="home">
        <div id="carouselImage" class="carousel slide carousel-fade" data-ride="carousel"> 
            <ol class="carousel-indicators">
                <li data-target="#carouselImage" data-slide-to="0" class="active"></li>
                <li data-target="#carouselImage" data-slide-to="1"></li>
                <li data-target="#carouselImage" data-slide-to="2"></li>
                <li data-target="#carouselImage" data-slide-to="3"></li>
                <li data-target="#carouselImage" data-slide-to="4"></li>
                <li data-target="#carouselImage" data-slide-to="5"></li>
                <li data-target="#carouselImage" data-slide-to="6"></li>
            </ol>
            <div class="col-sm-12 carousel-inner">
                
                <div class="carousel-item active" data-interval="4000">
                    <img src="../application/assets/images/homepage_images/wallpaper1.jpg" alt="Cola Coka" class="d-block" style="width:100%">
                    <div class="carousel-caption">
                        <h3>Cola Coka</h3>
                        <p>A new formula arises</p>
                    </div>
                </div>

                <div class="carousel-item" data-interval="5000">
                    <img src="../application/assets/images/homepage_images/wallpaper2.jpg" alt="Cola Coka" class="d-block" style="width:100%">
                    <div class="carousel-caption">
                        <h3>Cola Coka</h3>
                        <p>How Cola Coka has changed through the ages!</p>
                    </div> 
                </div>

                <div class="carousel-item" data-interval="3000">
                    <img src="../application/assets/images/homepage_images/wallpaper3.jpg" alt="Cola Coka" class="d-block" style="width:100%">
                    <div class="carousel-caption">
                        <h3>Cola Coka</h3>
                        <p>Another awesome picture of Cola Coka!</p>
                    </div> 
                </div>

                <div class="carousel-item" data-interval="2000">
                    <img src="../application/assets/images/homepage_images/wallpaper4.jpg" alt="Cola Coka" class="d-block" style="width:100%">
                    <div class="carousel-caption">
                        <h3>Cola Coka</h3>
                        <p>Perfection</p>
                    </div> 
                </div>

                <div class="carousel-item" data-interval="3000">
                    <img src="../application/assets/images/homepage_images/wallpaper5.jpg" alt="Cola Coka" class="d-block" style="width:100%">
                    <div class="carousel-caption">
                        <h3>Sprite</h3>
                        <p>Super refreshing!</p>
                    </div> 
                </div>

                <div class="carousel-item" data-interval="3000">
                    <img src="../application/assets/images/homepage_images/wallpaper6.jpg" alt="Cola Coka" class="d-block" style="width:100%">
                    <div class="carousel-caption">
                        <h3>Sprite</h3>
                        <p>Brighten your day with sprite!</p>
                    </div> 
                </div>

                <div class="carousel-item" data-interval="3000">
                    <img src="../application/assets/images/homepage_images/wallpaper7.jpg" alt="Cola Coka" class="d-block" style="width:100%">
                    <div class="carousel-caption">
                        <h3>Appletiser</h3>
                        <p>How to enjoy a glass of Appletiser!</p>
                    </div> 
                </div>
                <a href="#carouselImage" class="carousel-control-prev" role="button" data-slide="prev">
                    <span class="sr-only">Previous</span>
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                </a>
                <a href="#carouselImage" class="carousel-control-next" role="button" data-slide="next">
                    <span class="sr-only">Previous</span>
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                </a>
            </div> 
        </div>  
    </div>
</div>

<?php echo $footer; ?>