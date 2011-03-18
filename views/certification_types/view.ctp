<div class="certificationTypes view">
<h2><?php  __('Certification Type');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $certificationType['CertificationType']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Name'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $certificationType['CertificationType']['name']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Created'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $certificationType['CertificationType']['created']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Modified'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $certificationType['CertificationType']['modified']; ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Certification Type', true), array('action' => 'edit', $certificationType['CertificationType']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Delete Certification Type', true), array('action' => 'delete', $certificationType['CertificationType']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $certificationType['CertificationType']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Certification Types', true), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Certification Type', true), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Certifications', true), array('controller' => 'certifications', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Certification', true), array('controller' => 'certifications', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php __('Related Certifications');?></h3>
	<?php if (!empty($certificationType['Certification'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php __('Id'); ?></th>
		<th><?php __('Name'); ?></th>
		<th><?php __('Expiration Days'); ?></th>
		<th><?php __('Certification Type Id'); ?></th>
		<th><?php __('Created'); ?></th>
		<th><?php __('Modified'); ?></th>
		<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($certificationType['Certification'] as $certification):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<td><?php echo $certification['id'];?></td>
			<td><?php echo $certification['name'];?></td>
			<td><?php echo $certification['expiration_days'];?></td>
			<td><?php echo $certification['certification_type_id'];?></td>
			<td><?php echo $certification['created'];?></td>
			<td><?php echo $certification['modified'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View', true), array('controller' => 'certifications', 'action' => 'view', $certification['id'])); ?>
				<?php echo $this->Html->link(__('Edit', true), array('controller' => 'certifications', 'action' => 'edit', $certification['id'])); ?>
				<?php echo $this->Html->link(__('Delete', true), array('controller' => 'certifications', 'action' => 'delete', $certification['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $certification['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Certification', true), array('controller' => 'certifications', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
