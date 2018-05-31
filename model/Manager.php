<?php

namespace Mathieu\gif;

class Manager
{
    protected $db;
    
    function __construct()
    {
        $this->db = $this->dbConnect();
    }
    
    protected function dbConnect()
    {
        try
		{
        	$db = new \PDO('mysql:host=localhost;dbname='.$_ENV['MYSQL_DB'].';charset=utf8', $_ENV['MYSQL_USER'], $_ENV['MYSQL_PWD']);
        	
            // $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            
        	return $db;
    	}

        catch (Exception $e)
		{
        	
        	die('Erreur : ' . $e->getMessage());
		
		}
    }
}