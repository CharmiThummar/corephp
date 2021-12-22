<?php

$connection= new mysqli('localhost','root','','charmi');
if ($connection) {
	echo "connected";
	}
else
	{
  	echo "not connected";
	
}

?>