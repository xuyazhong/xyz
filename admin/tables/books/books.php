<?php
class tables_books {
	
	/*function block__before_view_tab_content(){
	
		$app =& Dataface_Application::getInstance();
		$record =& $app->getRecord();
		if ( isset($record) ){
			import('include/amazon_dataface.class.php');
			df_refresh_book_info($record);
		}
	}
	*/
	
	function thumbnail_url__htmlValue(&$record){
		return '<img src="'.$record->display('thumbnail_url').'"/>';
	}
	
	
	function beforeInsert(&$record){
		$record->setValues(array(
			'created_by'=>Dataface_AuthenticationTool::getInstance()->getLoggedInUser()->val('username')
		));
	}
	
	function beforeSave(&$record){
		$record->setValues(array(
			'modified_by'=>Dataface_AuthenticationTool::getInstance()->getLoggedInUser()->val('username')
		));
	}
	
	function cover_art_url_large__htmlValue(&$record){
		return '<img src="'.$record->val('cover_art_url_large').'">';
	}
	
	function cover_art_url_medium__htmlValue(&$record){
		return '<img src="'.$record->val('cover_art_url_medium').'" onmouseover="this.src=\''.$record->val('cover_art_url_large').'\'" onmouseout="this.src=\''.$record->val('cover_art_url_medium').'\'">';
	}
	
	function __import__excel_spreadsheet(&$data, $defaultValues=array()){
		import('tables/books/importer.php');
		$importer = new tables_books_importer();
		return $importer->__import__excel_spreadsheet($data, $defaultValues);
	}
	
	function __import__titles_list(&$data, $defaultValues=array()){
		import('include/amazon_dataface.class.php');
		$titles = explode("\n", $data);
		$records = array();
		foreach ($titles as $title){
		
			$record = new Dataface_Record('books', array());
			$record->setValue('title', $title);
			df_refresh_book_info($record, false);
			$records[] = $record;
			unset($record);
		}
		return $records;
	}
	
	
	function block__before_application_menu(){
	
		$sql = "select audience, count(*) as num from books group by audience";
		$res = mysql_query($sql, df_db());
		if ( !$res ) trigger_error(mysql_error(df_db()), E_USER_ERROR);
		
		$audiences = array();
		while ( $row = mysql_fetch_assoc($res) ){
			$audiences[$row['audience']] = $row['num'];
		}
		
		$statuses = array();
		$res = mysql_query("select status,count(*) as num from books group by status", df_db());
		if ( !$res ) throw new Exception(mysql_error(df_db()));
		while ($row = mysql_fetch_assoc($res) ){
			$statuses[$row['status']] = $row['num'];
		}
		
		df_display(array('audiences'=>$audiences,'statuses'=>$statuses), 'audience_menu.html');
	}
	
	function borrower_id__permissions(&$record){
		if ( isAdmin() ) return Dataface_PermissionsTool::ALL();
		return Dataface_PermissionsTool::NO_ACCESS();
	}
	
	function author_or_editor__htmlValue(&$record){
		if ( $record->val('author_or_editor') ){
			return '<a href="'.DATAFACE_SITE_HREF.'?-action=list&-table=books&author_or_editor=='.$record->val('author_or_editor').'" title="See other books by this author">'.$record->display('author_or_editor').'</a>';
		}
		return '';
	}
	
	function categories__htmlValue(&$record){
		$cats = $record->val('categories');
		$vals = $record->_table->getValuelist('book_categories');
		$out = array();
		foreach ( $cats as $c){
			$out[] = '<a href="'.DATAFACE_SITE_HREF.'?-action=list&-table=books&categories='.$c.'" title="分类浏览图书">'.htmlspecialchars($vals[$c]).'</a>';
		}
		return implode(', ', $out);
	}
	
	function info_url__htmlValue(&$record){
		if ( $record->val("info_url") ){
			return '<a href="'.htmlspecialchars($record->val('info_url')).'" title="Visit external information page about this book in new window" target="_blank">'.htmlspecialchars($record->val('info_url')).'</a>';
		}
		return '';
	}
	
	function reference_url__htmlValue(&$record){
		if ( $record->val("reference_url") ){
			return '<a href="'.htmlspecialchars($record->val('reference_url')).'" title="Visit external purchase page about this book in new window" target="_blank">'.htmlspecialchars($record->val('reference_url')).'</a>';
		}
		
		return '';
	}
	
	function block__before_result_list(){
		$query =& Dataface_Application::getInstance()->getQuery();
		if ( @$query['categories'] ){
			$cat = df_get_record('books_categories', array('category_id'=>$query['categories']));
			if ( $cat ){
				echo '<h1>Books in '.$cat->htmlValue('category_name').' Category</h1>';
			}
		} else if ( @$query['audience'] ){
			echo '<h1>Books for '.$query['audience'].'</h1>';
			
		} else if (@$query['status'] ){
			echo '<h1>Books with status: "'.$query['status'].'"</h1>';
		}
	}
	
	
	function title__renderCell(&$record){
		return '<div style="white-space:nowrap; width: 300px; overflow: hidden">'.$record->display('title').'</div>';
	}
	
	function author_or_editor__renderCell(&$record){
		return '<div style="white-space:nowrap; width: 100px; overflow: hidden">'.$record->display('author_or_editor').'</div>';
	}
	
	function publisher__renderCell(&$record){
		return '<div style="white-space:nowrap; width: 100px; overflow: hidden;margin:0;padding:0">'.$record->display('publisher').'</div>';
	}
	
	function date_created__renderCell(&$record){
		return '<div style="white-space:nowrap; width: 150px; overflow: hidden">'.$record->display('date_created').'</div>';
	}
	
	
}
?>