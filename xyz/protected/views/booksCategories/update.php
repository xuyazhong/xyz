<?php
/* @var $this BooksCategoriesController */
/* @var $model BooksCategories */

$this->breadcrumbs=array(
	'Books Categories'=>array('index'),
	$model->category_id=>array('view','id'=>$model->category_id),
	'Update',
);

$this->menu=array(
	array('label'=>'List BooksCategories', 'url'=>array('index')),
	array('label'=>'Create BooksCategories', 'url'=>array('create')),
	array('label'=>'View BooksCategories', 'url'=>array('view', 'id'=>$model->category_id)),
	array('label'=>'Manage BooksCategories', 'url'=>array('admin')),
);
?>

<h1>Update BooksCategories <?php echo $model->category_id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>