<?php 
include "db.php";
			$pageid=5;
			 $sql1 = "SELECT * FROM menu where id='$pageid'";
 $result1 = $conn->query($sql1); 
 $row1 = $result1->fetch_assoc();
echo $row1["body"]; 
			
			
			
			?>