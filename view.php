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
<td><?php echo $row['bookid'] ?></td>

<td><?php echo $row['title'] ?></td>
<td><?php echo $row['author'] ?> </td>
<td><?php echo $row['price'] ?> </td>

</tr>
<?php
}
 ?>
</table>
</html>
