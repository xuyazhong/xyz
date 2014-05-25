<?php
class actions_add_book_remotely {

	function handle(&$params){
		header('Content-type: text/javascript');
		$out = file_get_contents('js/librariandb-adder/librariandb-adder.js');
		
		$categories = Dataface_Table::loadTable('books')->getValuelist('book_categories');
		$cnames = array();
		foreach ($categories as $c){
			$cnames[] = $c;
		}
		
		$audiences = Dataface_Table::loadTable('books')->getValuelist('audience_values');
		$anames = array();
		foreach ($audiences as $a){
			$anames[] = $a;
		}
		
		$out = str_replace('/**INSERT HEADER**/', 'SUBMIT_URL="'.df_absolute_url(DATAFACE_SITE_HREF).'";TAGS='.json_encode($cnames).';AUDIENCES='.json_encode($anames).';', $out);
		echo $out;
	}
}