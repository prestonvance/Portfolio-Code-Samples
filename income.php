<?php
if(isset($_GET["income"])){
	$Income=$_GET["income"];
	$HourlyBT=$Income/2080;
	$Tax=$Income*.22;
	$Total=$Income-$Tax;
	$Hourly=$Total/2080;
	$Biweekly=$Hourly*80;
	$Monthly=$Biweekly*2;
	echo "Total Before Tax:$Income<br>
	Hourly Before Tax: $HourlyBT <br>
	Total:$Total<br>
	Hourly Rate:$Hourly<br> 
	Per Check: $Biweekly<br>
	Per Month: $Monthly";	
}