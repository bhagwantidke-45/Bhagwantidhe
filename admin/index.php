
<!DOCTYPE html>
<html lang="">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Title Page</title>

        <!-- Bootstrap CSS -->
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.3/html5shiv.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->
        <style>
            #bhag1 img{
                  /*  display: block;
                  display: inline;*/
                  display: inline-block;
                  
                width:50%;
                height:400px;
            }
        </style>
    </head>
    <body>           
    <!--<img src="acer1.jpg">-->
    
    
        <?php
       include("include/header.html")
       ?>    
            <?php
            include("include/sidemenu.html")
            ?>
            <div class="col-xs-10 col-sm-10 col-md-10 col-lg-10">
                
            <div class="panel panel-primary">
                  <div class="panel-heading">
                        <h3 class="panel-title"></h3>
                  </div>
                  <div id="bhag1"style="display: inline-block;" class="panel-body">


                  <img src='acer1.jpg'>
                  <img src='acer3.jpg'>

                        <?php
                            echo "<div><img src='acer1.jpg'  style='padding:5px; width:500px; height:500px;'></div>";
                            echo "<div><img src='acer1.jpg' style='width:500px; height:500px;'></div>";
                        ?>
                  </div>
            </div>
            
            </div>
            
      
        <!-- jQuery -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <!-- Bootstrap JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    </body>
</html>
