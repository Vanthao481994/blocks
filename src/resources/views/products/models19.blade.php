
<div class="type-19">
    <div class="col-md-5 top">
        <div class="row">
            <div class="content">  
                <!--OUT-->
                <span class="out">
                    <?php echo $ours[0]['our_title'] ?>
                </span>
                <div class="product-price" >
                    <span class="woocommerce-Price">
                        <?php echo $ours[0]['our_heading'] ?>
                    </span>
                    <span class="woocommerce-Price1">
                        <?php echo $ours[1]['our_heading'] ?>
                    </span>
                    <!--INS-->
                    <div class="ins">
                        <span><i class="fa fa-check" aria-hidden="true"></i></span>
                        <span> <?php echo $ours[4]['our_heading'] ?></span>
                    </div>
                    <div class="fa1">
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star-half-o" aria-hidden="true"></i>
                        <a href="#"><?php echo $ours[2]['our_heading'] ?></a>
                        <!--PRODUCT-->
                        <h3 class="produt">
                            <span class="produt1">
                                <?php echo $ours[1]['our_title'] ?>
                            </span>
                            <div class="duongvien"></div>
                        </h3>
                        <p> <?php echo $ours[3]['our_heading'] ?></p>
                        <h3 class="produt">
                            <span class="produt1">
                                <?php echo $ours[2]['our_title'] ?>
                            </span>
                            <div class="duongvien"></div>

                        </h3>
                        <!--spinner-->
                        <div class="input-group spinner">
                            <input type="text" class="form-control" value="1" min="0" max="10000">
                            <div class="input-group-btn-vertical">
                                <button class="btn btn-default" type="button"><i class="fa fa-caret-up"></i></button>
                                <button class="btn btn-default" type="button"><i class="fa fa-caret-down"></i></button>
                            </div>
                        </div>
                        <div class="bnt-add">
                            <i class="fa fa-heart-o" aria-hidden="true"></i>
                            <button type="submit" class="btn btn-cart-color2"> <?php echo $ours[0]['our_rity'] ?></button>
                        </div>
                        <div class="edd-to">
                            <a href="#"><?php echo $ours[1]['our_rity'] ?></a>
                        </div>
                        <h3 class="produt">
                            <span class="produt1">
                                <?php echo $ours[3]['our_title'] ?>
                            </span>
                            <div class="duongvien"></div>
                        </h3>
                        <div class="tags-list">
                            <ul>

                                <?php foreach ($ours as $or): ?>
                                    <li><a><?php echo $or->our_cat ?></a></li>

                                <?php endforeach; ?>
                            </ul>
                        </div>
                        <div class="clear" style="clear: both;"></div>
                        <h3 class="produt">
                            <span class="produt1">
                                <?php echo $ours[4]['our_title'] ?>
                            </span>
                            <div class="duongvien"></div>
                        </h3>
                        <!--ICON SOCIAL-->
                        <div class="clear" style="clear: both;"></div>
                        <div class="social-list">
                            <a href="#" title="facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                            <a href="#" title="twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                            <a href="#"title="google"><i class="fa fa-google-plus" aria-hidden="true"></i></a>
                            <a href="#" title="shope"> <i class="fa fa-pinterest-p" aria-hidden="true"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>