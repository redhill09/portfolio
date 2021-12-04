<?php 
	class rLink{
		function getHeadURL(){
// 			if($_SERVER['HTTP_HOST'] == 'www.acier.info' || $_SERVER['HTTP_HOST'] == 'acier.info'){
//     			$url = "http://".$_SERVER['HTTP_HOST']."/home/"; 
// 			}else{
//     			$url = "http://".$_SERVER['HTTP_HOST']."/"; 
// 			}
			$url = "https://".$_SERVER['HTTP_HOST']."/home/";
			return $url;
		}  
       
		public function path_urlGen($pathString, $file){
			$url = $this->getHeadURL().$pathString.'/'.$file;
		    return $url;
		}
		
		function path_urlAdmin($pathString){
			$url = $this->getHeadURL().'Admin/'.$pathString;
		    return $url;
		}
		
		function path_urlClient($pathString){
			$url = $this->getHeadURL().'Client/'.$pathString;
		    return $url;
		}
	
	    function getSourceCSS($pathString){
			$url = $this->getHeadURL().'r_custom_css/'.$pathString;
		    return $url;
		}
        
        function getcoreSourceCSS($pathString){
			$url = $this->getHeadURL().'r_core_css/'.$pathString;
		    return $url;
		}
		
		function getSourceJS($pathString){
			$url = $this->getHeadURL().'r_custom_js/'.$pathString;
		    return $url;
		}
        
        function getcoreSourceJS($pathString){
			$url = $this->getHeadURL().'r_core_js/'.$pathString;
		    return $url;
		}
				
	//ObjectSource 			
		function getSourceImages($str){
			$url = $this->getHeadURL().'images/'.$str;
		    return $url;
		}
		
		function getSourceImg($str){
			$url = $this->getHeadURL().'img/'.$str;
		    return $url;
		}
		
		
	//getSourceUserType
		function getTableSource($scrTable){
			$url = $this->getHeadURL().'r_table_display/'.$scrTable;
		    return $url;
		}
		
	//getSourceUserType
		function getFunctionSource($scrTable){
			$url = $this->getHeadURL().'r_functions/'.$scrTable;
		    return $url;
		}
		
	//getSourceUserType
		function getPHPClasses($scrTable){
			$url = $this->getHeadURL().'r_phpClass/'.$scrTable;
		    return $url;
		}		 
		
	//AjaxSource
       function ajaxSource($string){
			$url = $this->getHeadURL().'r_ajax/'.$string;
		    return $url;
	   }
	   
	   function ajaxSourceLink($string){
			$url = $this->getHeadURL().'Ajax/'.$string;
		    return $url;
	   }
        
       function switcher($variable, $string, $arrayData){
	       switch ($variable){
		       case $string; 
		           for($x=0; $x<count($arrayData); $x++){
			           include $arrayData[$x]; 
			       }
		       break;
		   } 
	   } 
		
		 
	}
?>