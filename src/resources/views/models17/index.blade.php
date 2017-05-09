
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Document</title>

       
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="{{ asset('css/models-17.css') }}" rel="stylesheet">
        <link href="{{ asset('bootstrap-3.3.7-dist/css/bootstrap.min.css') }}" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="js/bootstrap.min.js"/>

    </head>
    <body>
        <div class="type-17">
            <div class="container">
                <!--HERDER-->
                <div class="herder">
                    <div class="row">
                        <div class="col-md-7">
                            <!--TITLE--->
                            <h3 class="title"><?php echo $contents[0]['content_title']?></h3>
                        </div>
                        <div class="col-md-5">
                            <!--NAV-->
                            <div class="b-breadcrumbs pull-right hidden-xs ">
                                <ul class="list-unstyled">
                                    
                                    <li><a href="#"><?php echo $contents[0]['content_list']?>></a></li>
                                    <li><a href="#"><?php echo $contents[1]['content_list']?> ></a></li>
                                    <li><a style="text-decoration: none;color: #888888; " href="#"><?php echo $contents[2]['content_list']?></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <!--END HERDER-->
            </div>
        </div>
    </body>
</html>