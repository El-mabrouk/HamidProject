<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="css/dashboard.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<body class=main>
 
<?php require('includs/sidenavigation.php'); ?>
<?php include ('includs/dbconnection.php'); ?>


<?php

$qry_comment="SELECT COUNT(*) as num FROM tbl_comments";
$total_comment= mysqli_fetch_array(mysqli_query($connect,$qry_comment));
$total_comment = $total_comment['num'];

$qry_urs="SELECT COUNT(*) as num FROM tbl_users";
$total_users= mysqli_fetch_array(mysqli_query($connect,$qry_urs));
$total_users = $total_users['num'];

$qry_cat="SELECT COUNT(*) as num FROM tbl_categorys";
$total_category= mysqli_fetch_array(mysqli_query($connect,$qry_cat));
$total_category = $total_category['num'];

$qry_post="SELECT COUNT(*) as num FROM tbl_posts";
$total_posts= mysqli_fetch_array(mysqli_query($connect,$qry_post));
$total_posts = $total_posts['num'];

$qry_report="SELECT COUNT(*) as num FROM tbl_reports";
$total_reports= mysqli_fetch_array(mysqli_query($connect,$qry_report));
$total_reports = $total_reports['num'];


?>

<table>
<tr>   
<th > 
    <i class="fa fa-sitemap"></i><br> 
    <div class=title>  Category </div> 
    <div class=count><?php echo $total_category ;?> categorys</div>

</th>

<th> 
    <i class="fa fa-paste"></i><br> 
    <div class=title>Posts </div>  
    <div class=count> <?php echo $total_posts ;?> posts</div>
      
</th>


<th> 
    <i class="fa fa-microchip"></i><br> 
    <div class=title>Comments </div> 
    <div class=count><?php echo $total_comment; ?> comments</div>
      
</th>

</tr>

<tr>   
<th> 
    <i class="fa fa-microchip"></i><br> 
    <div class=title>User </div>  
    <div class=count><?php echo $total_users;?> users</div>

</th>

<th> 
    <i class="fa fa-microchip"></i><br> 
    <div class=title>Report  </div> 
    <div class=count><?php echo $total_reports;?> reports</div>
      
</th>



</tr>


</table>

 <?php


//mysqli_close($connect);
?>


</body>
</html>
