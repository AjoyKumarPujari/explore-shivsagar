<?php
	
	include 'connect.php';
	if(isset($_POST["submit"]))
		{
			$id=$_POST["id"];
			$name=$_POST["name"];
			$phone=$_POST["pno"];
			$date=$_POST["date"];
			$details=$_POST["detail"];
			$str= "insert into reviews values('$id','$name','$phone','$date','$details')";
			$result=mysql_query($str, $link);
			if($result)
			{
				header("location: index.php?ok=1");
				
			}
			else
			{
				echo mysql_error();
			}
	    }
?>				