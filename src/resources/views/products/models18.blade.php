

<div class="type-18 ">
    <div class="col-md-3">
        <div class="container">
            <div class="row">
                <!--HERDER-->
                <div class="col-md-3">
                    <!--FORM--->
                    <h3 class="produt1">
                        <span class="produt2">
                            <?php echo $products[0]['product_title'] ?>
                        </span>
                        <div  class="duongvien"></div>
                    </h3>
                    <form class="form" >
                        <input  type="text" placeholder="Search..">
                    </form>
                    <!--PRODUCTS CATEGORIES --->
                    <h3 class="produt1">
                        <span class="produt2">
                            <?php echo $products[1]['product_title'] ?>
                        </span>
                        <div  class="duongvien"   ></div>
                    </h3>

                    <div class="produt3">

                        <a href="#"> <?php echo $products[0]['product_heading'] ?></a>
                        <a href="#"> <?php echo $products[1]['product_heading'] ?></a>
                        <a href="#"><?php echo $products[2]['product_heading'] ?></a>
                        <a href="#"><?php echo $products[3]['product_heading'] ?></a>
                        <a href="#"><?php echo $products[4]['product_heading'] ?></a>
                    </div>
                    <!--PRODUCTS CATEGORIES --->
                    <h3 class="produt1">
                        <span class="produt2">
                            <?php echo $products[2]['product_title'] ?>
                        </span>
                        <div  class="duongvien"></div>
                    </h3>
                    <div class="product-4">
                        <div class="row">
                            <div class="col-md-12">
                                <div id="myCarousel" class="vertical-slider carousel vertical slide" data-ride="carousel">
                                    <span data-slide="next" class="btn-vertical-slider fa fa-angle-right "
                                          ></span>  
                                    <br />
                                    <!-- Carousel items -->
                                    <div class="carousel-inner">
                                        <div class="item active">
                                            <div class="row">
                                                <div class="col-xs-6 col-sm-5 col-md-5">
                                                    <a href="#"> <img src="<?php echo $products[0]['product_images'] ?>" style="width: 100%;" 
                                                                      alt="Image" /></a>
                                                </div>
                                                <div class="noidung">
                                                    <div class="txt">
                                                        <strong><?php echo $products[0]['product_names'] ?></strong>
                                                        <br>
                                                        <strong class="fa-staro">
                                                            <i class="fa fa-star" aria-hidden="true"></i>
                                                            <i class="fa fa-star" aria-hidden="true"></i>
                                                            <i class="fa fa-star" aria-hidden="true"></i>
                                                            <i class="fa fa-star" aria-hidden="true"></i>
                                                            <i class="fa fa-star-half-o" aria-hidden="true"></i>    
                                                        </strong>
                                                    </div>
                                                    <div class="woocommerce-Price1">
                                                        <a class="money"><?php echo $products[0]['product_price'] ?></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <hr class="ngang">
                                            <div class="row">
                                                <div class="col-xs-6 col-sm-5 col-md-5">
                                                    <a href="#"> <img src="<?php echo $products[1]['product_images'] ?>" style="width: 100%;" 
                                                                      alt="Image" /></a>
                                                </div>
                                                <div class="noidung1">
                                                    <div class="txt">
                                                        <strong><?php echo $products[1]['product_names'] ?></strong>
                                                        <br>
                                                        <strong class="fa-staro">
                                                            <i class="fa fa-star" aria-hidden="true"></i>
                                                            <i class="fa fa-star" aria-hidden="true"></i>
                                                            <i class="fa fa-star" aria-hidden="true"></i>
                                                            <i class="fa fa-star" aria-hidden="true"></i>
                                                            <i class="fa fa-star-half-o" aria-hidden="true"></i>    
                                                        </strong>
                                                    </div>
                                                    <div class="woocommerce-Price1">
                                                        <del><a class="money"><?php echo $products[0]['product_price'] ?></a></del>
                                                        <span><a class="moneyone" href="#"><?php echo $products[1]['product_price'] ?></a></span>
                                                    </div>
                                                </div>
                                            </div>
                                            <hr class="ngang">
                                            <div class="row">
                                                <div class="col-xs-6 col-sm-5 col-md-5">
                                                    <a href="#"> <img src="<?php echo $products[2]['product_images'] ?>" style="width: 100%;" 
                                                                      alt="Image" /></a>
                                                </div>
                                                <div class="noidung2">
                                                    <div class="txt">
                                                        <strong><?php echo $products[2]['product_names'] ?></strong>
                                                    </div>
                                                    <div class="woocommerce-Price1">
                                                        <span class="moneyone" > <?php echo $products[2]['product_price'] ?></span>
                                                    </div>
                                                </div>
                                            </div>
                                            <hr class="ngang">

                                            <!--/row-fluid-->
                                        </div>
                                        <div class="item ">
                                            <div class="row">
                                                <div class="col-xs-6 col-sm-5 col-md-5">
                                                    <a href="#"> <img src="<?php echo $products[3]['product_images'] ?>" style="width: 100%;" 
                                                                      alt="Image" /></a>
                                                </div>
                                                <div class="noidung5">
                                                    <div class="txt">
                                                        <strong><?php echo $products[3]['product_names'] ?></strong><br>
                                                        <del></span><a class="money"><?php echo $products[3]['product_price'] ?></a></del>
                                                        <span><a class="moneyone" href="#"><?php echo $products[2]['product_price'] ?></a></span>
                                                    </div>

                                                </div>
                                            </div>
                                            <hr class="ngang">
                                            <div class="row">
                                                <div class="col-xs-6 col-sm-5 col-md-5">
                                                    <a href="#"> <img src="<?php echo $products[1]['product_images'] ?>" style="width: 100%;" 
                                                                      alt="Image" /></a>
                                                </div>
                                                <div class="noidung6">
                                                    <div class="txt">
                                                        <strong><?php echo $products[4]['product_names'] ?></strong>
                                                        <br>
                                                        <a class="money"><?php echo $products[2]['product_price'] ?></a>
                                                    </div>

                                                </div>
                                            </div>
                                            <hr class="ngang">
                                            <div class="row">
                                                <div class="col-xs-6 col-sm-5 col-md-5">
                                                    <a href="#"> <img src="<?php echo $products[0]['product_images'] ?>" style="width: 100%;" 
                                                                      alt="Image" /></a>
                                                </div>
                                                <div class="noidung">
                                                    <div class="txt">
                                                        <strong><?php echo $products[0]['product_names'] ?></strong>
                                                        <br>
                                                        <strong class="fa-staro">
                                                            <i class="fa fa-star" aria-hidden="true"></i>
                                                            <i class="fa fa-star" aria-hidden="true"></i>
                                                            <i class="fa fa-star" aria-hidden="true"></i>
                                                            <i class="fa fa-star" aria-hidden="true"></i>
                                                            <i class="fa fa-star-half-o" aria-hidden="true"></i>    
                                                        </strong>
                                                    </div>
                                                    <div class="woocommerce-Price1">
                                                        <a class="money"><?php echo $products[0]['product_price'] ?></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <hr class="ngang">
                                            <!--/row-fluid-->
                                        </div>
                                        <!--/item-->
                                    </div>

                                    <span data-slide="prev" class="btn-vertical-slider fa fa-angle-left"
                                          ></span>

                                </div>
                            </div>
                        </div>
                    </div>
                    <!--PRPDUCT TAGS --->
                    <h3 class="produt1">
                        <span class="produt2">
                            <?php echo $products[3]['product_title'] ?>
                        </span>
                        <div  class="duongvien"></div>
                    </h3>
                    <div class="tang">
                        <a href="#"> <?php echo $products[0]['product_tags'] ?></a>
                        <a href="#"><?php echo $products[1]['product_tags'] ?></a>
                        <a href="#"><?php echo $products[2]['product_tags'] ?></a>
                        <a href="#"><?php echo $products[3]['product_tags'] ?></a>
                        <a href="#"><?php echo $products[4]['product_tags'] ?></a>
                        <a href="#"><?php echo $products[5]['product_tags'] ?></a>
                        <a href="#"><?php echo $products[6]['product_tags'] ?></a>
                        <a href="#"><?php echo $products[7]['product_tags'] ?></a>
                        <a href="#"><?php echo $products[8]['product_tags'] ?></a>
                        <a href="#"><?php echo $products[9]['product_tags'] ?></a>
                        <a href="#"><?php echo $products[10]['product_tags'] ?></a>
                        <a href="#"><?php echo $products[11]['product_tags'] ?></a>
                    </div>
                </div>
            </div>
        </div>  
    </div>
</div>


