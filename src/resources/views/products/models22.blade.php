<div class="type-22">
    <div class="container">
        <!--HERDER-->
        <section id="demos">

            <div class="row">
                <h3 class="user"><?php echo $slides[0]['slide_title'] ?></h3>
            </div>
            <div class="gach-ngang"></div>
            <div class="gach-ngang1"></div>
            <div class="large-12 columns">
                <div class="owl-carousel owl-theme">
                    <div class="item">
                        <a href="#"><img src="<?php echo $slides[0]['slide_images'] ?>"data-src="<?php echo $slides[0]['slide_images'] ?>"></a>
                        <div class="chu2">
                            <h6><?php echo $slides[0]['slide_title'] ?></h6>
                            <strong class="gia"> <?php echo $slides[0]['slide_heading'] ?></strong>
                            <div class="clearfix"></div>
                            <div class="icon-fa">
                                <i class="fa fa-eye" aria-hidden="true"></i>
                                <i class="fa fa-heart-o" aria-hidden="true"></i>
                                <i class="fa fa-shopping-bag" aria-hidden="true"></i>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <a href="#"><img src="<?php echo $slides[1]['slide_images'] ?>" data-src="<?php echo $slides[0]['slide_images'] ?>"></a>
                        <div class="chu1">
                            <h6><?php echo $slides[1]['slide_title'] ?></h6>
                            <strong class="gia">  <?php echo $slides[0]['slide_heading'] ?></strong>
                            <div class="clearfix"></div>
                            <div class="icon-fa">
                                <i class="fa fa-eye" aria-hidden="true"></i>
                                <i class="fa fa-heart-o" aria-hidden="true"></i>
                                <i class="fa fa-shopping-bag" aria-hidden="true"></i>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <a href="#"><img src="<?php echo $slides[2]['slide_images'] ?>" data-src="<?php echo $slides[0]['slide_images'] ?>"></a>
                        <div class="chu">
                            <h6><?php echo $slides[2]['slide_title'] ?></h6>
                            <div class="money">
                                <del class="del"><span class="gia1"> <?php echo $slides[2]['slide_heading'] ?></span></del>
                                <strong class="gia"> <?php echo $slides[0]['slide_heading'] ?></strong>

                            </div>
                            <div class="clearfix"></div>
                            <div class="icon-fa">
                                <i class="fa fa-eye" aria-hidden="true"></i>
                                <i class="fa fa-heart-o" aria-hidden="true"></i>
                                <i class="fa fa-shopping-bag" aria-hidden="true"></i>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <a href="#"><img src="<?php echo $slides[3]['slide_images'] ?>" data-src="<?php echo $slides[0]['slide_images'] ?>"></a>
                        <div class="chu3">
                            <h6>LG OPTIMUS ZONE</h6>
                            <strong class="gia"> <?php echo $slides[0]['slide_heading'] ?></strong>
                            <div class="clearfix"></div>
                            <div class="icon-fa">
                                <i class="fa fa-eye" aria-hidden="true"></i>
                                <i class="fa fa-heart-o" aria-hidden="true"></i>
                                <i class="fa fa-shopping-bag" aria-hidden="true"></i>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <a href="#"><img src="<?php echo $slides[0]['slide_images'] ?>"data-src="<?php echo $slides[0]['slide_images'] ?>"></a>
                        <div class="chu2">
                            <h6><?php echo $slides[0]['slide_title'] ?></h6>
                            <strong class="gia"> <?php echo $slides[0]['slide_heading'] ?></strong>
                            <div class="clearfix"></div>
                            <div class="icon-fa">
                                <i class="fa fa-eye" aria-hidden="true"></i>
                                <i class="fa fa-heart-o" aria-hidden="true"></i>
                                <i class="fa fa-shopping-bag" aria-hidden="true"></i>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <a href="#"><img src="<?php echo $slides[1]['slide_images'] ?>" data-src="<?php echo $slides[0]['slide_images'] ?>"></a>
                        <div class="chu1">
                            <h6><?php echo $slides[1]['slide_title'] ?></h6>
                            <strong class="gia">  <?php echo $slides[0]['slide_heading'] ?></strong>
                            <div class="clearfix"></div>
                            <div class="icon-fa">
                                <i class="fa fa-eye" aria-hidden="true"></i>
                                <i class="fa fa-heart-o" aria-hidden="true"></i>
                                <i class="fa fa-shopping-bag" aria-hidden="true"></i>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <a href="#"><img src="<?php echo $slides[2]['slide_images'] ?>" data-src="<?php echo $slides[0]['slide_images'] ?>"></a>
                        <div class="chu">
                            <h6><?php echo $slides[2]['slide_title'] ?></h6>
                            <div class="money">
                                <del class="del"><span class="gia1"> <?php echo $slides[2]['slide_heading'] ?></span></del>
                                <strong class="gia"> <?php echo $slides[0]['slide_heading'] ?></strong>

                            </div>
                            <div class="clearfix"></div>
                            <div class="icon-fa">
                                <i class="fa fa-eye" aria-hidden="true"></i>
                                <i class="fa fa-heart-o" aria-hidden="true"></i>
                                <i class="fa fa-shopping-bag" aria-hidden="true"></i>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <a href="#"><img src="<?php echo $slides[3]['slide_images'] ?>" data-src="<?php echo $slides[0]['slide_images'] ?>"></a>
                        <div class="chu3">
                            <h6>LG OPTIMUS ZONE</h6>
                            <strong class="gia"> <?php echo $slides[0]['slide_heading'] ?></strong>
                            <div class="clearfix"></div>
                            <div class="icon-fa">
                                <i class="fa fa-eye" aria-hidden="true"></i>
                                <i class="fa fa-heart-o" aria-hidden="true"></i>
                                <i class="fa fa-shopping-bag" aria-hidden="true"></i>
                            </div>
                        </div>
                    </div>


                </div>
                <script>
                    $(document).ready(function () {
                        var owl = $('.owl-carousel');
                        owl.owlCarousel({
                            margin: 10,
                            nav: true,
                            loop: true,
                            responsive: {
                                0: {
                                    items: 1
                                },
                                600: {
                                    items: 3
                                },
                                1000: {
                                    items: 4
                                }
                            }
                        })
                    })
                </script>
            </div>
        </section>
        <script src="js/highlight.js" type="text/javascript"></script>
        <script src="js/app.js" type="text/javascript"></script>
    </div>
</div>