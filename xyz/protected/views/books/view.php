<?php
/* @var $this BooksController */
/* @var $model Books */

$this->breadcrumbs=array(
	'Books'=>array('index'),
	$model->title,
);

$this->menu=array(
	array('label'=>'List Books', 'url'=>array('index')),
	array('label'=>'Create Books', 'url'=>array('create')),
	array('label'=>'Update Books', 'url'=>array('update', 'id'=>$model->book_id)),
	array('label'=>'Delete Books', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->book_id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Books', 'url'=>array('admin')),
);
?>

<h1>View Books #<?php echo $model->book_id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'book_id',
		'title',
		'author_or_editor',
		'isbn',
		'publisher',
		'copyright_year',
		'categories',
		'audience',
		'media',
		'thumbnail_url',
		'info_url',
		'reference_url',
		'reference_no',
		'notes',
		'status',
		'borrower_id',
		'due_date',
		'date_created',
		'date_modified',
		'created_by',
		'modified_by',
	),
)); ?>
