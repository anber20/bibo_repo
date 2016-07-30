<?php $this->start('heading'); ?>
<h1>New Article</h1>
<h2 class="subheading">More article means more fun</h2>
<span class="meta">
</span>
<?php $this->end(); ?>


<!-- Post Content -->
<article>
	<div class="container">
		<div class="row">
			<div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
				<?php
					$this->loadHelper('Form', [
						'templates' => 'app_form',
					]);
				?>
				<?= $this->Form->create($blog) ?>
				<fieldset>
					<?php
						echo $this->Form->input('title');
						echo $this->Form->input('slug');
						echo $this->Form->input('content');
					?>
				</fieldset>
				<?= $this->Form->button(__('Submit')) ?>
				<?= $this->Form->end() ?>
			
			</div>
		</div>
	</div>
</article>
