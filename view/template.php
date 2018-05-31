<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width"/>
	<title>Est-ce qu'on met en prod aujourd'hui?</title>
	<link rel="stylesheet" href="knacss.css">
	<link rel="stylesheet" href="template.css">
</head>
<body>
    
	<a href="view/formulaireInscription.php">Connection/Inscription</a>
	<h1 class="txtcenter">Est-ce qu'on met en prod aujourd'hui?</h1>
	<p class="txtcenter tag--danger tag--big dayNow">On est <?= $dayNow ?> !</p>
	<p class="txtcenter message"><?= $categorieMessage ?></p>
	<div class="gifContainer txtcenter"><iframe src="<?= $url_embed ?>" width="400" height="400" style="border:0" frameBorder="0" class="giphy-embed" allowFullScreen></iframe>
	
	</div>
	<div class="ref txtcenter">
	    <a href="https://github.com/mathieuchevet2/exercice-mise-en-prod">Github</a>
	</div>
	
	<div class="ref txtcenter">
	    <a href="https://giphy.com/embed/3rgXBvnbXtxwaWmhr2">T-Rex geoffrey</a>
	</div>
	
	
	

    
</body>
</html>