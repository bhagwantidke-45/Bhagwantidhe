
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
    </head>
    <body>
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
      <div class="panel-body">
            <?php

                require "dbcon.php";
                $sql="select *from tbllaptop where lcompany='HP'";
                $res=mysqli_query($con,$sql);
                while ($r=mysqli_fetch_array($res)) {
                    echo "<br>";
                  /*  echo "<div>".$r[0]."</div>";*/
                  echo "<br>";
                    echo "<div>".$r[2]."</div>";
                    echo "<div>".$r[3]."</div>";
                    echo "<div>".$r[4]."</div>";
                    echo "<div>".$r[5]."</div>";
                    echo "<div>".$r[6]."</div>";
                }
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
