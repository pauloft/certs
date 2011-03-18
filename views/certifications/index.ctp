<div class="certifications index">
	<h2><?php __('Certifications');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('name');?></th>
			<th><?php echo $this->Paginator->sort('expiration_days');?></th>
			<th><?php echo $this->Paginator->sort('certification_type_id');?></th>
			<th><?php echo $this->Paginator->sort('created');?></th>
			<th><?php echo $this->Paginator->sort('modified');?></th>
			<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
	$i = 0;
	foreach ($certifications as $certification):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	?>
	<tr<?php echo $class;?>>
		<td><?php echo $certification['Certification']['id']; ?>&nbsp;</td>
		<td><?php echo $certification['Certification']['name']; ?>&nbsp;</td>
		<td><?php echo $certification['Certification']['expiration_days']; ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($certification['CertificationType']['name'], array('controller' => 'certification_types', 'action' => 'view', $certification['CertificationType']['id'])); ?>
		</td>
		<td><?php echo $certification['Certification']['created']; ?>&nbsp;</td>
		<td><?php echo $certification['Certification']['modified']; ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View', true), array('action' => 'view', $certification['Certification']['id'])); ?>
			<?php echo $this->Html->link(__('Edit', true), array('action' => 'edit', $certification['Certification']['id'])); ?>
			<?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $certification['Certification']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $certification['Certification']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page %page% of %pages%, showing %current% records out of %count% total, starting on record %start%, ending on %end%', true)
	));
	?>	</p>

	<div class="paging">
		<?php echo $this->Paginator->prev('<< ' . __('previous', true), array(), null, array('class'=>'disabled'));?>
	 | 	<?php echo $this->Paginator->numbers();?>
 |
		<?php echo $this->Paginator->next(__('next', true) . ' >>', array(), null, array('class' => 'disabled'));?>
	</div>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Certification', true), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Certification Types', true), array('controller' => 'certification_types', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Certification Type', true), array('controller' => 'certification_types', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Certificates', true), array('controller' => 'certificates', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Certificate', true), array('controller' => 'certificates', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users', true), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User', true), array('controller' => 'users', 'action' => 'add')); ?> </li>
	</ul>
</div>