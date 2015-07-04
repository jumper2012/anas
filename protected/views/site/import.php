<div class="page-header">
    <h1>Upload Data Keluar Masuk<small> &nbsp;&nbsp;&nbsp;<?php echo "Sesuai format excel inoutdata excel" ?></small></h1>
</div>

<div class="well">
    <center>
        <?php
        $form = $this->beginWidget('booster.widgets.TbActiveForm', array(
            'id' => 'inoutdat-form',
            'enableAjaxValidation' => false,
            'htmlOptions' => array('enctype' => 'multipart/form-data'),
        ));
// ...
//echo $form->labelEx($model, 'excelfile');
//echo $form->fileField($model, 'excelfile');
//echo $form->error($model, 'excelfile');
        echo $form->fileFieldGroup($model, 'excelfile', array(
            'wrapperHtmlOptions' => array(
                'class' => 'col-sm-5',
            ),
                )
        );
// ...

        $this->widget('booster.widgets.TbButton', array(
            'buttonType' => 'submit',
            'context' => 'primary',
            'label' => 'Submit',
        ));

        $this->endWidget();
        ?>
    </center>
</div>