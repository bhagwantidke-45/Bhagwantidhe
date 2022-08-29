
<!DOCTYPE html>
<html lang="">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>add laptop</title>

        <!-- Bootstrap CSS -->
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.3/html5shiv.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->
    <!--    <script>
               data="";
            function show(){
                
            a=document.getElementById("txtlg").value;
            b=document.getElementById("txtln").value;
            c=document.getElementById("txtlc").value;
          d=document.getElementById("txtld").value;
            e=document.getElementById("txtle").value;
            f=document.getElementById("txtlf").value;
            
                data+="<tr><td>"+a+"</td><td>"+b+"</td><td>"+c+"</td><td>"+d+"</td><td>"+e+"</td><td>"+f+"</td></tr>"; 
document.getElementById("body").innerHTML=data;

alert("Your Records has been SUBMITED :----");
            }
 
/*function a2(){
    alert("Your Records has been SUBMITED :----");
}*/
        </script>-->

        <script>

$(document).ready(function()
            {
                $("#display").on("click", "tbody tr", function (event)
                {
                    var values = [];
                    var count = 0;
                    $(this).find("td").each(function()
                    {
                           values[count] = $(this).text();
                        count++;
                    });
                    $('#txtid').val(values[0]);
                    $('#txtimage').val(values[1]);
                    $('#txtname').val(values[2]);
                    $('#txtcompany').val(values[3]);
                    $('#txtram').val(values[4]);
                    $('#txtissd').val(values[5]);
                    $('#txtprice').val(values[6]);
                    
            });


        });
        </script>
    
    
    </head>
    <body>
        
<style>
    #b1 a:hover{
        background-color: yellow;
    }
</style>
    <?php
    include("include/headline.html")
    ?>
        <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
    
    
    <div class="panel panel-info">
          <div class="panel-heading">
                <h3 class="panel-title" style="text-align:center;"><b>Admin Side Page</b></h3>
          </div>
          <div class="panel-body">
                
            <div id="b1" class="list-group">
                <a href="login.php" class="list-group-item">Log IN</a>
                <a href="addlaptop.php" class="list-group-item active">Admin</a>
                <a href="addseler.php" class="list-group-item">Addseler</a>
                <a href="highlight.php" class="list-group-item">Highlight</a>
                <a href="index.php" class="list-group-item">Client Page</a>
               
            </div>
          </div>
    </div>
    
    </div>
    
          <!--  <div id="b1" class="list-group">
                <a href="login.html" class="list-group-item">Log IN</a>
                <a href="header.html" class="list-group-item">Admin</a>
                <a href="addseler.html" class="list-group-item">Addseler</a>
                <a href="highlight.html" class="list-group-item">Highlight</a>
               
            </div>-->
            
        </div>

<div class="col-xs-9 col-sm-9 col-md-9 col-lg-9">

        <!--<div class="container">-->
            
            <div class="panel panel-info">
                  <div class="panel-heading">
                        <h3 class="panel-title"><b>Laptop Sell Service</b></h3>
                  </div>
                  
                  <div class="panel-body">

                        
                        <form action="laptopsave.php" method="GET" role="form">
                            <legend> Add Laptop</legend>
                        
                        <?php
                            require "dbcon.php";
                            $sql="select max(lid) from tbllaptop";
                            $res=mysqli_query($con,$sql);
                            $r=mysqli_fetch_array($res)
                        ?>
                            <div class="form-group">
                                <label for="">ID</label>
                                <input type="txt" class="form-control" id="txtid" name="txtid" placeholder="laptop id">
                            </div>
                            <div class="form-group">
                                <label for="">Laptop Image</label>
                                <input type="file" class="form-control" id="txtimage" name="txtimage" placeholder="laptop image">
                            </div>

                            <div class="form-group">
                                <label for="">Laptop Name</label>
                                <input type="text" class="form-control" id="txtname" name="txtname" placeholder="laptop name">
                            </div>
                            <div class="form-group">
                                <label for="">Laptop company</label>
                                <input type="text" class="form-control" id="txtcompany" name="txtcompany" placeholder="laptop company">
                            </div>
                            <div class="form-group">
                                <label for="">Laptop RAM</label>
                                <input type="text" class="form-control" id="txtram" name="txtram" placeholder="laptop RAM ">
                            </div> 
                            <div class="form-group">
                                <label for="">Laptop SSD</label>
                                <input type="text" class="form-control" id="txtlssd" name="txtissd" placeholder="laptop SSD">
                            </div>
                            <div class="form-group">
                                <label for="">Laptop Price</label>
                                <input type="text" class="form-control" id="txtprice" name="txtprice" placeholder="laptop price">
                            </div>
                            
                           <!--<div class="form-group">
                                <label for="input" class="col-sm-2 control-label">:</label>
                                <div class="col-sm-10">
                                    <input type="url" name="" id="input" class="form-control" value="" required="required" title="">
                                </div>-->
                            </div>
                        
                            <button type="submit" class="btn btn-primary" value="save" name="save">Save</button>

                    
                        </form>
                        
                  </div>
            </div>
           <!-- <div class="container">-->
<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
    
            
          
                
                <div class="panel panel-info">
                      <div class="panel-heading">
                            <h3 class="panel-title"></h3>
                      </div>
                      <div class="panel-body">
                      <div class="container">
                
            
                <table class="table table-bordered table-hover" id="display">
                    <thead>
                        <tr>
                             <th>ID</th>
                            <th>Laptop Image</th>
                            <th>Laptop Name</th>
                            <th> Laptop Company</th>
                            <th>Laptop RAM</th>
                            <th>Laptop SSD</th>
                            <th>Laptop Price</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            require "dbcon.php";
                            $sql="select *from tbllaptop";
                            $res=mysqli_query($con,$sql);
                           while($r=mysqli_fetch_array($res))
                           {
                            echo "<tr id='t1'>";
                            echo "<td>".$r[0]."</td>";
                            echo "<td>".$r[1]."</td>";
                            echo "<td>".$r[2]."</td>";
                            echo "<td>".$r[3]."</td>";
                            
                            echo "<td>".$r[4]."</td>";
                            
                            echo "<td>".$r[5]."</td>";
                            
                            echo "<td>".$r[6]."</td>";
                            
                            echo '<td><a href="laptopsave.php? action=remove&id='.$r[0].'" role="button" class="btn btn-danger"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></buton></td>';
    
                            echo "</tr>";
                           }
                           mysqli_close($con);
                        
                    ?>
                    </tbody>
                </table>
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
