<?php

if($_POST)
	{
  $suma= 0;
	foreach ($_POST as $numerito)
   		{
      if (is_numeric($numerito)){
   		$suma += $numerito;
    }
   		}
    echo $suma;
	}
 ?>
