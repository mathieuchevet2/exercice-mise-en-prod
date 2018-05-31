<?php

namespace Mathieu\gif;


class Membre
{
    protected $_nom; 
	protected $_prenom;
	protected $_pass;
	protected $_mail;
	protected $_dateInscription;
	
 	public function __construct($nom, $prenom, $pass, $mail)
 	{
 	    echo 'objet cree';
 	    $this->setNom($nom);
		$this->setPrenom($prenom);
		$this->setPass($pass);
		$this->setMail($mail);
 	}
	

 	public function setNom($nom)
 	{
 		$this->_nom = $nom;
    }

	public function setPrenom($prenom)
	{
		$this->_prenom = $prenom;
	}

	public function setPass($pass)
	{
		$this->_pass = $pass;
	}

	public function setMail($mail)
	{
		$this->_mail = $mail;
	}
	
	public function getNom()
	{
		return $this->_nom;
	}
	public function getPrenom()
	{
		return $this->_prenom;
	}
	
	public function getPass()
	{
		return $this->_pass;
	}
	
	public function getMail()
	{
		return $this->_mail;
	}
	

}

