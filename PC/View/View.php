<?php
$myfile = fopen("../../Data/Disks/Zelda.txt", "r") or die("Unable to open file!");

echo "<table>";
while(!feof($myfile)) {
  echo "<tr><td width='600' bgcolor='#213A3F'>";
  echo fgets($myfile) . "<br>";
  echo "</td></tr>";
  
}
echo "</table>";
fclose($myfile);
?>