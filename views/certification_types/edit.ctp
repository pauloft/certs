<div class="certificationTypes form">
<?php echo $this->Form->create('CertificationType');?>
	<fieldset>
 		<legend><?php __('Edit Certification Type'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('name');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $this->Form->value('CertificationType.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $this->Form->value('CertificationType.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Certification Types', true), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Certifications', true), array('controller' => 'certifications', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Certification', true), array('controller' => 'certifications', 'action' => 'add')); ?> </li>
	</ul>
</div>