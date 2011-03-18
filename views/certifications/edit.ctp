<div class="certifications form">
<?php echo $this->Form->create('Certification');?>
	<fieldset>
 		<legend><?php __('Edit Certification'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('name');
		echo $this->Form->input('expiration_days');
		echo $this->Form->input('certification_type_id');
		echo $this->Form->input('User');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $this->Form->value('Certification.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $this->Form->value('Certification.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Certifications', true), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Certification Types', true), array('controller' => 'certification_types', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Certification Type', true), array('controller' => 'certification_types', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Certificates', true), array('controller' => 'certificates', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Certificate', true), array('controller' => 'certificates', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users', true), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User', true), array('controller' => 'users', 'action' => 'add')); ?> </li>
	</ul>
</div>