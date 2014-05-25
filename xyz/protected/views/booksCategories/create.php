<?php
/* @var $this BooksCategoriesController */
/* @var $model BooksCategories */

$this->breadcrumbs=array(
	'Books Categories'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List BooksCategories', 'url'=>array('index')),
	array('label'=>'Manage BooksCategories', 'url'=>array('admin')),
);
?>

<h1>Create BooksCategories</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>