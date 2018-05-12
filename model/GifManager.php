<?php

namespace Mathieu\gif;

require_once("model/Manager.php");

class GifManager extends Manager
{
	public function getGif($categorieId)
	{
		$db = $this->dbConnect();
		$req = $db->prepare('SELECT id, categorie, urlGif FROM gif WHERE categorie = ?');
		$req->execute(array($categorieId));
		$gifDay = $req->fetch();

		return $gifDay;
	}

}