<div class="certificationTypes index">
	<h2><?php __('Certification Types');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('name');?></th>
			<th><?php echo $this->Paginator->sort('created');?></th>
			<th><?php echo $this->Paginator->sort('modified');?></th>
			<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
	$i = 0;
	foreach ($certificationTypes as $certificationType):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	?>
	<tr<?php echo $class;?>>
		<td><?php echo $certificationType['CertificationType']['id']; ?>&nbsp;</td>
		<td><?php echo $certificationType['CertificationType']['name']; ?>&nbsp;</td>
		<td><?php echo $certificationType['CertificationType']['created']; ?>&nbsp;</td>
		<td><?php echo $certificationType['CertificationType']['modified']; ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View', true), array('action' => 'view', $certificationType['CertificationType']['id'])); ?>
			<?php echo $this->Html->link(__('Edit', true), array('action' => 'edit', $certificationType['CertificationType']['id'])); ?>
			<?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $certificationType['CertificationType']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $certificationType['CertificationType']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Certification Type', true), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Certifications', true), array('controller' => 'certifications', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Certification', true), array('controller' => 'certifications', 'action' => 'add')); ?> </li>
	</ul>
</div>