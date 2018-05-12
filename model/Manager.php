<?php

namespace Mathieu\gif;

class Manager
{
    protected function dbConnect()
    {
    	try
		{


        	$db = new \PDO('mysql:host=localhost;dbname=mathieu1_gif;charset=utf8', 'root', 'root');
        	return $db;
    	}

        catch (Exception $e)
		{
        	
        	die('Erreur : ' . $e->getMessage());
		
		}
    }
}