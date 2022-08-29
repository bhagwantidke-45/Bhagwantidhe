
<!DOCTYPE html>
<html lang="">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>highlight</title>

        <!-- Bootstrap CSS -->
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.3/html5shiv.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->
        <style>
            #b1 a:hover{
                background-color: yellow;
                color: black;
            }
        </style>

            

        <script>
            $(document).ready(function()
            {
                $("#display").on("click", "tbody tr", function (event)
                {
                    var values = [];
                    var count = 0;
                    $(this).find("td").each(function ()
                    {
                           values[count] = $(this).text();
                        count++;
                    });
                    $('#txtid').val(values[0]);
                    $('#txtpname').val(values[1]);
                    $('#txtssd').val(values[2]);
                    $('#txtcapacity').val(values[3]);
                    $('#txtram').val(values[4]);
                    $('#txttype').val(values[5]);
                    $('#txtgraphic').val(values[6]);
                    $('#txtos').val(values[7]);
                    $('#txtoperating').val(values[8]);
                    $('#txttouch').val(values[9]);
                    $('#txtsize').val(values[10]);
                    $('#txtscreentype').val(values[11]);
                    $('#txtspeaker').val(values[12]);
                    $('#txtmic').val(values[13]);
                    $('#txtlan').val(values[14]);
                    $('#txtblutooth').val(values[15]);
                    $('#txt').val(values[16]);
                    
                    
            });


        });
        </script>
    </head>
    <body>
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
                        <a href="addlaptop.php" class="list-group-item">Admin</a>
                        <a href="addseler.php" class="list-group-item">Addseler</a>
                        <a href="highlight.php" class="list-group-item active">Highlight</a>
                        <a href="index.php" class="list-group-item">Client Page</a>
                       
                    </div>
                  </div>
            </div>
            
            </div>
            
        
        <div class="col-xs-9 col-sm-9 col-md-9 col-lg-9">
        
      <!--  <div class="container">-->
            
        
        <div role="tabpanel">
        
            <ul class="nav nav-tabs" role="tablist">
                <li role="presentation" class="active">
                    <a href="#home" aria-controls="home" role="tab" data-toggle="tab" style="background-color: rgb(153, 210, 238);"><b>Product Information</b></a>
                </li>
                <!--<li role="presentation">
                    <a href="#tab" aria-controls="tab" role="tab" data-toggle="tab">tab</a>
                </li>-->
            </ul>
        
        
            <div class="tab-content">
                <div role="tabpanel" class="tab-pane active" id="home">
                    <h1>Product Features</h1>
                    
                  
              
                    
                  
                    
                    <form action="highlightsave.php" method="GET" role="form"onsubmit="return checkvalue2()">
                        <legend>general</legend>
                    <?php
                    require "dbcon.php";
                    $sql="select max(hid) from tblhighlight";
                    $res=mysqli_query($con,$sql);
                    $r=mysqli_fetch_array($res)
                    ?>
                        
                        <div class="form-group">
                            <label for="">ID</label>
                            <input type="text" class="form-control" id="txtid" name="txtid" placeholder="Enter Processor Name" value="<?php echo ($r[0]+1);?>" readonly>
                        </div>
                        <div class="form-group">
                            <label for="">processer Name</label>
                            <input type="text" class="form-control" id="txtpname" name="txtpname" placeholder="Enter Processor Name">
                        </div>

                        <div class="form-group">
                            <label for="">SSD</label>
                            <input type="text" class="form-control" id="txtssd" name="txtssd" placeholder="Enter SSD">
                        </div>

                        <div class="form-group">
                            <label for="">SSD capacity</label>
                            <input type="text" class="form-control" id="txtcapacity" name="txtcapacity" placeholder="Enter SSD Capacity">
                        </div>

                        <div class="form-group">
                            <label for="">RAM</label>
                            <input type="text" class="form-control" id="txtram" name="txtram" placeholder="Enter RAM">
                        </div>

                        <div class="form-group">
                            <label for="">RAM type</label>
                            <input type="text" class="form-control" id="txttype" name="txttype" placeholder="Enter RAM Type">
                        </div>

                        <div class="form-group">
                            <label for="">graphic type</label>
                            <input type="text" class="form-control" id="txtgraphic" name="txtgraphic" placeholder="Enter Graphic Type">
                        </div>

                        <legend>Operating System</legend>

                        <div class="form-group">
                            <label for="">OS Architecture</label>
                            <input type="text" class="form-control" id="txtos" name="txtos" placeholder="Enter OS Architecture">
                        </div>

                        <div class="form-group">
                            <label for="">Operating System</label>
                            <input type="text" class="form-control" id="txtoperating" name="txtoperating" placeholder="Enter Operating system">
                        </div>

                        <legend>Display And Audio Feature</legend>

                        <div class="form-group">
                            <label for="">Touch Screen</label>
                            <input type="text" class="form-control" id="txttouch" name="txttouch" placeholder="Enter Yes/No">
                        </div>

                        <div class="form-group">
                            <label for="">Screen Size</label>
                            <input type="text" class="form-control" id="txtsize" name="txtsize" placeholder="Enter Screen Size">
                        </div>

                        <div class="form-group">
                            <label for="">Screen Type</label>
                            <input type="text" class="form-control" id="txtscreentype" name="txtscreentype" placeholder="Enter Screen Type">
                        </div>

                        <div class="form-group">
                            <label for="">Speaker</label>
                            <input type="text" class="form-control" id="txtspeaker" name="txtspeaker" placeholder="Speaker Yes/No">
                        </div>

                        <div class="form-group">
                            <label for="">Internal-mic</label>
                            <input type="text" class="form-control" id="txtmic" name="txtmic" placeholder="Enter Yes/No">
                        </div>

                        <legend>Connectivity Feature</legend>

                        <div class="form-group">
                            <label for="">Wireless LAN</label>
                            <input type="text" class="form-control" id="txtlan" name="txtlan" placeholder="Enter Yes/No">
                        </div>

                        <div class="form-group">
                            <label for="">Blutooth </label>
                            <input type="text" class="form-control" id="txtblutooth" name="txtblutooth" placeholder="Enter Yes/No">
                        </div>
                    
                        
                    
                        <button type="submit" class="btn btn-primary" value="save" name="save">Save</button>
                    </form>
                    
                 </div>
