<div class="certificates form">
<?php echo $this->Form->create('Certificate');?>
	<fieldset>
 		<legend><?php __('Add Certificate'); ?></legend>
	<?php
		echo $this->Form->input('filename');
		echo $this->Form->input('type');
		echo $this->Form->input('size');
		echo $this->Form->input('certification_date');
		echo $this->Form->input('user_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Certificates', true), array('action' => 'index'));?></li>
	</ul>
</div>
