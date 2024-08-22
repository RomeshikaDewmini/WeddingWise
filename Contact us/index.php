<?php
 
$con = new mysqli ('localhost', 'root', '', 'wwise');

if (!$con) {
      
	die (mysqli_error($con));
}

?> 