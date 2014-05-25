<?php
class actions_submit_book_remotely {

	function handle(&$params){
		header('Content-type: text/javascript');
		
		
		$categories = explode(',', $_GET['categories']);
		$cids = array();
		foreach ($categories as $cat){
			if (!$cat ) continue;
			$cr = df_get_record('books_categories', array('category_name'=>'='.$cat));
			if ( !$cr ){
				$cr = new Dataface_Record('books_categories', array());
				$cr->setValue('category_name', $cat);
				$cr->save();
			}
			$cids[] = $cr->val('category_id');
		}
		
		$year = '';
		if ( preg_match('/\d{4}/', $_GET['year'], $matches) ){
			$year = $matches[0];
		}
		
		
		$book = new Dataface_Record('books', array());
		$book->setValues(
			array(
				'title'=>$_GET['title'],
				'author_or_editor'=>$_GET['author'],
				'isbn'=>$_GET['isbn'],
				'publisher'=>$_GET['publisher'],
				'copyright_year'=>$year,
				'categories'=>$cids,
				'audience'=>$_GET['audience'],
				'media'=>'Book',
				'thumbnail_url'=>$_GET['thumbnail'],
				'info_url'=>$_GET['info'],
				'reference_url'=>$_GET['ref'],
				'notes'=>$_GET['comments'],
				'status'=>'new request'
			)
		);
		$res = $book->save();
		$errors = array();
		$out = array();
		if ( PEAR::isError($res) ){
			$errors[] = $res->getMessage();
			$out['errors'] = $errors;
		} else {
			$details = array(
				'url'=>df_absolute_url($book->getURL('-action=browse')),
				'message'=>'Book successfully saved'
			);
			$out['details'] = $details;
		}
		
		echo 'var __libraryResponse = '.json_encode($out).';';
		exit;
	}
}