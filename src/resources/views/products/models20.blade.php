
<div class="type-20">
    <div class="col-md-4">
        <div id="myModal" class="modal">
            <div class="modal-content">
                <span class="close cursor" onclick="closeModal()">&times;</span>
                <div class="mySlides">
                    <div class="numbertext">1 / 6</div>
                    <img src="<?php echo $sliders[0]['slider_images'] ?>" style="width:100%">
                </div>
                <div class="mySlides">
                    <div class="numbertext">2 / 6</div>
                    <img src="<?php echo $sliders[1]['slider_images'] ?>" style="width:100%">
                </div>
                <div class="mySlides">
                    <div class="numbertext">3 / 6</div>
                    <img src="<?php echo $sliders[2]['slider_images'] ?>" style="width:100%">
                </div>

                <div class="mySlides">
                    <div class="numbertext">4 / 6</div>
                    <img src="<?php echo $sliders[3]['slider_images'] ?>" style="width:100%">
                </div>
                <div class="mySlides">
                    <div class="numbertext">5 / 6</div>
                    <img src="<?php echo $sliders[4]['slider_images'] ?>" style="width:100%">
                </div>
                <div class="mySlides">
                    <div class="numbertext">6 / 6</div>
                    <img src="<?php echo $sliders[5]['slider_images'] ?>" style="width:100%">
                </div>
                <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
                <a class="next" onclick="plusSlides(1)">&#10095;</a>

                <div class="caption-container">
                    <p id="caption"></p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class=" col-md-12  col-xs-4 ">
                <h3 class="apple"> <?php echo $sliders[0]['slider_title'] ?> </h3>
                <div class="duongvien"></div>
                <h6><a hreh="#"><?php echo $sliders[0]['slider_heading'] ?></a></h6>
                <div id='carousel-custom' class='carousel slide' data-ride='carousel'>
                    <div class=' carousel-outer'>
                        <!-- ME ART TAB SILDER -->
                        <div class='carousel-inner '>
                            <div class='item active'>
                                <img src="images/1.jpg" onclick="openModal();
                                        currentSlide(1)" class="hover-shadow img-responsive">

                            </div>
                            <div class='item'  id="zoom_05">
                                <img src="images/2.jpg" onclick="openModal();
                                        currentSlide(2)" class="hover-shadow img-responsive">

                            </div>
                            <div class='item'>
                                <img src="images/3.jpg" onclick="openModal();
                                        currentSlide(3)" class="hover-shadow img-responsive">

                            </div>

                            <div class='item'>
                                <img src="images/4.jpg" onclick="openModal();
                                        currentSlide(4)" class="hover-shadow img-responsive">

                            </div>
                            <div class='item'>
                                <img src="images/5.jpg" onclick="openModal();
                                        currentSlide(5)" class="hover-shadow img-responsive">
                            </div>
                            <div class='item'><a class='left carousel-control' href='#carousel-custom' data-slide='prev'>

                                </a>
                                <a class='right carousel-control' href='#carousel-custom' data-slide='next'>

                                </a>
                                <img src="images/6.jpg" onclick="openModal();currentSlide(5)" class="hover-shadow img-responsive">

                            </div>
                        </div>
                        <!-- SAG SOL -->
                        <a class='left carousel-control' href='#carousel-custom' data-slide='prev'>
                            <span class='glyphicon fa fa-angle-left'></span>
                        </a>
                        <a class='right carousel-control' href='#carousel-custom' data-slide='next'>
                            <span class='glyphicon fa fa-angle-right'></span>
                        </a>
                    </div>
                    <!-- THUMB -->
                    <ol class='carousel-indicators mCustomScrollbar meartlab'>
                        <?php foreach ($sliders as $sl): ?>
                            <li data-target='#carousel-custom' data-slide-to='0' class='active'><img src='<?php echo $sl->slider_images ?>' alt='' class="img-responsive" /></li>

                        <?php endforeach; ?>
                    </ol>
                </div>
            </div>
        </div>

    </div>
</div>


