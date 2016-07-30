<?php $this->start('heading'); ?>
<h1><?= $blog->title ?></h1>
<h2 class="subheading"><?= $blog->slug ?></h2>
<span class="meta">
	Posted by <?= $blog->has('user') ? $this->Html->link($blog->user->email_address, ['controller' => 'Users', 'action' => 'view', $blog->user->id]) : '' ?>
	on <?= $blog->created_at->format('F j, Y') ?>
</span>
<?php $this->end(); ?>




<!-- Post Content -->
<article>
	<div class="container">
		<div class="row">
			<div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
				<?= $blog->content ?>

				<hr>

				<!-- Blog Comments -->
				
				<!-- Comments Form -->
				<div class="well">
					<h4>Leave a Comment:</h4>
					<?php
						$this->loadHelper('Form', [
							'templates' => 'app_form',
						]);
					?>
					<?= $this->Form->create(null,['url'=>['controller'=>'comments','action'=>'add']]) ?>
						<div class="form-group">
							<?= $this->Form->hidden('blog_id',['value'=>$blog->id]) ?>
							<?= $this->Form->textarea('content',['rows'=>3]) ?>
						</div>
						<button type="submit" class="btn btn-primary">Submit</button>
					</form>
					
					<?= $this->Form->end() ?>
				</div>

				<hr>

				<!-- Posted Comments -->

				<!-- Comment -->
				<?php foreach ($blog->comments as $comments): ?>
				<div class="media">
					<div class="media-body">
						<?= h($comments->content) ?>
						<h4 class="media-heading">
							<small class=" pull-right"><?= h($comments->created_at->format('F j, Y \a\t g:i a')) ?></small>
						</h4>
					</div>
				</div>
				<?php endforeach; ?>


			</div>
		</div>
	</div>
</article>


