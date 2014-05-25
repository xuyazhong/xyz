<?php
function isAdmin(){
	$auth =& Dataface_AuthenticationTool::getInstance();
	$user =& $auth->getLoggedInUser();
	return ($user and $user->val('role') == 'ADMIN');

}



class conf_ApplicationDelegate {
	function getPermissions(&$record){
		if ( isAdmin() ) return Dataface_PermissionsTool::ALL();
		return Dataface_PermissionsTool::READ_ONLY();
	}
	
	function getPreferences(){
		if (!isAdmin()){
			return array(
				'show_table_tabs'=>0,
				'show_record_tabs'=>0,
				'show_tables_menu'=>0
				);
		
		}
		return array();
	}
	
	function block__custom_stylesheets(){
		echo '<link rel="stylesheet" type="text/css" href="style.css"/>';
	}
}

?>