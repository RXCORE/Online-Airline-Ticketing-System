<div class="customers form">
<?php echo $form->create('Customer');?>
	<fieldset>
 		<legend><?php __('Add Customer');?></legend>
	<?php
		echo $form->input('first_name');
		echo $form->input('last_name');
		echo $form->input('phone_number');
		echo $form->input('email_address');
		echo $form->input('reservation_id');
	?>
	</fieldset>
<?php echo $form->end('Submit');?>
</div>
<div class="actions">
	<ul>
		<li><?php echo $html->link(__('List Customers', true), array('action' => 'index'));?></li>
		<li><?php echo $html->link(__('List Reservations', true), array('controller' => 'reservations', 'action' => 'index')); ?> </li>
		<li><?php echo $html->link(__('New Reservation', true), array('controller' => 'reservations', 'action' => 'add')); ?> </li>
		<li><?php echo $html->link(__('List Notifications', true), array('controller' => 'notifications', 'action' => 'index')); ?> </li>
		<li><?php echo $html->link(__('New Notification', true), array('controller' => 'notifications', 'action' => 'add')); ?> </li>
	</ul>
</div>
