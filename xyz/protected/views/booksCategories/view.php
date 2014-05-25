<?php
/* @var $this BooksCategoriesController */
/* @var $model BooksCategories */

$this->breadcrumbs=array(
	'Books Categories'=>array('index'),
	$model->category_id,
);

$this->menu=array(
	array('label'=>'List BooksCategories', 'url'=>array('index')),
	array('label'=>'Create BooksCategories', 'url'=>array('create')),
	array('label'=>'Update BooksCategories', 'url'=>array('update', 'id'=>$model->category_id)),
	array('label'=>'Delete BooksCategories', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->category_id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage BooksCategories', 'url'=>array('admin')),
);
?>

<h1>View BooksCategories #<?php echo $model->category_id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'category_id',
		'category_name',
	),
)); ?>
