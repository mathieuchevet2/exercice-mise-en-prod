<?php

namespace Mathieu\gif;



class GifManager extends Manager
{
	public function getGif($categorieId)
	{
	    echo $idDb;
		$db = $this->dbConnect($idDb, $mdpDb);
		$req = $db->prepare('SELECT id, categorie, urlGif FROM gif WHERE categorie = ?');
		$req->execute(array($categorieId));
		$gifDay = $req->fetch();
		echo $gifDay;

		return $gifDay;
	}
	
	
    public function getUrlContent($url)
    {
        $ch = curl_init();
        
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/4.0 (compatible; MSIE 6.0; Windows NT 5.1; .NET CLR 1.1.4322)');
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 5);
        curl_setopt($ch, CURLOPT_TIMEOUT, 5);
        $data = curl_exec($ch);
        $httpcode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
        
        curl_close($ch);
        
        return ($httpcode>=200 && $httpcode<300) ? $data : false;
    }

}