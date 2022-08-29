[10:26 am, 09/08/2022] Narayan Sangle Ycip: !DOCTYPE html>
<html lang="">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Title Page</title>

        <!-- Bootstrap CSS -->
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="search.js"></script>
        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.3/html5shiv.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->
        <script>
            function checkvalue()
            {
                var eid=document.getElementById("txtId").value;
                if(eid=="" || eid==null)
                {
                    alert("Plz Enter Id");
                    return false;
                }
                var ename=document.getElementById("txtName").value;

                for(i=0; i<ename.length; i++)
                {
                    ch=ename[i];
                    if(!(isNaN(ch) || (ch==" ")))
                    {
                        alert("Plz Enter Only Text Value in Name.");
                        return false;
                    }
                }

                var sal=document.getElementById("txtSal").value;

                if(sal<0)
                {
                    alert("Plz Enter Salary More Than 0");
                    return false;
                }

                return true;
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
                    $('#txtId').val(values[0]);
                    $('#txtName').val(values[1]);
                    $('#txtSal').val(values[2]);
                           
            });


        });
        </script>
    </head>
    <body>
        <?php
            include("search.php");
        ?>
        
        <div class="container">
            
            <div class="row">
                
                <div class="panel panel-primary">
                      <div class="panel-heading">
                            <h3 class="panel-title">Emp Data</h3>
                      </div>
                      <div class="panel-body">
                            
                            <form action="saveEmp.php" method="GET" role="form" onsubmit="return checkvalue()">
                                <?php
                                    require "dbcon.php";
                                    $sql="select max(eid) from tblemp";
                                    $res=mysqli_query($con,$sql);
                                    $r=mysqli_fetch_array($res)
                                ?>
                            
                                <div class="form-group">
                                    <label for="">Emp Id</label>
                                    <input type="text" class="form-control" id="txtId" 
                                    name="txtId" placeholder="Enter Emp Id" value=" <?php echo ($r[0]+1); ?>" readonly>
                                    <?php
                                        mysqli_close($con);
[10:26 am, 09/08/2022] Narayan Sangle Ycip: ?>
                                </div>

                                <div class="form-group">
                                    <label for="">Emp Name</label>
                                    <input type="text" class="form-control" id="txtName" 
                                    name="txtName" placeholder="Enter Emp Name">
                                </div>

                                <div class="form-group">
                                    <label for="">Emp Salary</label>
                                    <input type="text" class="form-control" id="txtSal" 
                                    name="txtSal" placeholder="Enter Emp Id">
                                </div>
                            
                                
                            
                                <button type="submit" class="btn btn-primary" value="save" name="save">Save</button>

                                
                                <button type="reset" class="btn btn-primary">Reset</button>
                                
                            </form>
                            
                      </div>
                </div>
                
            </div>
            
            <div class="row">
           
            </div>
            
            
            <div class="row">
                
                <div class="panel panel-primary">
                      <div class="panel-heading">
                            <h3 class="panel-title">Emp Data</h3>
                      </div>
                      <div class="panel-body">
                        <div class="form-group input-group col-md-offset-3 col-md-4">
                            <input type="search" name="search" id="search" class="form-control" placeholder="search here">
                            <span class="input-group-addon ">
                                <i class="glyphicon glyphicon-search"></i>
                            </span>
                        </div>
                            
                            <table id="display" class="table table-bordered table-hover" id="display">
                                <thead>
                                    <tr>
                                        <th>Emp Id</th>
                                        <th>Emp Name</th>
                                        <th>Emp Salary</th>
                                        <th>Option</th>
                                    </tr>
                                </thead>
                                <tbody>
                                 <?php
                                    require "dbcon.php";
                                    $sql="select *from tblemp";
                                    $res=mysqli_query($con,$sql);
                                    while($r=mysqli_fetch_array($res))
                                    {
                                       echo "<tr id='t1'>";
                                       echo "<td>".$r[0]."</td>";
                                       echo "<td>".$r[1]."</td>";
                                       echo "<td>".$r[2]."</td>";
                                       echo '<td><a onClick=\"javascript: return confirm("Do u Want to Delete Record");\" href="saveEmp.php?action=remove&eid='.$r[0].'" role="button" class="btn btn-danger"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></button></td>';
                                       echo "</tr>";
                                    }
                                    mysqli_close($con);
                                 ?>
                                </tbody>
                            </table>
                            
                      </div>
                </div>
                














                <script>
            $(document).ready(function()
            {
                $('#search').keyup(function(){
                    search_table($(this).val());
                });
                function search_table(value){
                    $('#display #t1').each(function(){
                        var found='false';
                        $(this).each(function()
                        {
                            if($(this).text().toLowerCase().indexOf(value.toLowerCase())>=0)
                            {
                                found='true';
                            }
                        });
                        if(found=='true')
                        {
                            $(this).show();

                        }
                        else
                        {
                            $(this).hide();
                            
                        }
                    });
                }
            });
        </script>