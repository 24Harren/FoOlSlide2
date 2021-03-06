<div class="incontent login">
	<?php
	$password = array(
		'name' => 'password',
		'id' => 'password',
		'size' => 30,
        'required' => 'required',
        'class' => 'form-control'
	);
	$email = array(
		'name' => 'email',
		'id' => 'email',
		'value' => set_value('email'),
		'maxlength' => 80,
		'size' => 30,
        'required' => 'required',
        'class' => 'form-control'
	);
	?>
	<?php echo form_open($this->uri->uri_string()); ?>
	<div class="formgroup">
		<div><?php echo form_label('Password', $password['id']); ?></div>
		<div><?php echo form_password($password); ?></div>
		<div style="color: red;"><?php echo form_error($password['name']); ?><?php echo isset($errors[$password['name']]) ? $errors[$password['name']] : ''; ?></div>
	</div>
	<div class="formgroup">
		<div><?php echo form_label('New email address', $email['id']); ?></div>
		<div><?php echo form_input($email); ?></div>
		<div style="color: red;"><?php echo form_error($email['name']); ?><?php echo isset($errors[$email['name']]) ? $errors[$email['name']] : ''; ?></div>
	</div>
	<div class="formgroup">
		<div>
			<?php echo form_submit(array('name' => 'change', 'class' => 'form-control btn btn-primary'), 'Send confirmation email'); ?>
		</div>
	</div>
	<?php echo form_close(); ?>

	<a href="<?php echo site_url('/account/profile/') ?>" class="btn btn-warning"><?php echo _("Back to profile") ?></a>

</div>
