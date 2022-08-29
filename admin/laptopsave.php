<?php

require "dbcon.php";

if(isset($_GET["save"]))
{
    $id=$_GET["txtid"];
    $imgg=$_GET["txtimage"];
    $name=$_GET["txtname"];
    $company=$_GET["txtcompany"];
    $ram=$_GET["txtram"];
    $ssd=$_GET["txtissd"];
    $price=$_GET["txtprice"];

    $sql="insert into tbllaptop(lid,limage,lname,lcompany,lram,lssd,lprice) values('$id','$imgg','$name','$company','$ram','$ssd','$price')";
    if (mysqli_query($con,$sql))
     {
        
      /* $error=mysqli_error($con);
        echo $error;*/
   echo "<script> alert('Record Saved')</script>";
    $extra="addlaptop.php";
    $host=$_SERVER['HTTP_HOST'];
    $uri=rtrim(dirname($_SERVER['PHP_SELF']),'/\\');
    echo "<script>open('http://$host$uri/$extra','_self')</script>";
    }
    else {
        $sql="update tbllaptop set lname='$lname',lcompany='$company',lram='$ram',lssd='$ssd',lprice='$price' where lid='$id'";
        if (mysqli_query($con,$sql))
         {
                    
           /* $error=mysqli_error($con);
            echo $error;*/
                echo "<script> alert('Record updated')</script>";
                $extra="addlaptop.php";
                $host=$_SERVER['HTTP_HOST'];
                $uri=rtrim(dirname($_SERVER['PHP_SELF']),'/\\');
                echo "<script>open('http://$host$uri/$extra','_self')</script>";
        }
        else {
            $error=mysqli_error($con);
            echo $error;
            $extra="addlaptop.php";
           $host=$_SERVER['HTTP_HOST'];
            $uri=rtrim(dirname($_SERVER['PHP_SELF']),'/\\');
            echo "<script>open('http://$host$uri/$extra','_self')</script>"; 
        }
    }


// mysqli_close($con);


}
else if(isset($_GET["action"]))
{
    $id=$_GET["id"];
            $sql="delete from tbllaptop where lid='$id'";
          if(mysqli_query($con,$sql))
            {
            
              /*  $error=mysqli_error($con);
                echo $error;*/
               echo "<script>alert('Record deleted')</script>";
               $extra="addlaptop.php";
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
           $extra="addlaptop.php";
            $host=$_SERVER['HTTP_HOST'];
            $uri=rtrim(dirname($_SERVER['PHP_SELF']),'/\\');
            echo "<script>open('http://$host$uri/$extra','_self')</script>";
        
             }
    }

?>