<!--<div role="tabpanel" class="tab-pane" id="tab">


                </div>-->
            </div>
        </div>
        </div>
        </div>
        </div>
        
        <p></p>
      <!--  <div class="container">-->
            
     
        
        
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
            
            
       
        
        <div class="panel panel-info">
              <div class="panel-heading">
                    <h3 class="panel-title"></h3>
              </div>
              
                
              
                    
                <div class="panel-body">
                        
                   
                <table class="table table-bordered table-hover" id="display">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Processor Name</th>
                            <th>SSD</th>
                            <th>SSD Capacity</th>
                            <th>RAM</th>
                            <th>RAM TYpe</th>
                            <th>Graphic Type</th>
                            <th>OS Architecture</th>
                            <th>Operating System</th>
                            <th>Touch Screen</th>
                            <th>Screen Size</th>
                            <th>Screen Type</th>
                            <th>Speaker</th>
                            <th>Internal-Mic</th>
                            <th>Wireless LAN</th>
                            <th>Blutooth</th>
                            <th>option</th>
                            
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            require "dbcon.php";
                            $sql="select *from tblhighlight";
                            $res=mysqli_query($con,$sql);
                            while($r=mysqli_fetch_array($res)) 
                            {
                               echo "<tr id='t2'>";
                               echo "<td>".$r[0]."</td>";
                               echo "<td>".$r[1]."</td>";
                               echo "<td>".$r[2]."</td>";
                               echo "<td>".$r[3]."</td>";
                               echo "<td>".$r[4]."</td>";
                               echo "<td>".$r[5]."</td>";
                               echo "<td>".$r[6]."</td>";
                               echo "<td>".$r[7]."</td>";
                               echo "<td>".$r[8]."</td>";
                               echo "<td>".$r[9]."</td>";
                               echo "<td>".$r[10]."</td>";
                               echo "<td>".$r[11]."</td>";
                               echo "<td>".$r[12]."</td>";
                               echo "<td>".$r[13]."</td>";
                               echo "<td>".$r[14]."</td>";
                               echo "<td>".$r[15]."</td>";
                              /* echo "<td>".$r[16]."</td>";
                               echo "<td>".$r[17]."</td>";*/

                               echo '<td><a href="highlightsave.php? action=remove&id='.$r[0].'"role="button" class="btn btn-danger"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></button></td>';
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
                        </div>

        <!-- jQuery -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <!-- Bootstrap JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    </body>
</html>
