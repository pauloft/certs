<div class="certificates index">
	<h2><?php __('Certificates');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('filename');?></th>
			<th><?php echo $this->Paginator->sort('type');?></th>
			<th><?php echo $this->Paginator->sort('size');?></th>
			<th><?php echo $this->Paginator->sort('certification_date');?></th>
			<th><?php echo $this->Paginator->sort('certification_id');?></th>
			<th><?php echo $this->Paginator->sort('user_id');?></th>
			<th><?php echo $this->Paginator->sort('created');?></th>
			<th><?php echo $this->Paginator->sort('modified');?></th>
			<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
	$i = 0;
	foreach ($certificates as $certificate):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	?>
	<tr<?php echo $class;?>>
		<td><?php echo $certificate['Certificate']['id']; ?>&nbsp;</td>
		<td><?php echo $certificate['Certificate']['filename']; ?>&nbsp;</td>
		<td><?php echo $certificate['Certificate']['type']; ?>&nbsp;</td>
		<td><?php echo $certificate['Certificate']['size']; ?>&nbsp;</td>
		<td><?php echo $certificate['Certificate']['certification_date']; ?>&nbsp;</td>
		<td><?php echo $certificate['Certificate']['certification_id']; ?>&nbsp;</td>
		<td><?php echo $certificate['Certificate']['user_id']; ?>&nbsp;</td>
		<td><?php echo $certificate['Certificate']['created']; ?>&nbsp;</td>
		<td><?php echo $certificate['Certificate']['modified']; ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View', true), array('action' => 'view', $certificate['Certificate']['id'])); ?>
			<?php echo $this->Html->link(__('Edit', true), array('action' => 'edit', $certificate['Certificate']['id'])); ?>
			<?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $certificate['Certificate']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $certificate['Certificate']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Certificate', true), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Certifications', true), array('controller'=>'certifications','action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Certification Types', true), array('controller'=>'certification_types','action' => 'index')); ?></li>
	</ul>
</div>
