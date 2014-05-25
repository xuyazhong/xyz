<?php
/* @var $this BooksMediaController */
/* @var $model BooksMedia */

$this->breadcrumbs=array(
	'Books Medias'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List BooksMedia', 'url'=>array('index')),
	array('label'=>'Manage BooksMedia', 'url'=>array('admin')),
);
?>

<h1>Create BooksMedia</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>