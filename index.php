<?php        
	session_start();
	ob_start(); 
	set_time_limit(0);
    //ini_set('memory_limit', '50000M');
		error_reporting(E_ALL & ~E_NOTICE);
		ini_set('memory_limit', -1); 
		//ini_set('memory_limit', '32M');  
	$usercode = $_SESSION['usercode'];
	$usertype = $_SESSION['usertype']; 
	$useraccess = $_SESSION['useraccess'];
	
	include_once("r_core_config/r_config_path.class.php");
	include_once("r_core_config/r_config_hashing.class.php");
	include_once("r_core_config/r_config_link.class.php");
	
   
	$dLink = new rLink();
	$homelink = $dLink -> getHeadURL();  
	
    switch($r_action[0]) 
    {  
		case '';
    		include_once('r_custom_page/header.php'); 
			include_once('r_custom_page/sidebar.php');
			include_once('r_custom_page/home.php');
			include_once('r_custom_page/footer.php');
    	break;
            
      
    }
    
?>
