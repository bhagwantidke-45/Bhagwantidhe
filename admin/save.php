<?php
    require "dbcon.php";
    if(isset($_GET["save"]))
    {
        
        $id=$_GET["txtid"];
        $sname=$_GET["txtname"];
        $mobileno=$_GET["txtmobno"];/* s-mobileno*/
    
        $spin=$_GET["txtpin"];
        $saddress=$_GET["txtadd"];
    

        $sql="insert into tblseler(sid,sname,smobileno,saddress,spin) values('$id','$sname','$mobileno','$saddress','$spin')";
       
        if(mysqli_query($con,$sql))
        {
            echo "<script>alert('Record Saved')</script>";
            $extra="addseler.php";
            $host=$_SERVER['HTTP_HOST'];
            $uri=rtrim(dirname($_SERVER['PHP_SELF']),'/\\');
            echo "<script>open('http://$host$uri/$extra','_self')</script>"; 
        }
        else{

            $sql="update tblseler set sname='$name',smobileno='$mobno',saddress='$add',spin='$pin'where sid='$id'";
            if(mysqli_query($con,$sql))
            {
                echo "<script>alert('Record Updated')</script>";
                $extra="addseler.php";
                $host=$_SERVER['HTTP_HOST'];
                $uri=rtrim(dirname($_SERVER['PHP_SELF']),'/\\');
                echo "<script>open('http://$host$uri/$extra','_self')</script>"; 
                

            }
            else
            {
                $error=mysqli_error($con);
                echo $error;
                $extra="addseler.php";
                $host=$_SERVER['HTTP_HOST'];
                $uri=rtrim(dirname($_SERVER['PHP_SELF']),'/\\');
                echo "<script>open('http://$host$uri/$extra','_self')</script>"; 
            }
        }


mysqli_close($con);


}
else if(isset($_GET["action"]))
 {
        $id=$_GET["id"];
                $sql="delete from tblseler where sid='$id'";
              if(mysqli_query($con,$sql))
                {
                
                    echo "<script>alert('Record deleted')</script>";
                   $extra="addseler.php";
                    $host=$_SERVER['HTTP_HOST'];
                    $uri=rtrim(dirname($_SERVER['PHP_SELF']),'/\\');
                    echo "<script>open('http://$host$uri/$extra','_self')</script>"; 
                    $error=mysqli_error($con);
                echo $error;
              }
              else
                 {
                    
                    
                $error=mysqli_error($con);
                echo $error;
                $extra="addseler.php";
                $host=$_SERVER['HTTP_HOST'];
                $uri=rtrim(dirname($_SERVER['PHP_SELF']),'/\\');
                echo "<script>open('http://$host$uri/$extra','_self')</script>";
            
                 }
        }

?>


