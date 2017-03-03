<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<!--<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />-->
<link href="style.css" rel="stylesheet" type="text/css" />
<title>Charity template</title>
</head>

<body>
<div id="container">
	<div id="header">
		<div id="logo_w1">Charitable</div>
		<div id="logo_w2">Organization</div>
		<div id="header_text">
			<p>Make a donation today and help 2000 children</p>
			<a href="http://www.freewebsitetemplates.com">Make a donation now !</a>
		</div>
		<ul>
			<?php 
			include "db.php";
 $sql = "SELECT * FROM menu" ;
 $result = $conn->query($sql); 
 while($row = $result->fetch_assoc()) 
{ echo "<a href='pages.php?id=". $row["id"]."' class='menu' >". $row["name"]."</a> "; }
 ?>
			
		</ul>
	</div>
	
	
	
	<div id="content">
		<div id="left">
			<?php 
			$pageid=1;
			 $sql1 = "SELECT * FROM menu where id='$pageid'";
 $result1 = $conn->query($sql1); 
 $row1 = $result1->fetch_assoc();
echo $row1["body"]; 
			
			
			
			?>
			
			
			<h1>Photos</h1>
			<div id="photos">
			<a href="http://www.freewebsitetemplates.com"><img src="images/photo1.jpg" alt="photo" /></a>
			<a href="http://www.freewebsitetemplates.com"><img src="images/photo2.jpg" alt="photo" /></a>
			<a href="http://www.freewebsitetemplates.com"><img src="images/photo3.jpg" alt="photo" /></a>
			<a href="http://www.freewebsitetemplates.com"><img src="images/photo4.jpg" alt="photo" /></a>
			</div>
		</div>
		<div id="right">
	<?php		
	include "news.php";
	?>
		</div>
		<div id="footerline"></div>
	</div>
	
	<div id="footer">
	
	
	Copyright © 2007 Charity Organization.  All rights reserved.</div>
</div>
</body>
</html>