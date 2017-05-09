<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Document</title>
        <?php
        if (!class_exists('lessc')) {
            include ('./libs/lessc.inc.php');
        }
        $less = new lessc;
        $less->compileFile('less/styles.less', 'css/styles.css');
        ?>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
        <link href="css/styles.css" rel="stylesheet" type="text/css"/>
        <link href="css/docs.theme.min.css" rel="stylesheet" type="text/css"/>
        <link href="css/owl.carousel.min.css" rel="stylesheet" type="text/css"/>
        <link href="css/owl.theme.default.min.css" rel="stylesheet" type="text/css"/>

        <script src="js/jquery.min.js" type="text/javascript"></script>
        <script src="js/owl.carousel.js" type="text/javascript"></script>
        <script src="js/scripst.js" type="text/javascript"></script>
    </head>
    <body>
        <div class="type-22">
            <div class="container">
                <!--HERDER-->
                <section id="demos">

                    <div class="row">
                        <h3 class="user">USERS ALSO BOUGHT</h3>
                    </div>
                    <div class="gach-ngang"></div>
                    <div class="gach-ngang1"></div>
                    <div class="large-12 columns">
                        <div class="owl-carousel owl-theme">
                            <div class="item">
                                <a href="#"><img src="images/1.jpg"data-src="images/3.jpg"></a>
                                <div class="chu2">
                                    <h6>LG OPTIMUS ZONE</h6>
                                    <strong class="gia"> £875.00</strong>
                                    <div class="clearfix"></div>
                                    <div class="icon-fa">
                                        <i class="fa fa-eye" aria-hidden="true"></i>
                                        <i class="fa fa-heart-o" aria-hidden="true"></i>
                                        <i class="fa fa-shopping-bag" aria-hidden="true"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <a href="#"><img src="images/3.jpg" data-src="images/3.jpg"></a>
                                <div class="chu1">
                                    <h6>HUAWEI NEXUS 6P</h6>
                                    <strong class="gia"> £875.00</strong>
                                    <div class="clearfix"></div>
                                    <div class="icon-fa">
                                        <i class="fa fa-eye" aria-hidden="true"></i>
                                        <i class="fa fa-heart-o" aria-hidden="true"></i>
                                        <i class="fa fa-shopping-bag" aria-hidden="true"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <a href="#"><img src="images/6.jpg" data-src="images/3.jpg"></a>
                                <div class="chu">
                                    <h6>MOTO G PLUS (4TH GEN.)</h6>
                                    <div class="money">
                                        <del class="del"><span class="gia1">£875.00</span></del>
                                        <strong class="gia"> £875.00</strong>

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
                                <a href="#"><img src="images/4.png" data-src="images/3.jpg"></a>
                                <div class="chu3">
                                    <h6>LG OPTIMUS ZONE</h6>
                                    <strong class="gia"> £875.00</strong>
                                    <div class="clearfix"></div>
                                    <div class="icon-fa">
                                        <i class="fa fa-eye" aria-hidden="true"></i>
                                        <i class="fa fa-heart-o" aria-hidden="true"></i>
                                        <i class="fa fa-shopping-bag" aria-hidden="true"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <a href="#"><img src="images/1.jpg" data-src="images/3.jpg"></a>
                                <div class="chu2">
                                    <h6>LG OPTIMUS ZONE</h6>
                                    <strong class="gia"> £875.00</strong>
                                    <div class="clearfix"></div>
                                    <div class="icon-fa">
                                        <i class="fa fa-eye" aria-hidden="true"></i>
                                        <i class="fa fa-heart-o" aria-hidden="true"></i>
                                        <i class="fa fa-shopping-bag" aria-hidden="true"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <a href="#"><img src="images/3.jpg" data-src="images/3.jpg"></a>
                                <div class="chu1">
                                    <h6>HUAWEI NEXUS 6P</h6>
                                    <strong class="gia"> £875.00</strong>
                                    <div class="clearfix"></div>
                                    <div class="icon-fa">
                                        <i class="fa fa-eye" aria-hidden="true"></i>
                                        <i class="fa fa-heart-o" aria-hidden="true"></i>
                                        <i class="fa fa-shopping-bag" aria-hidden="true"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <a href="#"><img src="images/6.jpg" data-src="images/3.jpg"></a>
                                <div class="chu">
                                    <h6>MOTO G PLUS (4TH GEN.)</h6>
                                    <div class="money">
                                        <del class="del"><span class="gia1">£875.00</span></del>
                                        <strong class="gia"> £875.00</strong>

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
                                <a href="#"><img src="images/4.png" data-src="images/3.jpg"></a>
                                <div class="chu3">
                                    <h6>LG OPTIMUS ZONE</h6>
                                    <strong class="gia"> £875.00</strong>
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
    </body>

</html>
