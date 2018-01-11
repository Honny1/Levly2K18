<?php
	include_once("Session.class.php");
	$session = new Session();
	$autor = "Hony";
	
	if(!isset($_SESSION['pass'])) {
		$session->setLevel("start");
	}
	
	if(isset($_GET['pass']) && !empty($_GET['pass']))
	{           
		if(file_exists("./levels/".$_GET['pass'].".php")) 
		{
			$session->setLevel($_GET['pass']);
			include("levels/" . $session->getLevel() . ".php");
		}
		else {                   
			include("levels/" . $session->getLevel() . ".php");
		}
	}
	else {
		include("levels/" . $session->getLevel() . ".php");
	}
?>