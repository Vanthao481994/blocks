<html>
<head>

    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>


    <?php
    if (!class_exists('lessc')) {
        include ('./libs/lessc.inc.php');
    }
    $less = new lessc;
    $less->compileFile('less/1.less', 'css/1.css');
    ?>
    <link href="css/1.css" rel="stylesheet" type="text/css" />

</head>

<body>

<div class="module-4">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <ul>
                    <li>
                    <img src="http://pro-theme.com/wordpress/ismile/wp-content/uploads/2015/10/prom1-1.jpg">
                </li>
                </ul>
                
                
            </div>
            <div class="col-md-8">
            <ul>
            <li>
                <img src="http://pro-theme.com/wordpress/ismile/wp-content/uploads/2015/10/prom1-2.jpg">
            </li>
            </ul>
            
            <ul>
                <li>
                <img src=" http://pro-theme.com/wordpress/ismile/wp-content/uploads/2015/10/prom1-3.jpg">
                   
                 </li>
            </ul>
            
                
            </div>
        </div>
    </div>
</div>


</body>
</html>
