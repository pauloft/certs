<div class="certifications view">
<h2><?php  __('Certification');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $certification['Certification']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Name'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $certification['Certification']['name']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Expiration Days'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $certification['Certification']['expiration_days']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Certification Type'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $this->Html->link($certification['CertificationType']['name'], array('controller' => 'certification_types', 'action' => 'view', $certification['CertificationType']['id'])); ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Created'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $certification['Certification']['created']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Modified'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $certification['Certification']['modified']; ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Certification', true), array('action' => 'edit', $certification['Certification']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Delete Certification', true), array('action' => 'delete', $certification['Certification']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $certification['Certification']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Certifications', true), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Certification', true), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Certification Types', true), array('controller' => 'certification_types', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Certification Type', true), array('controller' => 'certification_types', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Certificates', true), array('controller' => 'certificates', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Certificate', true), array('controller' => 'certificates', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users', true), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User', true), array('controller' => 'users', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php __('Related Certificates');?></h3>
	<?php if (!empty($certification['Certificate'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php __('Id'); ?></th>
		<th><?php __('Name'); ?></th>
		<th><?php __('Type'); ?></th>
		<th><?php __('Size'); ?></th>
		<th><?php __('Certification Id'); ?></th>
		<th><?php __('User Id'); ?></th>
		<th><?php __('Created'); ?></th>
		<th><?php __('Modified'); ?></th>
		<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($certification['Certificate'] as $certificate):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<td><?php echo $certificate['id'];?></td>
			<td><?php echo $certificate['name'];?></td>
			<td><?php echo $certificate['type'];?></td>
			<td><?php echo $certificate['size'];?></td>
			<td><?php echo $certificate['certification_id'];?></td>
			<td><?php echo $certificate['user_id'];?></td>
			<td><?php echo $certificate['created'];?></td>
			<td><?php echo $certificate['modified'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View', true), array('controller' => 'certificates', 'action' => 'view', $certificate['id'])); ?>
				<?php echo $this->Html->link(__('Edit', true), array('controller' => 'certificates', 'action' => 'edit', $certificate['id'])); ?>
				<?php echo $this->Html->link(__('Delete', true), array('controller' => 'certificates', 'action' => 'delete', $certificate['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $certificate['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Certificate', true), array('controller' => 'certificates', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php __('Related Users');?></h3>
	<?php if (!empty($certification['User'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php __('Id'); ?></th>
		<th><?php __('Fname'); ?></th>
		<th><?php __('Lname'); ?></th>
		<th><?php __('Email'); ?></th>
		<th><?php __('Username'); ?></th>
		<th><?php __('Password'); ?></th>
		<th><?php __('Start Date'); ?></th>
		<th><?php __('Department Id'); ?></th>
		<th><?php __('Photo'); ?></th>
		<th><?php __('Group Id'); ?></th>
		<th><?php __('Created'); ?></th>
		<th><?php __('Modified'); ?></th>
		<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($certification['User'] as $user):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<td><?php echo $user['id'];?></td>
			<td><?php echo $user['fname'];?></td>
			<td><?php echo $user['lname'];?></td>
			<td><?php echo $user['email'];?></td>
			<td><?php echo $user['username'];?></td>
			<td><?php echo $user['password'];?></td>
			<td><?php echo $user['start_date'];?></td>
			<td><?php echo $user['department_id'];?></td>
			<td><?php echo $user['photo'];?></td>
			<td><?php echo $user['group_id'];?></td>
			<td><?php echo $user['created'];?></td>
			<td><?php echo $user['modified'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View', true), array('controller' => 'users', 'action' => 'view', $user['id'])); ?>
				<?php echo $this->Html->link(__('Edit', true), array('controller' => 'users', 'action' => 'edit', $user['id'])); ?>
				<?php echo $this->Html->link(__('Delete', true), array('controller' => 'users', 'action' => 'delete', $user['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $user['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New User', true), array('controller' => 'users', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
