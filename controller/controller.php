<?php

require_once('model/Manager.php');
require_once('model/GifManager.php');



	$date;
	$categorieId;
	$categorieMessage;


	$date = date("w");
	
		switch ($date) {
		
		case 0:
			$categorieId = 0;
			$dayNow = "Dimanche";
			break;

		case 1:
			$categorieId = 0;
			$dayNow = "Lundi";
			break;

		case 2:
			$categorieId = 0;
			$dayNow = "Mardi";	
			break;

		case 3:
			$categorieId = 0;
			$dayNow = "Mercredi";
			break;

		case 4:
			$categorieId = 1;
			$dayNow = "Jeudi";
			break;

		case 5:
			$categorieId = 2;
			$dayNow = "Vendredi";
			break;

		case 6:
			$categorieId = 0;
			$dayNow = "Samedi";
			break;
			
		default:
			break;
		}

	if ($categorieId == 0) 
	{
		$categorieMessage = "Oui Oui Oui Oui";
	}

	elseif ($categorieId == 1) 
	{
		$categorieMessage = "Bof";
	}

	elseif ($categorieId == 2)
	{
		$categorieMessage = "Non Non Non Non";
	}


	$GifManager = new \Mathieu\gif\GifManager();

	$gif = $GifManager->getGif($categorieId);
	

	require('view/template.php');


