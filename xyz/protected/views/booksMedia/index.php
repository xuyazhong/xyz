<?php
/* @var $this BooksMediaController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Books Medias',
);

$this->menu=array(
	array('label'=>'Create BooksMedia', 'url'=>array('create')),
	array('label'=>'Manage BooksMedia', 'url'=>array('admin')),
);
?>

<h1>Books Medias</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
