<?php
//$this->breadcrumbs = array(
//    'In Out Datas' => array('index'),
//    'Manage',
//);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
$('.search-form').toggle();
return false;
});
$('.search-form form').submit(function(){
$.fn.yiiGridView.update('in-out-data-grid', {
data: $(this).serialize()
});
return false;
});
");
?>

<center><b><h1>Manage In Out Datas</h1></b></center>


<?php echo CHtml::link('Advanced Search', '#', array('class' => 'search-button btn')); ?>
<div class="search-form" style="display:none">
    <?php
    $this->renderPartial('_search', array(
        'model' => $model,
    ));
    ?>
</div><!-- search-form -->

<?php
$this->widget('booster.widgets.TbGridView', array(
    'id' => 'in-out-data-grid',
    'dataProvider' => $model->search(),
    'filter' => $model,
    'columns' => array(
        //'id_data',
        'department',
        'nama',
        'no',
        'date_time',
        'status',
          'location_id',
        /*
          'id_number',
          'verify_code',
          'no_kartu',
         */
        array(
            'class' => 'booster.widgets.TbButtonColumn',
        ),
    ),
));
?>
