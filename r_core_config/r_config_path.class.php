<?php
date_default_timezone_set('America/Los_Angeles');

class rPath{
public function parse_path() {
  $path = array();
  if (isset($_SERVER['REQUEST_URI'])) {
    $request_path = explode('?', $_SERVER['REQUEST_URI']);
	 if (  ! isset($request_path[1])) {
		  $request_path[1] = null;
		}
    $path['base'] = rtrim(dirname($_SERVER['SCRIPT_NAME']), '\/');
    $path['call_utf8'] = substr(urldecode($request_path[0]), strlen($path['base']) + 1);
    $path['call'] = utf8_decode($path['call_utf8']);
    if ($path['call'] == basename($_SERVER['PHP_SELF'])) {
      $path['call'] = '';
    }
    $path['call_parts'] = explode('/', $path['call']);

    $path['query_utf8'] = urldecode($request_path[1]);
   $path['query'] = utf8_decode(urldecode($request_path[1]));
    $vars = explode('&', $path['query']);
    foreach ($vars as $var) {
      $t = explode('=', $var);
	  if ( ! isset($t[1])) {
		   $t[1] = null;
		}

		
      $path['query_vars'][$t[0]] = $t[1];
    }
  }
return $path;
}
}
?>

<?php 
	
	$dPath = new rPath();       
	$path_info  = $dPath -> parse_path();   
	//echo '<pre>'.print_r($path_info, true).'</pre>';
	$action_count= count($path_info['call_parts']); 
	for($x=0; $x<$action_count; $x++){
		$r_action[] = $path_info['call_parts'][$x]; 
	}
	//echo '<pre>'.print_r($r_action, true).'</pre>';
?>