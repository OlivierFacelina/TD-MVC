<?php 

function db_connect() 
{
	// Tentative de connexion à la base de données MySQL 
	try
	{
		require('config.php');
        // chaine de connexion avec API PDO
		$var = new PDO("mysql:host=" . $server .";dbname=" . $dbName, $user, $pass);
		//On définit le mode d'erreur de PDO sur Exception
		$var->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	}		
	// En cas de problème dans la tentative connexion on termine le script php et on affichera le message d'erreur
	catch(PDOException $e)
	{
		die('Erreur : ' . $e->getMessage());
	}
    return $var;
}

function deconnexion(){
	$var = NULL;
	return $var;
}

$db = db_connect();