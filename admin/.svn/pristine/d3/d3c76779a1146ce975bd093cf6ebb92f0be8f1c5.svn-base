<?php
class tables_books_importer {

	function __import__excel_spreadsheet(&$data, $defaultValues=array()){
		//echo $data;exit;
		$records = array();
		import('include/excelxmlparser/ExcelXMLParser.php');
		$tempdir = DATAFACE_SITE_PATH.'/templates_c';
		$tmpnam = tempnam($tempdir, 'dataface-librarian-excell-import');
		$handle = fopen($tmpnam,'w');
		fwrite($handle,$data);
		fclose($handle);

		$ExcelXMLParser = new ExcelXMLParser(); 
		$app = Dataface_Application::getInstance();
		//$ExcelXMLParser->setEncoding($app->_conf['ie']);
		//print_r(file_get_contents($tmpnam));
		//exit;
    
    	$result = $ExcelXMLParser->OpenWorkbook($tmpnam,array());
    			//echo "here";exit;
    	//print_r($ExcelXMLParser);exit;

    	if ( ExcelXMLError::isError($result) ) return array();
    	$worksheets = array('General List'/*,'Children List','Youth List','Teen List'*/);
    	
    	$ws = $ExcelXMLParser->Workbook->getFirstWorksheet();
		while ($ws){
    		 
    		$name = $ws->getName();
    		if ( stripos($name,'teen') !== false ) $audience='Teen';
    		else if (stripos($name,'youth') !== false) $audience='Youth';
    		else if (stripos($name,'children') !== false) $audience = 'Children';
    		else $audience = 'General';
    		//$ws =& $ExcelXMLParser->Workbook->getWorksheetByName($worksheet);
    		$ws->Table->getFirstRow(); $ws->Table->getNextRow(); $ws->Table->getNextRow();
    			// Data doesn't start until the 4th row
    		while ( $row = $ws->Table->getNextRow() ){
    			
    			//Iterate through all the rows
    			$record = new Dataface_Record('books', array());
    			$record->setValues($defaultValues);
    			if ( !$row->getCell(0)->getValue() ) continue;
    			//echo "Date: ".$row->getCell(4)->getValue();
    			$record->setValues(
    				array(
    					'title'=>$row->getCell(0)->getValue(),
    					'author_or_editor'=>$row->getCell(1)->getValue().', '.$row->getCell(2)->getValue(),
    					'publisher'=>$row->getCell(3)->getValue(),
    					'copyright_year'=>$row->getCell(4)->getValue(),
    					
    					'media'=>explode(',',$row->getCell(7)->getValue()),
    					'reference_no'=>$row->getCell(8)->getValue(),
    					'notes'=>$row->getCell(9)->getValue(),
    					'audience'=>$audience
    					)
    				);
    				
    			$majorCategory  = trim($row->getCell(5)->getValue());
    			$subCategory = trim($row->getCell(6)->getValue());
    			$categories = array();
    			if ( $majorCategory ){
    				$catrec =df_get_record('books_categories', array('category_name'=>$majorCategory));
    				if (!$catrec ){
    					$catrec = new Dataface_Record('books_categories', array());
    					$catrec->setValue('category_name',$majorCategory);
    					$catrec->save();
    				}
    				$categories[] = $catrec->val('category_id');
    				
    			}
    			
    			if ( $subCategory ){
    				$catrec =df_get_record('books_categories', array('category_name'=>$subCategory));
    				if (!$catrec ){
    					$catrec = new Dataface_Record('books_categories', array());
    					$catrec->setValue('category_name',$subCategory);
    					$catrec->save();
    				}
    				$categories[] = $catrec->val('category_id');
    			
    			}
    			$record->setValue('categories',$categories);
    			
    			$media = explode(',',$row->getCell(7)->getValue());
    			$media_ids = array();
    			foreach ($media as $medium){
    				$medrec = df_get_record('books_media', array('medium_name'=>$medium));
    				if ( !$medrec ){
    					$medrec = new Dataface_Record('books_media', array());
    					$medrec->setValue('medium_name',$medium);
    					$medrec->save();
    				}
    				$media_ids[] = $medrec->val('medium_id');
    			}
    			$record->setValue('media', $media_ids);
    			$borrowerName = trim($row->getCell(10)->getValue());
    			$telephone = trim($row->getCell(11)->getValue());
    			$email = trim($row->getCell(12)->getValue());
    			$dueDate = trim($row->getCell(13)->getValue());
    			if ( $borrowerName ){
    			
    				if ( $email ){
    					$brec = df_get_record('users', array('email'=>$email));
    				} else if ( $telephone ){
    					$stripped_phone = preg_replace('/[^0-9]/','',$telephone);
    					$brec = df_get_record('users', array('phone'=>$stripped_phone));
    				} else {
    					$borrowerNames = explode(' ',$borrowerName);
    					$lastName = $borrowerNames[count($borrowerNames)-1];
    					$firstName = $borrowerNames[0];
    					$brec = df_get_record('users', array('first_name'=>$firstName,'last_name'=>$lastName));
    					
    				} // if $email
    				
    				if ( !$brec ){
    					$brec = new Dataface_Record('users', array());
    					$names = explode(' ',$borrowername);
    					$lastName = array_pop($names);
    					$firstName = implode(' ',$names);
    					$brec->setValues(
    						array('first_name'=>$firstName,
    								'last_name'=>$lastName,
    								'phone'=>$telephone,
    								'email'=>$email,
    								'password'=>str_replace('@','*',$email)
    							)
    						);
    					$brec->save();
    					
    				} // if !$brec
    				$record->setValue('borrower_id', $brec->val('userid'));
    				$record->setValue('due_date', $dueDate);
    			} // if $borrowerName
    			
    			$records[] =&$record;
    			unset($record);
    			
    			
    			
    		} // while $row = ...
    		
    		unset($ws);
    		$ws =& $ExcelXMLParser->Workbook->getNextWorksheet();
    	} // foreach $worksheets ...
    	
    	return $records;
    	
    	
		
		
	}
}
?>