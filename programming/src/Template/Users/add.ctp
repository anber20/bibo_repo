<?php $this->start('heading'); ?>
<h1>New Bibo</h1>
<hr class="small">
<span class="subheading">Welcome to the growing family of Bibo</span>
<?php $this->end(); ?>

<?php
	

	$this->loadHelper('Form', [
		'templates' => 'app_form',
	]);
?>

<div class="container">
	<div class="row">
		<div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
			<?= $this->Form->create($user) ?>
			<fieldset>
				<?php
					echo $this->Form->input('email_address');
					echo $this->Form->input('password');
					echo $this->Form->input('username');
					echo $this->Form->input('first_name');
					echo $this->Form->input('last_name');
				?>
			</fieldset>
			<?= $this->Form->button(__('Submit')) ?>
			<?= $this->Form->end() ?>
		</div>
	</div>
</div>