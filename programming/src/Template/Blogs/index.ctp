<?php $this->start('heading'); ?>
<h1>Bibo Blog</h1>
<hr class="small">
<span class="subheading">A Blog for Bibo</span>
<?php $this->end(); ?>


<div class="container">
	<div class="row">
		<div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
			<?php foreach ($blogs as $blog): ?>
			<div class="post-preview">
				<a href="<?= $this->Url->build(['action' => 'view', $blog->id]) ?>">
					<h2 class="post-title">
						<?= __($blog->title) ?>
					</h2>
					<h3 class="post-subtitle">
						<?= __($blog->slug) ?>
					</h3>
				</a>
				<p class="post-meta">
					Posted by <?= $blog->user->email_address ?> <?php /*= $blog->has('user') ? $this->Html->link($blog->user->email_address, ['controller' => 'Users', 'action' => 'view', $blog->user->id]) : ''; */?> 
					on <?= $blog->created_at->format('F j, Y') ?>
				</p>
				
                <div class="actions">
						<?= $this->Html->link(__('<span class="glyphicon glyphicon-pencil"></span>'), ['action' => 'edit', $blog->id],['class'=>'btn btn-default btn-xs','escape'=>false,'title'=>'Edit']) ?>
						<?= $this->Form->postLink(__('<span class="glyphicon glyphicon-trash"></span>'), ['action' => 'delete', $blog->id], ['confirm' => __('Are you sure you want to delete # {0}?', $blog->id),'class'=>'btn btn-danger btn-xs','escape'=>false,'title'=>'Delete']) ?>
 
                </div>
			</div>
			<hr>
			<?php endforeach; ?>
			
			<?= $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span> New Article'), ['action' => 'add'],['class'=>'btn btn-success pull-left','escape'=>false,'title'=>'New Article']) ?>
			
			<!-- Pager -->
			<?php
			// Change a template
			$this->Paginator->templates([
				'nextActive' => '<a href="{{url}}">{{text}}</a>',
				'nextDisabled' => '<a href="#">{{text}}</a>'
			]);
			?>
			<ul class="pager">
				<li class="next">
					<?= $this->Paginator->next(__('Older Posts &rarr;'), array('escape'=>false)) ?>
				</li>
			</ul>
		</div>
	</div>
</div>
	