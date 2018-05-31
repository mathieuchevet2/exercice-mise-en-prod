<?php

require_once '../bootstrap.php';



$VerifForm = new VerifForm();

if ($_SERVER["REQUEST_METHOD"] == "POST") 
{
    $retour = $VerifForm->testFormLettre($_POST['nom']);
    if(!empty($retour))
    {
        $erreur = $retour;
    }
    

    $retour2 = $VerifForm->testFormLettre($_POST['prenom']);
    if(!empty($retour2))
    {
        $erreur2 = $retour2;
    }
    
    $retour3 = $VerifForm->testFormMail($_POST['mail']);
    if(!empty($retour3))
    {
        $erreur3 = $retour3;
    }
    
    $retour4 = $VerifForm->testFormPass($_POST['pass']);
    if(!empty($retour4))
    {
        $erreur4 = $retour4;
    }
    if(empty($retour) && empty($retour2) && empty($retour3) && empty($retour4))
    {
        $nom = $_POST['nom'];
        $prenom = $_POST['prenom'];
        $pass = $_POST['pass'];
        $mail = $_POST['mail'];

        $membre = new \Mathieu\gif\Membre($nom, $prenom, $pass, $mail);
        $membreManager = new \Mathieu\gif\MembresManager();
        $membreManager->add($membre);
        echo "Votre compte est bien enregistré";
        
        session_start ();
        
        $_SESSION['nom'] = $nom;
		$_SESSION['prenom'] = $prenom;
        $_SESSION['mail'] = $mail;
		$_SESSION['pass'] = $pass;
		
        header("Status: 301 Moved Permanently", false, 301);
        header('Location: http://miseenprod.mathieuchevet.fr.fo');
        
        exit();
    }
    
}

?>
<!DOCTYPE html>
<html>
<head>
	<title>Formulaire d'inscription</title>
</head>
<body>
	<form action="#" method="post">
		<p>
		    
			Entrez un nom :<input type="texte" name="nom" >
			<?php if (!empty($erreur)): ?>
			<p> 
			<span style="color:red"><?php echo $erreur;?></span>
			</p>
			<?php endif; ?><br/>
			
			Entrez un prenom :<input type="texte" name="prenom" >
			<?php if (!empty($erreur2)): ?>
			<p> 
			<span style="color:red"><?php echo $erreur2;?></span>
			</p>
			<?php endif; ?><br/>
			
			Entrez une addresse mail :<input type="texte" name="mail" >
			<?php if (!empty($erreur3)): ?>
			<p> 
			<span style="color:red"><?php echo $erreur3;?></span>
			</p>
			<?php endif; ?><br/>
			
			Entrez un mot de passe :<input type="password" name="pass" >
			<?php if (!empty($erreur4)): ?>
			<p> 
			<span style="color:red"><?php echo $erreur4;?></span>
			</p>
			<?php endif; ?><br/>
			<input type="submit" name="envoyer">
		</p>
	</form>

</body>
</html>

