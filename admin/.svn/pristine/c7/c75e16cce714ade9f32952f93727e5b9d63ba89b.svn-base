<?php
class actions_browse_by_cat {
	function handle(&$params){
		
		
		$sql = "select * from books_categories order by category_name";
		$res = mysql_query($sql, df_db());
		$categories = array();
		while ( $row = mysql_fetch_assoc($res) ){
			//print_r($row);
			$sql2 = "select count(*) as num from books where categories rlike '[[:<:]]".$row['category_id']."[[:>:]]'";
			//echo $sql2;
			$res2 = mysql_query($sql2, df_db());
			list($num) = mysql_fetch_row($res2);
			if ( $num ){
				$categories[] = array('name'=>$row['category_name'], 'id'=>$row['category_id'], 'num'=>$num);
				
			}
			@mysql_free_result($res2);
		
		}
		@mysql_free_result($res);
		
		$num_cats = count($categories);
		$per_column = ceil($num_cats/4);
		
		df_display(array('categories'=>$categories, 'per_column'=>$per_column), 'browse_by_cat.html');
		
	}

}
?>