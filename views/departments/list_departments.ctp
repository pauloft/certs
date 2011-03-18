<?php // FILE: departments/list_departments.ctp ?>
<?php echo $this->Html->script('views/departments/list_departments.js', array('inline'=>false)); ?>
<div class="departments form">
<?php echo $this->Form->create('Department'); ?>
<fieldset>
	<legend><?php __('Show Users by Department'); ?></legend>
	<?php echo $this->Form->input('Department.name', array('label'=>'Department', 'empty'=>'Select department', 'type'=>'select', 'options'=>$listofdepartments, 'id'=>'department-name')); ?>
	
	<div id="users_list" style="display:none;">
		<?php echo $this->Form->input('User.name', array('label'=>'Department Users', 'type'=>'select', 'id'=>'users-name')); ?>
	</div>
</fieldset>
<?php echo $this->Form->end(__('Show', true)); ?>
</div>
<div class="actions">

</div>
