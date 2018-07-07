<?php

$size= sizeof($_POST);


       
	   $j=1;

for($i=1;$i<=$size;$i++,$j++)
{
	$index="b".$j;
	if(isset($_POST[$index]))

		$b_id[$i]=$_POST[$index];
else
	    $i--;

	}
	
	
	$con=mysqli_connect('localhost','root','','db_bms');
	
	for($k=1;$k<=$size;$k++){
	$query="Delete from  book where (bookid=$b_id[$k])  ";
	mysqli_query($con,$query);
	}

?>

<html>
<head>
</head>
<body>
<h2> BOOK MANAGEMENT SYSTEM</h2>
<p>
<?php
	echo $size."Records Deleted";
?>
</p>
<br/> Go back to homepage <a href='home.php'>CLICK HERE </a>

</body>
</html>
