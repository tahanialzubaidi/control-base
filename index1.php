<?php
$servername = "localhost";
$username ="root";
$pass = "";
$db_mame = "robot_arm";
$conn = new mysqli($servername,$username,$pass,$db_mame);
if ($conn->connect_error){
	die("Connection failed:" . $conn->connect_error);
}
if(isset($_POST['selected'])){
 $value = substr($_POST['selected'],0,1);
		$ins_sql ="INSERT INTO arm_basic(directione)
		VALUES('$value')";
				if(	mysqli_query($conn,$ins_sql))
		{
			echo "New Details Enter inserted successfule!";
		}
	else
		{ 
	echo "ERROR:" . $sql . "" . mysqli_error($conn);
	} 
			mysqli_close($conn);
			}
	?>