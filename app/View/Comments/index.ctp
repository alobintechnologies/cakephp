<div class="row">
	<div class="col-lg-12">
		<h1 class="page-header"><i class="fa fa-list fa-fw"></i> <?php echo __('Comments'); ?></h1>
	</div>
</div> <!-- /row -->
<div class="row">
	<div class="col-lg-12">
		<div class="panel panel-default">
			<div class="panel-heading">
				<i class="fa fa-list fa-fw"></i> <?php echo __('Comments'); ?>				<div class="pull-right">
					<div class="btn-group">
					    <button type="button" class="btn btn-default btn-xs dropdown-toggle" data-toggle="dropdown">
						Actions
						<span class="caret"></span>
					    </button>
					    <ul class="dropdown-menu pull-right" role="menu">
						<li>   
						    <?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp;&nbsp;New Comment'), array('action' => 'add'), array('escape' => false)); ?>						</li>
											    </ul>
					</div> <!-- /btn-group -->
			    </div> <!-- / pull-right -->
			</div> <!-- / panel-heading -->
			<div class="panel-body">			    
				<table cellpadding="0" cellspacing="0" class="table table-striped">
					<thead>
						<tr>
								<th><?php echo $this->Paginator->sort('comment_id'); ?></th>
								<th><?php echo $this->Paginator->sort('post_id'); ?></th>
								<th><?php echo $this->Paginator->sort('post_type'); ?></th>
								<th><?php echo $this->Paginator->sort('author_name'); ?></th>
								<th><?php echo $this->Paginator->sort('author_email'); ?></th>
								<th><?php echo $this->Paginator->sort('author_ip'); ?></th>
								<th><?php echo $this->Paginator->sort('comment_parent'); ?></th>
								<th><?php echo $this->Paginator->sort('content'); ?></th>
								<th><?php echo $this->Paginator->sort('status'); ?></th>
								<th><?php echo $this->Paginator->sort('created_on'); ?></th>
								<th><?php echo $this->Paginator->sort('user_id'); ?></th>
								<th class="actions"></th>
						</tr>
					</thead>
					<tbody>
					<?php foreach ($comments as $comment): ?>
					<tr>
						<td><?php echo h($comment['Comment']['comment_id']); ?>&nbsp;</td>
						<td><?php echo h($comment['Comment']['post_id']); ?>&nbsp;</td>
						<td><?php echo h($comment['Comment']['post_type']); ?>&nbsp;</td>
						<td><?php echo h($comment['Comment']['author_name']); ?>&nbsp;</td>
						<td><?php echo h($comment['Comment']['author_email']); ?>&nbsp;</td>
						<td><?php echo h($comment['Comment']['author_ip']); ?>&nbsp;</td>
						<td><?php echo h($comment['Comment']['comment_parent']); ?>&nbsp;</td>
						<td><?php echo h($comment['Comment']['content']); ?>&nbsp;</td>
						<td><?php echo h($comment['Comment']['status']); ?>&nbsp;</td>
						<td><?php echo h($comment['Comment']['created_on']); ?>&nbsp;</td>
						<td><?php echo h($comment['Comment']['user_id']); ?>&nbsp;</td>
						<td class="actions">
							<?php echo $this->Html->link('<span class="glyphicon glyphicon-search"></span>', array('action' => 'view', $comment['Comment']['comment_id']), array('escape' => false)); ?>
							<?php echo $this->Html->link('<span class="glyphicon glyphicon-edit"></span>', array('action' => 'edit', $comment['Comment']['comment_id']), array('escape' => false)); ?>
							<?php echo $this->Form->postLink('<span class="glyphicon glyphicon-remove"></span>', array('action' => 'delete', $comment['Comment']['comment_id']), array('escape' => false), __('Are you sure you want to delete # %s?', $comment['Comment']['comment_id'])); ?>
						</td>
					</tr>
				<?php endforeach; ?>
					</tbody>
				</table>

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
			</div> <!-- panel-body -->
		</div> <!-- / panel -->
	</div> <!-- / col-lg-12 -->
</div> <!-- / row -->