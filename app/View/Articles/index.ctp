<div class="row">
	<div class="col-lg-12">
		<h1 class="page-header"><i class="fa fa-list fa-fw"></i> <?php echo __('Articles'); ?></h1>
	</div>
</div> <!-- /row -->
<div class="row">
	<div class="col-lg-12">
		<?php foreach ($articles as $article): ?>
			<!-- blog entry -->
			<h1><?php echo $this->Html->link(h($article['Article']['title']), array('controller' => 'articles', 'action' => 'view', h($article['Article']['article_id']))); ?></h1>
			<hr>
			<p>
			    <span class="glyphicon glyphicon-time"></span> Posted on <?php echo h($article['Article']['created_on']); ?></p>
			<hr>
			<img src="http://placehold.it/900x300" class="img-responsive">
			<hr>
			<p><?php echo h($article['Article']['content']); ?></p>
			<?php echo $this->Html->link('Read more &raquo;', array('controller' => 'articles', 'action' => 'view', h($article['Article']['article_id']), array('escape' => false))); ?>

			<hr>
		<?php endforeach; ?>

		<p>
			<small><?php echo $this->Paginator->counter(array('format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')));?></small>
		</p>

		<?php
		$params = $this->Paginator->params();
		if ($params['pageCount'] > 1) {
		?>
		<ul class="pagination pagination-sm">
			<?php
			echo $this->Paginator->prev('&larr; Previous', array('class' => 'prev','tag' => 'li','escape' => false), '<a onclick="return false;">&larr; Previous</a>', array('class' => 'prev disabled','tag' => 'li','escape' => false));
			echo $this->Paginator->numbers(array('separator' => '','tag' => 'li','currentClass' => 'active','currentTag' => 'a'));
			echo $this->Paginator->next('Next &rarr;', array('class' => 'next','tag' => 'li','escape' => false), '<a onclick="return false;">Next &rarr;</a>', array('class' => 'next disabled','tag' => 'li','escape' => false));
		?>
		</ul>
		<?php } ?>
	</div> <!-- / col-lg-12 -->
</div> <!-- / row -->