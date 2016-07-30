<?php $this->start('heading'); ?>
<h1>Bibo Blog</h1>
<hr class="small">
<span class="subheading">A Blog for Bibo</span>
<?php $this->end(); ?>

<?php
	
	$this->Html->css('login', ['block' => true]);

	$this->loadHelper('Form', [
		'templates' => 'app_form',
	]);
?>


<div class="container">
	<?= $this->Form->create(null,['class'=>'form-signin']) ?>
		<div class="well">
			<?= $this->Flash->render('auth') ?>
			<h2 class="form-signin-heading">Please sign in</h2>
					
				<fieldset>
					<?= $this->Form->input('username') ?>
					<?= $this->Form->input('password') ?>
				</fieldset>
			<?= $this->Form->button(__('Login')) ?>
			<?= $this->Html->link('<small>Not yet a member?</small>',['action'=>'add'],['escape'=>false]) ?>
		</div>
	<?= $this->Form->end() ?>
</div>