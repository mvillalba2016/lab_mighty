<?php
$this->breadcrumbs=array(
	'Planes'=>array('admin'),
	'Administrador',
);

$this->menu=array(
	array('label'=>'Listar','url'=>array('admin'),'linkOptions'=>array('class'=>'btn btn-primary')),
	array('label'=>'Crear','url'=>array('create'),'linkOptions'=>array('class'=>'btn btn-primary')),
);
?>

<h1>Administrador Planes</h1>


<?php $this->widget('bootstrap.widgets.TbGridView',array(
	'id'=>'tipo-plan-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		
		'nombre_plan',
		array(
			'class'=>'bootstrap.widgets.TbButtonColumn',
		),
	),
)); ?>
