<div class="notifications form">
<?php echo $form->create('Notification');?>
	<fieldset>
 		<legend><?php __('Edit Notification');?></legend>
	<?php
		echo $form->input('id');
		echo $form->input('is_read');
		echo $form->input('message');
		echo $form->input('customer_id');
	?>
	</fieldset>
<?php echo $form->end('Submit');?>
</div>
<div class="actions">
	<ul>
		<li><?php echo $html->link(__('Delete', true), array('action' => 'delete', $form->value('Notification.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $form->value('Notification.id'))); ?></li>
		<li><?php echo $html->link(__('List Notifications', true), array('action' => 'index'));?></li>
		<li><?php echo $html->link(__('List Customers', true), array('controller' => 'customers', 'action' => 'index')); ?> </li>
		<li><?php echo $html->link(__('New Customer', true), array('controller' => 'customers', 'action' => 'add')); ?> </li>
	</ul>
</div>
