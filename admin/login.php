
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
    <script>
        function showalert(){
            alert("Welcome Admin :-----");
        }
    </script>
    </head>
    <body>
       
       <div class="container">
        
       <div style="text-align:center"><div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
            
        <div class="panel panel-info">
              <div class="panel-heading">
                    <h3 class="panel-title">Log IN </h3>
              </div>
              <div class="panel-body">
                    
                    <form action="addlaptop.php" method="POST" role="form">
                        <legend></legend>
                    
                        <div class="form-group">
                            <label for="">User Name</label>
                            <input type="text" class="form-control" id="txtname" placeholder="Enter user name" required>
                        </div>

                        <div class="form-group">
                            <label for="">Password</label>
                            <input type="password" class="form-control" id="txtpass" placeholder="Enter Password" required>
                        </div>
                    
                        
                    
                        <button type="submit" class="btn btn-primary" onclick="showalert()">Submit</button>
                    </form>
                    
              </div>
        </div>
        
       </div>
    </div>
    </div>
       

        <!-- jQuery -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <!-- Bootstrap JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    </body>
</html>
