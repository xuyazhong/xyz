<?php
/* @var $this BooksCategoriesController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Books Categories',
);

$this->menu=array(
	array('label'=>'Create BooksCategories', 'url'=>array('create')),
	array('label'=>'Manage BooksCategories', 'url'=>array('admin')),
);
?>

<h1>Books Categories</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
