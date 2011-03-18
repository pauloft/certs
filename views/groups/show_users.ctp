<!--// FILE: show_users.ctp -->
<?php echo $this->Html->script('views/groups/show_users.js', array('inline'=>false)); ?>
<div class="groups form">
<?php $this->Form->create('Group') ?>
<fieldset>
<legend><?php __('Users by Group') ?></legend>
<?php echo $this->Form->input('Group.name', array('empty'=>'Select a group', 'options'=>$groups, 'id'=>'group-name')); ?>

<div id="users-in-group" style="display: none;">
<?php echo $this->Form->input('User.username', array('type'=>'select', 'id'=>'users-name')); ?>
</div>
</fieldset>
<?php echo $this->Form->end(__('List this group', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('List Groups', true), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List All Users', true), array('controller' => 'users', 'action' => 'index')); ?> </li>
	</ul>
</div>
