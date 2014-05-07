<div class="members index">
	<h2><?php echo __('Members'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('names'); ?></th>
			<th><?php echo $this->Paginator->sort('lastnames'); ?></th>
			<th><?php echo $this->Paginator->sort('email'); ?></th>
			<th><?php echo $this->Paginator->sort('password'); ?></th>
			<th><?php echo $this->Paginator->sort('headline'); ?></th>
			<th><?php echo $this->Paginator->sort('image'); ?></th>
			<th><?php echo $this->Paginator->sort('bio'); ?></th>
			<th><?php echo $this->Paginator->sort('facebookid'); ?></th>
			<th><?php echo $this->Paginator->sort('twitterid'); ?></th>
			<th><?php echo $this->Paginator->sort('linkedinid'); ?></th>
			<th><?php echo $this->Paginator->sort('countvotes'); ?></th>
			<th><?php echo $this->Paginator->sort('sumvotes'); ?></th>
			<th><?php echo $this->Paginator->sort('expert'); ?></th>
			<th><?php echo $this->Paginator->sort('administrator_id'); ?></th>
			<th><?php echo $this->Paginator->sort('registerdate'); ?></th>
			<th><?php echo $this->Paginator->sort('lastdate'); ?></th>
			<th><?php echo $this->Paginator->sort('expertdate'); ?></th>
			<th><?php echo $this->Paginator->sort('mobilephone'); ?></th>
			<th><?php echo $this->Paginator->sort('homephone'); ?></th>
			<th><?php echo $this->Paginator->sort('officephone'); ?></th>
			<th><?php echo $this->Paginator->sort('dni'); ?></th>
			<th><?php echo $this->Paginator->sort('commercialdni'); ?></th>
			<th><?php echo $this->Paginator->sort('company_id'); ?></th>
			<th><?php echo $this->Paginator->sort('title_id'); ?></th>
			<th><?php echo $this->Paginator->sort('termsandconditions'); ?></th>
			<th><?php echo $this->Paginator->sort('datetermsandconditions'); ?></th>
			<th><?php echo $this->Paginator->sort('category_id'); ?></th>
			<th><?php echo $this->Paginator->sort('city_id'); ?></th>
			<th><?php echo $this->Paginator->sort('verificationstatus'); ?></th>
			<th><?php echo $this->Paginator->sort('expertstatus'); ?></th>
			<th><?php echo $this->Paginator->sort('expertrating_id'); ?></th>
			<th><?php echo $this->Paginator->sort('expertrate'); ?></th>
			<th><?php echo $this->Paginator->sort('public'); ?></th>
			<th><?php echo $this->Paginator->sort('gain'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($members as $member): ?>
	<tr>
		<td><?php echo h($member['Member']['id']); ?>&nbsp;</td>
		<td><?php echo h($member['Member']['names']); ?>&nbsp;</td>
		<td><?php echo h($member['Member']['lastnames']); ?>&nbsp;</td>
		<td><?php echo h($member['Member']['email']); ?>&nbsp;</td>
		<td><?php echo h($member['Member']['password']); ?>&nbsp;</td>
		<td><?php echo h($member['Member']['headline']); ?>&nbsp;</td>
		<td><?php echo h($member['Member']['image']); ?>&nbsp;</td>
		<td><?php echo h($member['Member']['bio']); ?>&nbsp;</td>
		<td><?php echo h($member['Member']['facebookid']); ?>&nbsp;</td>
		<td><?php echo h($member['Member']['twitterid']); ?>&nbsp;</td>
		<td><?php echo h($member['Member']['linkedinid']); ?>&nbsp;</td>
		<td><?php echo h($member['Member']['countvotes']); ?>&nbsp;</td>
		<td><?php echo h($member['Member']['sumvotes']); ?>&nbsp;</td>
		<td><?php echo h($member['Member']['expert']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($member['Administrator']['id'], array('controller' => 'administrators', 'action' => 'view', $member['Administrator']['id'])); ?>
		</td>
		<td><?php echo h($member['Member']['registerdate']); ?>&nbsp;</td>
		<td><?php echo h($member['Member']['lastdate']); ?>&nbsp;</td>
		<td><?php echo h($member['Member']['expertdate']); ?>&nbsp;</td>
		<td><?php echo h($member['Member']['mobilephone']); ?>&nbsp;</td>
		<td><?php echo h($member['Member']['homephone']); ?>&nbsp;</td>
		<td><?php echo h($member['Member']['officephone']); ?>&nbsp;</td>
		<td><?php echo h($member['Member']['dni']); ?>&nbsp;</td>
		<td><?php echo h($member['Member']['commercialdni']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($member['Company']['name'], array('controller' => 'companies', 'action' => 'view', $member['Company']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($member['Title']['name'], array('controller' => 'titles', 'action' => 'view', $member['Title']['id'])); ?>
		</td>
		<td><?php echo h($member['Member']['termsandconditions']); ?>&nbsp;</td>
		<td><?php echo h($member['Member']['datetermsandconditions']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($member['Category']['id'], array('controller' => 'categories', 'action' => 'view', $member['Category']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($member['City']['name'], array('controller' => 'cities', 'action' => 'view', $member['City']['id'])); ?>
		</td>
		<td><?php echo h($member['Member']['verificationstatus']); ?>&nbsp;</td>
		<td><?php echo h($member['Member']['expertstatus']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($member['Expertrating']['name'], array('controller' => 'expertratings', 'action' => 'view', $member['Expertrating']['id'])); ?>
		</td>
		<td><?php echo h($member['Member']['expertrate']); ?>&nbsp;</td>
		<td><?php echo h($member['Member']['public']); ?>&nbsp;</td>
		<td><?php echo h($member['Member']['gain']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $member['Member']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $member['Member']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $member['Member']['id']), null, __('Are you sure you want to delete # %s?', $member['Member']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?>	</p>
	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Member'), array('action' => 'add')); ?></li>
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
