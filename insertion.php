<?php


$t=$_POST['title'];
$a=$_POST['author'];
$p=$_POST['price'];

$con=mysqli_connect('localhost','root','','db_bms');
$query="insert into book (title,author,price) values ('$t','$a',$p )";


$result=mysqli_query ($con,$query);
?>

<html>
<head>
</head>
<body>
<h2> BOOK MANAGEMENT SYSTEM</h2>
<p>
<?php
if($result==True)
	echo "Record Inserted ";
else
	echo "Record not Inserted";
?>
</p>
<br/> DO YOU WANT TO INSERT MORE <a href='insert.php'>CLICK HERE </a><br/>
Go back to homepage <a href='home.php'>CLICK HERE </a>

</body>
</html>

