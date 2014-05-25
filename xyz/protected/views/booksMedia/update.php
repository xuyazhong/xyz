<?php
/* @var $this BooksMediaController */
/* @var $model BooksMedia */

$this->breadcrumbs=array(
	'Books Medias'=>array('index'),
	$model->medium_id=>array('view','id'=>$model->medium_id),
	'Update',
);

$this->menu=array(
	array('label'=>'List BooksMedia', 'url'=>array('index')),
	array('label'=>'Create BooksMedia', 'url'=>array('create')),
	array('label'=>'View BooksMedia', 'url'=>array('view', 'id'=>$model->medium_id)),
	array('label'=>'Manage BooksMedia', 'url'=>array('admin')),
);
?>

<h1>Update BooksMedia <?php echo $model->medium_id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>