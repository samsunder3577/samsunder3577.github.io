<!DOCTYPE html>
<html lang="en" class="no-js">
<title>ADD Disk</title>
	<head>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css">
		<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.3.1/css/bulma.min.css">
		<link rel="stylesheet" href="Assets/CSS/main.css">
		<link rel="stylesheet" href="Assets/CSS/main1.css">

	</head>

	<body>
	<!-- notification for small viewports and landscape oriented smartphones -->
<div class="device-notification">
  <a class="device-notification--logo" href="#0">
    <img src="Assets/img/Logo.png" alt="Kev Cracks">
    <p>Kev Cracks</p>
  </a>
  <p class="device-notification--message">Kev Cracks has so much to offer that we must request you orient your device to portrait or find a larger screen. You won't be disappointed.</p>
</div>
		<div>
			<nav class="nav  void-background">

				<div class="nav-left">

				</div>
				<div class="has-text-centered">					
					<h3>ADD DISK</h3>
				</div>
				<div class="nav-right nav-menu">

				</div>

			</nav>
		</div>




		<div>
			<!--button class="button" style="vertical-align:middle"><span>Hover </span></button-->
			<form method="post" id="DiskForms">


				<div id="content1">

					&nbsp Enter Name:<br>
					<input type="text" Name="Name" value="Name" onfocus="inputFocus(this)" onblur="inputBlur(this)">
					<br>
					&nbsp Enter Code Name:<br>
					<input type="text" Name="Code_Name" value="Code Name" onfocus="inputFocus(this)" onblur="inputBlur(this)">
					<br>
					&nbsp Enter Manufacturer:<br>
					<input type="text" name="Manufacturer" value="Manufacturer" onfocus="inputFocus(this)" onblur="inputBlur(this)">
					<br>
					&nbsp Enter Disk Speed:<br>
					<input type="text" Name="Disk_Speed" value=5200 onkeypress='return restrictAlphabets(event)' onfocus="inputFocus(this)" onblur="inputBlur(this)">
					<br>
					&nbsp Enter DOM:<br>
					<input type="text" Name="DOM" value=0 onfocus="inputFocus(this)" onblur="inputBlur(this)">
					<br>
					&nbsp Enter Capacity:<br>
					<input type="text" Name="Capacity" value=0 onkeypress='return restrictAlphabets(event)' onfocus="inputFocus(this)" onblur="inputBlur(this)">
					<br>
				</div>


				<div id="content2">
					&nbsp Enter Used Space:<br>
					<input type="text" Name="Used_Space" value=0 onkeypress='return restrictAlphabets(event)' onfocus="inputFocus(this)" onblur="inputBlur(this)">
					<br>
					&nbsp Enter Free Space:<br>
					<input type="text" Name="Free_Space" value=0 onkeypress='return restrictAlphabets(event)' onfocus="inputFocus(this)" onblur="inputBlur(this)">
					<br>
					&nbsp Enter Hard Disk Type:<br>
					<select Name="Disk_Type" form="DiskForms">
						<option value="HDD">HDD</option>
						<option value="SSD">SSD</option>
					</select>
					<br>
					&nbsp Enter Hard Disk Form:<br>
					<select Name="Disk_Form" form="DiskForms">
						<option value="Internal">Internal</option>
						<option value="External">External</option>
						<option value="Internal/External">Internal/External</option>
					</select>
					<br>

					&nbsp Upload Icon:<br>
					<input type="file" Name="Icon" accept="image/*">
					<br>
					&nbsp Enter Serial Number:<br>
					<input type="text" Name="SNO" value="Serial Number" onfocus="inputFocus(this)" onblur="inputBlur(this)">
					<br>
					<br><br>
				</div>


				<div class="centrer">
					<input type="submit" value="Submit" id="Addbtn" name="Addbtn">
				</div>
			</form> 

		</div>


<?php
function testfun()
{
	$Name=$_POST['Name'];
	$Code_Name=$_POST['Code_Name'];
	$Manufacturer=$_POST['Manufacturer'];
	$Disk_Speed=$_POST['Disk_Speed'];
	$DOM=$_POST['DOM'];
	$Capacity=$_POST['Capacity'];
	$Used_Space=$_POST['Used_Space'];
	$Free_Space=$_POST['Free_Space'];
	$Disk_Type=$_POST['Disk_Type'];
	$Disk_Form=$_POST['Disk_Form'];
	$SNO=$_POST['SNO'];
	
	$dir = "../../Data/Disks";
	$file_to_write = "$Name.txt";
	if( is_dir($dir) === false )
	{
		mkdir($dir);
	}
	$myfile = fopen($dir . '/' . $file_to_write,"w") or die("Unable to open file!");
	$txt = "$Name\n";
	fwrite($myfile, $txt);
	$txt = "$Code_Name\n";
	fwrite($myfile, $txt);
	$txt = "$Manufacturer\n";
	fwrite($myfile, $txt);
	$txt = "$Disk_Speed\n";
	fwrite($myfile, $txt);
	$txt = "$DOM\n";
	fwrite($myfile, $txt);
	$txt = "$Capacity\n";
	fwrite($myfile, $txt);
	$txt = "$Used_Space\n";
	fwrite($myfile, $txt);
	$txt = "$Free_Space\n";
	fwrite($myfile, $txt);
	$txt = "$Disk_Type\n";
	fwrite($myfile, $txt);
	$txt = "$Disk_Form\n";
	fwrite($myfile, $txt);
	$txt = "$SNO";
	fwrite($myfile, $txt);
	fclose($myfile);
}
if(array_key_exists('Addbtn',$_POST)){
	testfun();
}
?>



		<script src="Assets/JS/Numeric.js"></script>
		<script src="Assets/JS/modernizr.custom.js"></script>
	</body>

</html>
