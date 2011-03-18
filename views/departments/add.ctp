<?php
	// load jQuery core
	echo $this->Html->script('jquery-1.4.4.min', false);
	// and file(s) specific to this page
	echo $this->Html->script('views/departments/departments_add', false);
?>
<div class="departments form">
<?php echo $this->Form->create('Department');?>
	<fieldset>
 		<legend><?php __('Add Department'); ?></legend>
	<?php
		echo $this->Form->input('name', array('id'=>'name'));
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Departments', true), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Users', true), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User', true), array('controller' => 'users', 'action' => 'add')); ?> </li>
	</ul>
</div>
