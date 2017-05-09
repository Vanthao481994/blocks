
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
 <div class="stype-16">
    <div class="container">
              <h3 class="produt1">
                
        <div class="price_filter-2">
          <span class="menu-item">
             FLTER MY PRICE
         </span>
         <div  class="duongvien"></div>

    </div>

    <div class="filte">
        <button type="text" class="button">Filter</button>
        <div class="clear">
        <div class="price_lable">
            Price:
            <span class="from">£451</span> -
               <span class="clear">£875</span>
        </div>
        </div>   
		 <img src="images/1.png">
    </div>
</div>
</div>


</body>
</html>
