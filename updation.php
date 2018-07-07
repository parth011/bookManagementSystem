<?php 

$size = sizeof($_POST);
$records = $size/4;

for($i=1;$i<=$records;$i++)
{
	
	$index4="bookid".$i;
$bookid[$i]=$_POST[$index4];


$index1="title".$i;
$title[$i]=$_POST[$index1];

$index2="author".$i;
$author[$i]=$_POST[$index2];

$index3="price".$i;
$price[$i]=$_POST[$index3];


}

$con=mysqli_connect('localhost','root','','db_bms');


for($i=1;$i<=$records;$i++)
{
$q="UPDATE `book` SET title='$title[$i]',author='$author[$i]',price=$price[$i] WHERE bookid =$bookid[$i]";

mysqli_query($con,$q);

}

?>




<html>
<head>
</head>
<body>
<h2> BOOK MANAGEMENT SYSTEM</h2>
<p>
<?php
	"Records UPDATED";
?>
</p>
<br/> Go back to homepage <a href='home.php'>CLICK HERE </a>

</body>
</html>
