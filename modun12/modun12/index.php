
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
    <link href="css/styles.css" rel="stylesheet" type="text/css"/>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css"/>
    <link rel="stylesheet" type="text/css" href="js/bootstrap.min.js"/>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="js/jquery-3.2.0.min.js">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">

    


</head>
<body>
 <div class="stype-11">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
             
    <h3 class="produt1">
      <span class="produt2">
        PRPDUCT TAGS
    </span>
    <div  class="duongvien"></div>
</h3>
<div class="tang">
    <a href="#">ACCESSONRIES</a>
    <a href="#">ANDROID</a>
    <a href="#">APPLE</a>
    <a href="#">CASES</a>
    <a href="#">ENVATO</a>
    <a href="#">IPHONE</a>
    <a href="#">NEXUS</a>
    <a href="#">NOKIA</a>
    <a href="#">PREMIUM</a>
    <a href="#">SAMSUNG</a>
    <a href="#">SMART</a>
    <a href="#">ULOCKED</a>
</div>

</div>
</div>   
</div>
</body>
</html>
