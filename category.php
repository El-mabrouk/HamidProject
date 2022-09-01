<!DOCTYPE html>
<html>
<head>   
     <link rel="stylesheet" href="css/category.css">

</head>
<body class=main>
 
<?php require('includs/sidenavigation.php');?>
<?php include ('includs/dbconnection.php'); ?>



<table>
<tr>
<th>statu</th> 
<th>title</th> 
<th>image</th>  
</tr>

<?php
$query='SELECT * FROM tbl_categorys';
$result=mysqli_query($connect,$query);

while($data=mysqli_fetch_assoc($result)){

     echo '<tr>'
     .'<th>' .$data['statu'].'</th>' 
     .'<th>'.$data['title'].'</th>' 
     .'<th>'.$data['c_image'].'</th>'  
     .'</tr>';
}
?>


</table>

<style>
th{
padding: 60px;

}

</style>
</body>
</html>
