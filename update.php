<?php
$con=mysqli_connect('localhost','root','','db_bms');

$query="SELECT * from book";

$result= mysqli_query($con,$query);

$num=mysqli_num_rows($result);



?>

<html>
<head>
<link rel="stylesheet" href="./css/view.css" />
</head>
<body>
<h2> BOOKS RECORD </h2>
<form action="updation.php" method="post">
<table id=t1 >

<tr>
<th> Bookid </th>
<th> Title  </th>
<th> Author</th>
<th> Price </th>
</tr>
<?php 

for($i=1;$i<$num;$i++)
{
	
	$row=mysqli_fetch_array($result);
	
	
?>
<tr>
<td><input type="hidden" name="bookid<?php echo $i; ?>" value="<?php echo $row['bookid']; ?>"     /></td>

<td><input type="text" name="title<?php echo $i; ?>" value="<?php echo $row['title'];  ?>"        /></td>
<td><input type="text" name="author<?php echo $i; ?>" value="<?php echo $row['author']; ?>"      /></td>
<td><input type="text" name="price<?php echo $i; ?>"  value="<?php echo $row['price']; ?>"           /> </td>

</tr>


<?php
}
 ?>
 
 <tr>
<td colspan="5"> <input type="submit" value="update" </td>
</tr>
</table>
</form>
</html>
