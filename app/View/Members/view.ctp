<div class="members view">
<h2><?php echo __('Member'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($member['Member']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Names'); ?></dt>
		<dd>
			<?php echo h($member['Member']['names']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Lastnames'); ?></dt>
		<dd>
			<?php echo h($member['Member']['lastnames']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Email'); ?></dt>
		<dd>
			<?php echo h($member['Member']['email']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Password'); ?></dt>
		<dd>
			<?php echo h($member['Member']['password']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Headline'); ?></dt>
		<dd>
			<?php echo h($member['Member']['headline']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Image'); ?></dt>
		<dd>
			<?php echo h($member['Member']['image']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Bio'); ?></dt>
		<dd>
			<?php echo h($member['Member']['bio']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Facebookid'); ?></dt>
		<dd>
			<?php echo h($member['Member']['facebookid']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Twitterid'); ?></dt>
		<dd>
			<?php echo h($member['Member']['twitterid']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Linkedinid'); ?></dt>
		<dd>
			<?php echo h($member['Member']['linkedinid']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Countvotes'); ?></dt>
		<dd>
			<?php echo h($member['Member']['countvotes']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Sumvotes'); ?></dt>
		<dd>
			<?php echo h($member['Member']['sumvotes']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Expert'); ?></dt>
		<dd>
			<?php echo h($member['Member']['expert']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Administrator'); ?></dt>
		<dd>
			<?php echo $this->Html->link($member['Administrator']['id'], array('controller' => 'administrators', 'action' => 'view', $member['Administrator']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Registerdate'); ?></dt>
		<dd>
			<?php echo h($member['Member']['registerdate']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Lastdate'); ?></dt>
		<dd>
			<?php echo h($member['Member']['lastdate']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Expertdate'); ?></dt>
		<dd>
			<?php echo h($member['Member']['expertdate']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Mobilephone'); ?></dt>
		<dd>
			<?php echo h($member['Member']['mobilephone']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Homephone'); ?></dt>
		<dd>
			<?php echo h($member['Member']['homephone']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Officephone'); ?></dt>
		<dd>
			<?php echo h($member['Member']['officephone']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Dni'); ?></dt>
		<dd>
			<?php echo h($member['Member']['dni']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Commercialdni'); ?></dt>
		<dd>
			<?php echo h($member['Member']['commercialdni']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Company'); ?></dt>
		<dd>
			<?php echo $this->Html->link($member['Company']['name'], array('controller' => 'companies', 'action' => 'view', $member['Company']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Title'); ?></dt>
		<dd>
			<?php echo $this->Html->link($member['Title']['name'], array('controller' => 'titles', 'action' => 'view', $member['Title']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Termsandconditions'); ?></dt>
		<dd>
			<?php echo h($member['Member']['termsandconditions']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Datetermsandconditions'); ?></dt>
		<dd>
			<?php echo h($member['Member']['datetermsandconditions']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Category'); ?></dt>
		<dd>
			<?php echo $this->Html->link($member['Category']['id'], array('controller' => 'categories', 'action' => 'view', $member['Category']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('City'); ?></dt>
		<dd>
			<?php echo $this->Html->link($member['City']['name'], array('controller' => 'cities', 'action' => 'view', $member['City']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Verificationstatus'); ?></dt>
		<dd>
			<?php echo h($member['Member']['verificationstatus']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Expertstatus'); ?></dt>
		<dd>
			<?php echo h($member['Member']['expertstatus']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Expertrating'); ?></dt>
		<dd>
			<?php echo $this->Html->link($member['Expertrating']['name'], array('controller' => 'expertratings', 'action' => 'view', $member['Expertrating']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Expertrate'); ?></dt>
		<dd>
			<?php echo h($member['Member']['expertrate']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Public'); ?></dt>
		<dd>
			<?php echo h($member['Member']['public']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Gain'); ?></dt>
		<dd>
			<?php echo h($member['Member']['gain']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Member'), array('action' => 'edit', $member['Member']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Member'), array('action' => 'delete', $member['Member']['id']), null, __('Are you sure you want to delete # %s?', $member['Member']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Members'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Member'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Administrators'), array('controller' => 'administrators', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Administrator'), array('controller' => 'administrators', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Companies'), array('controller' => 'companies', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Company'), array('controller' => 'companies', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Titles'), array('controller' => 'titles', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Title'), array('controller' => 'titles', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Categories'), array('controller' => 'categories', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Category'), array('controller' => 'categories', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Cities'), array('controller' => 'cities', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New City'), array('controller' => 'cities', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Expertratings'), array('controller' => 'expertratings', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Expertrating'), array('controller' => 'expertratings', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Meetings'), array('controller' => 'meetings', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Meeting'), array('controller' => 'meetings', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Languages'), array('controller' => 'languages', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Language'), array('controller' => 'languages', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Skills'), array('controller' => 'skills', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Skill'), array('controller' => 'skills', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Meetings'); ?></h3>
	<?php if (!empty($member['Meeting'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Expert Id'); ?></th>
		<th><?php echo __('Member Id'); ?></th>
		<th><?php echo __('Datemeeting'); ?></th>
		<th><?php echo __('Phone'); ?></th>
		<th><?php echo __('Duration'); ?></th>
		<th><?php echo __('Datecallcomplete'); ?></th>
		<th><?php echo __('Pathtoconversation'); ?></th>
		<th><?php echo __('Type'); ?></th>
		<th><?php echo __('Timemeeting'); ?></th>
		<th><?php echo __('Starttime'); ?></th>
		<th><?php echo __('Endtime'); ?></th>
		<th><?php echo __('Conferencecallpin'); ?></th>
		<th><?php echo __('Numberofparties'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($member['Meeting'] as $meeting): ?>
		<tr>
			<td><?php echo $meeting['id']; ?></td>
			<td><?php echo $meeting['expert_id']; ?></td>
			<td><?php echo $meeting['member_id']; ?></td>
			<td><?php echo $meeting['datemeeting']; ?></td>
			<td><?php echo $meeting['phone']; ?></td>
			<td><?php echo $meeting['duration']; ?></td>
			<td><?php echo $meeting['datecallcomplete']; ?></td>
			<td><?php echo $meeting['pathtoconversation']; ?></td>
			<td><?php echo $meeting['type']; ?></td>
			<td><?php echo $meeting['timemeeting']; ?></td>
			<td><?php echo $meeting['starttime']; ?></td>
			<td><?php echo $meeting['endtime']; ?></td>
			<td><?php echo $meeting['conferencecallpin']; ?></td>
			<td><?php echo $meeting['numberofparties']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'meetings', 'action' => 'view', $meeting['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'meetings', 'action' => 'edit', $meeting['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'meetings', 'action' => 'delete', $meeting['id']), null, __('Are you sure you want to delete # %s?', $meeting['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Meeting'), array('controller' => 'meetings', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Languages'); ?></h3>
	<?php if (!empty($member['Language'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Description'); ?></th>
		<th><?php echo __('Code'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($member['Language'] as $language): ?>
		<tr>
			<td><?php echo $language['id']; ?></td>
			<td><?php echo $language['description']; ?></td>
			<td><?php echo $language['code']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'languages', 'action' => 'view', $language['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'languages', 'action' => 'edit', $language['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'languages', 'action' => 'delete', $language['id']), null, __('Are you sure you want to delete # %s?', $language['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Language'), array('controller' => 'languages', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Skills'); ?></h3>
	<?php if (!empty($member['Skill'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Description'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($member['Skill'] as $skill): ?>
		<tr>
			<td><?php echo $skill['id']; ?></td>
			<td><?php echo $skill['description']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'skills', 'action' => 'view', $skill['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'skills', 'action' => 'edit', $skill['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'skills', 'action' => 'delete', $skill['id']), null, __('Are you sure you want to delete # %s?', $skill['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Skill'), array('controller' => 'skills', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
