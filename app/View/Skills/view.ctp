<div class="skills view">
<h2><?php echo __('Skill'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($skill['Skill']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Description'); ?></dt>
		<dd>
			<?php echo h($skill['Skill']['description']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Skill'), array('action' => 'edit', $skill['Skill']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Skill'), array('action' => 'delete', $skill['Skill']['id']), null, __('Are you sure you want to delete # %s?', $skill['Skill']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Skills'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Skill'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Members'), array('controller' => 'members', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Member'), array('controller' => 'members', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Members'); ?></h3>
	<?php if (!empty($skill['Member'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Names'); ?></th>
		<th><?php echo __('Lastnames'); ?></th>
		<th><?php echo __('Email'); ?></th>
		<th><?php echo __('Password'); ?></th>
		<th><?php echo __('Headline'); ?></th>
		<th><?php echo __('Image'); ?></th>
		<th><?php echo __('Bio'); ?></th>
		<th><?php echo __('Facebookid'); ?></th>
		<th><?php echo __('Twitterid'); ?></th>
		<th><?php echo __('Linkedinid'); ?></th>
		<th><?php echo __('Countvotes'); ?></th>
		<th><?php echo __('Sumvotes'); ?></th>
		<th><?php echo __('Expert'); ?></th>
		<th><?php echo __('Administrator Id'); ?></th>
		<th><?php echo __('Registerdate'); ?></th>
		<th><?php echo __('Lastdate'); ?></th>
		<th><?php echo __('Expertdate'); ?></th>
		<th><?php echo __('Mobilephone'); ?></th>
		<th><?php echo __('Homephone'); ?></th>
		<th><?php echo __('Officephone'); ?></th>
		<th><?php echo __('Dni'); ?></th>
		<th><?php echo __('Commercialdni'); ?></th>
		<th><?php echo __('Company Id'); ?></th>
		<th><?php echo __('Title Id'); ?></th>
		<th><?php echo __('Termsandconditions'); ?></th>
		<th><?php echo __('Datetermsandconditions'); ?></th>
		<th><?php echo __('Category Id'); ?></th>
		<th><?php echo __('City Id'); ?></th>
		<th><?php echo __('Verificationstatus'); ?></th>
		<th><?php echo __('Expertstatus'); ?></th>
		<th><?php echo __('Expertrating Id'); ?></th>
		<th><?php echo __('Expertrate'); ?></th>
		<th><?php echo __('Public'); ?></th>
		<th><?php echo __('Gain'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($skill['Member'] as $member): ?>
		<tr>
			<td><?php echo $member['id']; ?></td>
			<td><?php echo $member['names']; ?></td>
			<td><?php echo $member['lastnames']; ?></td>
			<td><?php echo $member['email']; ?></td>
			<td><?php echo $member['password']; ?></td>
			<td><?php echo $member['headline']; ?></td>
			<td><?php echo $member['image']; ?></td>
			<td><?php echo $member['bio']; ?></td>
			<td><?php echo $member['facebookid']; ?></td>
			<td><?php echo $member['twitterid']; ?></td>
			<td><?php echo $member['linkedinid']; ?></td>
			<td><?php echo $member['countvotes']; ?></td>
			<td><?php echo $member['sumvotes']; ?></td>
			<td><?php echo $member['expert']; ?></td>
			<td><?php echo $member['administrator_id']; ?></td>
			<td><?php echo $member['registerdate']; ?></td>
			<td><?php echo $member['lastdate']; ?></td>
			<td><?php echo $member['expertdate']; ?></td>
			<td><?php echo $member['mobilephone']; ?></td>
			<td><?php echo $member['homephone']; ?></td>
			<td><?php echo $member['officephone']; ?></td>
			<td><?php echo $member['dni']; ?></td>
			<td><?php echo $member['commercialdni']; ?></td>
			<td><?php echo $member['company_id']; ?></td>
			<td><?php echo $member['title_id']; ?></td>
			<td><?php echo $member['termsandconditions']; ?></td>
			<td><?php echo $member['datetermsandconditions']; ?></td>
			<td><?php echo $member['category_id']; ?></td>
			<td><?php echo $member['city_id']; ?></td>
			<td><?php echo $member['verificationstatus']; ?></td>
			<td><?php echo $member['expertstatus']; ?></td>
			<td><?php echo $member['expertrating_id']; ?></td>
			<td><?php echo $member['expertrate']; ?></td>
			<td><?php echo $member['public']; ?></td>
			<td><?php echo $member['gain']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'members', 'action' => 'view', $member['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'members', 'action' => 'edit', $member['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'members', 'action' => 'delete', $member['id']), null, __('Are you sure you want to delete # %s?', $member['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Member'), array('controller' => 'members', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
