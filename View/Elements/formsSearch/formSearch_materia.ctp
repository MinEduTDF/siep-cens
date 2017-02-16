<?php echo $this->Form->create('Materia',array('type'=>'get','url'=>'index', 'novalidate' => true));?>
<div class="form-group">
	<?php
		echo $this->Form->input('alia', array('label' => false, 'class' => 'form-control', 'Placeholder' => 'Ingrese un alia...'));
    ?><br>
</div>
<div class="text-center">
    <span class="link"><?php echo $this->Form->button('<span class="glyphicon glyphicon-search"></span> BUSCAR', array('class' => 'submit', 'class' => 'btn btn-primary')); ?>
    </span>
    <?php echo $this->Form->end(); ?>
</div>
