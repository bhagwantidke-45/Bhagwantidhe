
<!DOCTYPE html>
<html lang="">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Add seler </title>

        <!-- Bootstrap CSS -->
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.3/html5shiv.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->
     
     <!--<script>
            data="";

            function show(){
                a=document.getElementById("txta").value;
                b=document.getElementById("txtb").value;
                c=document.getElementById("txtc").value;
                d=document.getElementById("txtd").value;
                e=document.getElementById("txte").value;
              /*  f=document.getElementById().value;*/

              data+="<tr><td>"+a+"</td><td>"+b+"</td><td>"+c+"</td><td>"+d+"</td><td>"+e+"</td></tr>"
            
            document.getElementById("b1").innerHTML=data;
            alert("Your Records has been SUBMITED :----");
            }
        </script>-->


          <script>
            function checkvalue()
            {
                alert("Hi...Bhagwan");
                var sid=document.getElementById("txtid").value;
                if(sid=="" || sid==null)
                {
                    alert("Plz Enter Id");
                    return false;
                }
                var sname=document.getElementById("txtname").value;

                for(i=0; i<sname.length; i++)
                {
                    ch=sname[i];
                    if(!(isNaN(ch) || (ch==" ")))
                    {
                        alert("Plz Enter Only Text Value in Name.");
                        return false;
                    }
                }

                var mobno=document.getElementById("txtmobno").value;

                if (mobno.length !=10) {
                    
                
                
                    alert("please enter valid mobile no");
                    return false;
                }
else{
                return true;
}       
            }
            
        </script>


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
                    $('#txtname').val(values[1]);
                    $('#txtpassw').val(values[2]);
                    $('#txtmobno').val(values[3]);
                    $('#txtadd').val(values[4]);
                    $('#txtpin').val(values[5]);
                    
            });


        });
        </script>
    
    </head>
    <body>
        
       <style>
            #b3 a:hover{
                background-color: yellow;
            }
        </style>
        <?php
            include("include/headline.html")
        ?>
        
        <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
    
    
            <div class="panel panel-info">
                  <div class="panel-heading">
                        <h3 class="panel-title"  style="text-align:center;"><b>Admin Side Page</b></h3>
                  </div>
                  <div class="panel-body">
                        
                    <div id="b3" class="list-group">
                        <a href="login.php" class="list-group-item">Log IN</a>
                        <a href="addlaptop.php" class="list-group-item">Admin</a>
                        <a href="addseler.php" class="list-group-item active">Addseler</a>
                        <a href="highlight.php" class="list-group-item">Highlight</a>
                        <a href="index.php" class="list-group-item">Client Page</a>
                       
                    </div>
                  </div>
            </div>
            
            </div>
            
            <div class="col-xs-9 col-sm-9 col-md-9 col-lg-9">
            
     <!--<div class="container">-->
        
        <div class="panel panel-info">
              <div class="panel-heading">
                    <h3 class="panel-title"><b>Add Seller</b></h3>
              </div>
              <div class="panel-body">
                 
                    <form action="save.php" method="GET" role="form"onsubmit="return checkvalue()">
                    
                    <?php
                                    require "dbcon.php";
                                    $sql="select max(sid) from tblseler";
                                    $res=mysqli_query($con,$sql);
                                    $r=mysqli_fetch_array($res)
                      ?>
                        <div class="form-group">
                            <label for="">Seller ID</label>
                            <input type="text" class="form-control" id="txtid" name="txtid" placeholder="Enter Seller ID" value="<?php echo ($r[0]+1);?>" readonly>
                            <?php
                            mysqli_close($con);
                            ?>
                        </div>
                    
                        <div class="form-group">
                            <label for="">Seller Name</label>
                            <input type="text" class="form-control" id="txtname" name="txtname" placeholder="Enter Seller Name">
                        </div>
                        
                        <div class="form-group">
                            <label for="">Password</label>
                            <input type="password" class="form-control" id="txtpassw" name="txtpassw" placeholder="Enter Seller Password">
                        </div>
                    
                        <div class="form-group">
                            <label for="">Mobile No.</label>
                            <input type="number" class="form-control" id="txtmobno" name="txtmobno" placeholder="Enter Seller Mob.No.">
                        </div>
                    
                        <div class="form-group">
                            <label for="">Address</label>
                            <input type="text" class="form-control" id="txtadd" name="txtadd" placeholder="Enter Seller Address">
                        </div>
                    
                        <div class="form-group">
                            <label for="">PIN Code</label>
                            <input type="number" class="form-control" id="txtpin" name="txtpin" placeholder="Enter Seller PIN Code">
                        </div>
                    
                    
                    <!--    <div class="form-group">
                            <label for="">Re-Enter Passwor</label>
                            <input type="password" class="form-control" id="txtrepass" name="txtrepass" placeholder="Re-Enter Seller Password">
                        </div>
        -->
                     
                    <button type="submit" class="btn btn-primary"value="save" name="save">Save</button>
                    <button type="reset" class="btn btn-default">reset</button>
        </form>
        
<?php
include("search.php")
?>
            
                   
                    
              </div>
              </div>
              </div></div>
             <!-- <div class="container">-->
              
             <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                
            
              
              <div class="panel panel-info">
                  <div class="panel-heading">
                        <h3 class="panel-title"></h3>
                  </div>
                  <div class="panel-body">
                    
                  <input type="search" name="search" id="search" class="form-control" placeholder="search here" >
                    <span class="input-group-addon">
                     <i class="glyphicon glyphicon-search"></i>
                            </span>
                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
              <div class="panel-body">
              <table class="table table-bordered table-hover" id="display">
                <thead>
                    <tr>
                        
                        <th>Seller ID</th>
                        <th>Seller Name</th>
                        <th>Seller password</th>
                        <th>Seller Mobile No.</th>
                        <th>Seller Address</th>
                        <th>Seller PIN Code</th>
                     
                    </tr>
                </thead>
                <tbody>
                    <?php
                    require "dbcon.php";
                    $sql="select *from tblseler";
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
                      
                        echo '<td><a href="save.php? action=remove&id='.$r[0].'" role="button" class="btn btn-danger"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></button></td>';
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
