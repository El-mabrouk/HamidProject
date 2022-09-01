<!DOCTYPE html>
<html>
<head>
</head>
<body class=main>
 
<?php require('includs/sidenavigation.php');?>
<?php include ('includs/dbconnection.php'); ?>



<table>
<tr>
<th>category id</th> 
<th>statu</th> 
<th>title</th>
<th>date</th> 
<th>post</th> 
<th>image</th>
<th>views</th> 
<th>likes</th> 
  
</tr>

<?php
$query='SELECT * FROM tbl_posts';
$result=mysqli_query($connect,$query);

while($data=mysqli_fetch_assoc($result)){

     echo '<tr>'
     .'<th>' .$data['ca_id'].'</th>' 
     .'<th>'.$data['statu'].'</th>' 
     .'<th>'.$data['title'].'</th>'
     .'<th>' .$data['date_creat'].'</th>' 
     .'<th>'.$data['post'].'</th>' 
     .'<th>'.$data['p_image'].'</th>'
     .'<th>' .$data['view_c'].'</th>' 
     .'<th>'.$data['likes_c'].'</th>' 
     .'</tr>';
}
?>


</table>
<style>
th{
padding: 20px;

}

</style>

</body>
</html>
