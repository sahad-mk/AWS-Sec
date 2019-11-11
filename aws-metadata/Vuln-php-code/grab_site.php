<?php

$site_name = $_GET['site'];

$site_content=file_get_contents($site_name);
print $site_content;
echo "<p>";
echo "<font color=green size=4 >"."You Have Entered:"."</font>";
echo "<font color=red size=6 face=verdana>".$site_name."</font>";
echo"</p";

?>
