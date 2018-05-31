<?php

namespace Mathieu\gif;

require_once("Manager.php");

class MembresManager extends Manager
{
	public function add($membre)
	{
	    
		$req = $this->db->prepare('INSERT INTO membres( nom, prenom, pass, mail) VALUES(?, ?, ?, ?)');
		$req->execute(array($membre->getNom(), $membre->getPrenom(), $membre->getPass(), $membre->getMail() ));echo '1';
	}

}
?>
