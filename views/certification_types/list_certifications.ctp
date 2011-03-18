<?php // FILE: certification_types/list_certifications.ctp ?>
<?php $this->Html->script('views/certification_types/list_certifications.js', array('inline'=>false)); ?>
<div class="certificationTypes form">
<?php echo $this->Form->create('CertificationType'); ?>
<fieldset>
<legend><?php __('List by Certification Type'); ?></legend>
<?php
	echo $this->Form->input('CertificationType.name', array('label'=>'Certification Type','empty' => 'Choose Certificate Type', 'options'=>$cert_types, 'id' => 'certification-type'));
?>
<div id="certifications" style="display: none;">
	<?php echo $this->Form->input('Certification.name', array('label'=>'Certifications','type'=>'select', 'id'=>'certification-name')); ?>
</div>
</fieldset>
<?php echo $this->Form->end(__('Submit', true)); ?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('List ALL Certification Types', true), array('action' => 'index'));?></li>
	</ul>
</div>
