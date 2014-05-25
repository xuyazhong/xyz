<?php
function df_get_book_info(&$record){
	import('include/amazon_config.php');
	import('include/amazon_class.php');

	
	$oAmazon = new Amazon_WebService();
	
	$media = $record->val('media');
	if ( !is_array($media) ) $media = array('book');
	
	if ( in_array('book', $media) ){
		$sCurrentMode = 'books';
	} else if ( in_array('cd',$media) ){
		$sCurrentMode = 'music';
	} else if ( in_array('dvd',$media) ){
		$sCurrentMode = 'dvd';
	} else if ( in_array('vhs',$media) ){
		$sCurrentMode = 'vhs';
	} else {
		$sCurrentMode = 'book';
	}

	$sUrl  = 'http://xml.amazon.com/onca/xml3';
	$sUrl .= '?t='. ASSOCIATE_ID;
	$sUrl .= '&dev-t='. DEVELOPER_TOKEN;
	$sUrl .= '&mode=' . $sCurrentMode;
	$sUrl .= '&type=lite&page=1';
	$sUrl .= '&f=xml';
	$sUrl .= '&KeywordSearch='.urlencode($record->val('title'));
/*
	$sUrl = 'http://ecs.amazonaws.com/onca/xml?Service=AWSECommerceService&';
	$sUrl .= 'AssociateTag='.ASSOCIATE_ID;
	$sUrl .= '&AWSAccessKeyId='.DEVELOPER_TOKEN;
	$sUrl .= '&SearchIndex='.$sCurrentMode;
	$sUrl .= '&Style=xml';
	$sUrl .= '&Operation=ItemSearch';
	$sUrl .= '&Keywords='.urlencode($record->val('title'));
	
*/	

	if (!$oAmazon->setInputUrl($sUrl, 20)) {
		die ('cannot open input file. exiting..' . '<a href='. $sUrl .'>@</a>');
	}
	//$oAmazon->sTemplate = 'amazon_layout.php';
	if (!$oAmazon->parse()) {
		die ('XMLParse failed');
	}
	
	
	
	if ( count($oAmazon->aData) ) return $oAmazon->aData[0];
	return null;

}

function df_refresh_book_info(&$record, $save=true){


	if ( !$record->val('amazon_refresh_timestamp')){
		
		$info = df_get_book_info($record);
		if ( !$info ) return;
		$record->setValues(array(
			'cover_art_url_small'=>$info['imageurlsmall'],
			'cover_art_url_medium'=>$info['imageurlmedium'],
			'cover_art_url_large'=>$info['imageurllarge'],
			'amazon_description'=>$info['description'],
			'amazon_url'=>$info['url'],
			'amazon_refresh_timestamp'=>date('Y-m-d H:i:s')
			)
		);
		if ( !$record->val('author_or_editor') ){
			$record->setValue('author_or_editor', $info['author']);
		}
		
		
		if ( $save )
			$record->save();
	}
}
?>