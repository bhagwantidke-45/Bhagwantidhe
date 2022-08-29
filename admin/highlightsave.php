<?php
require "dbcon.php";
if(isset($_GET["save"]))
 {
    $id=$_GET["txtid"];
    $processorname=$_GET["txtpname"];
    $ssd=$_GET["txtssd"];
    $ssdcapacity=$_GET["txtcapacity"];
    $ram=$_GET["txtram"];
    $ramtype=$_GET["txttype"];
    $graphictype=$_GET["txtgraphic"];
    $osarchitecture=$_GET["txtos"];
    $operatingsystem=$_GET["txtoperating"];
    $touchscreen=$_GET["txttouch"];
    $screensize=$_GET["txtsize"];
    $screentype=$_GET["txtscreentype"];
    $speaker=$_GET["txtspeaker"];
    $internalmic=$_GET["txtmic"];
    $wirelesslan=$_GET["txtlan"];
    $bblutooth=$_GET["txtblutooth"];

$sql="insert into tblhighlight(hid,hname,hssd,hssdcapacity,hram,hramtype,hgraphictype,hosa,hos,htouchscreen,hscreensize,hscreentype,hspeaker,hmic,hlan,hblutooth) values('$id','$processorname','$ssd','$ssdcapacity','$ram','$ramtype','$graphictype','$osarchitecture','$operatingsystem','$touchscreen','$screensize','$screentype','$speaker','$internalmic','$wirelesslan','$bblutooth')";

if (mysqli_query($con,$sql))
 {
 echo "<script>alert('record saved')</script>";
 $extra="highlight.php";
 $host=$_SERVER['HTTP_HOST'];
 $uri=rtrim(dirname($_SERVER['PHP_SELF']),'/\\');
 echo "<script>open('http://$host$uri/$extra','_self')</script>";


}
else {
    
    $sql="update tblhighlight set hname='$processorname',hssd='$ssd',hssdcapacity='$ssdcapacity',hram='$ram',hramtype='$ramtype',hgraphictype='$graphictype',hosa='$osarchitecture',hos='$operatingsystem',htouchscreen='$touchscreen',hscreensize='$screensize',hscreentype='$screentype',hspeaker='$speaker',hmic='$internalmic',hlan='$wirelesslan',hblutooth='$bblutooth' where hid='$id'";
    if(mysqli_query($con,$sql))
    {
        
       /* $error=mysqli_error($con);
        echo $error;*/
       echo "<script>alert('Record Updated')</script>";
        $extra="highlight.php";
        $host=$_SERVER['HTTP_HOST'];
        $uri=rtrim(dirname($_SERVER['PHP_SELF']),'/\\');
        echo "<script>open('http://$host$uri/$extra','_self')</script>"; 
        

    }
    else
    {
        $error=mysqli_error($con);
        echo $error;
        $extra="highlight.php";
        $host=$_SERVER['HTTP_HOST'];
        $uri=rtrim(dirname($_SERVER['PHP_SELF']),'/\\');
        echo "<script>open('http://$host$uri/$extra','_self')</script>"; 
    }
}


mysqli_close($con);


}
else if (isset($_GET["action"])) 
{
$id=$_GET["id"];
$sql="delete from tblhighlight where hid='$id'";
if (mysqli_query($con,$sql))
 {
                
    echo "<script>alert('Record deleted')</script>";
    $extra="highlight.php";
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
 $extra="highlight.php";
 $host=$_SERVER['HTTP_HOST'];
 $uri=rtrim(dirname($_SERVER['PHP_SELF']),'/\\');
 echo "<script>open('http://$host$uri/$extra','_self')</script>";

  }
}

?>