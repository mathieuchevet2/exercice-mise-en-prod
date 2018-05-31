<?php
require_once 'bootstrap.php';








	$date;
	$categorieId;
	$categorieMessage;
	$message;


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

	if ($categorieId == 0 ) 
	{
	    if ($dayNow == Samedi || $dayNow == Dimanche) 
	    {
	    	$categorieMessage = "Oui Oui Oui Oui <br> On ne bosse pas aujourd'hui !!!";
	    	$message = "enjoy";
	    	
	    }
	    else
	    {
		    $categorieMessage = "Oui Oui Oui Oui";
		    $message = "enjoy";
	    }    
	}

	elseif ($categorieId == 1) 
	{
		$categorieMessage = "Bof";
		$message = "blah";
	}

	elseif ($categorieId == 2)
	{
		$categorieMessage = "Non Non Non Non";
		$message = "bad day";
	}
	
	
// $GifManager = new \Mathieu\gif\GifManager();
// $url_embed = $GifManager->getGif($categorieId);

	$GifManager = new \Mathieu\gif\GifManager();
	
    $url = "http://api.giphy.com/v1/gifs/search?api_key=ifFpHmF1uFzmY7Bfw6wCci4JFCcUoUXZ&q=$message&limit=25";
    
	$urlContent = $GifManager->getUrlContent($url);
	

	$random = rand(1,25);

    $parse_gif = json_decode($urlContent,true);
    $url_embed = $parse_gif["data"][$random]["embed_url"];
    
    if (isset($_SESSION['mail']) && isset($_SESSION['pass'])) 
{
    echo "<h2 class=\"txtcenter\"> Bienvenue " . $_SESSION['prenom'] . "</h2>";
}
    

	require('view/template.php');

?>
