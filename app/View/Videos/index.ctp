<div class="row">
	<div class="col-lg-12">
		<h1 class="page-header"><i class="fa fa-list fa-fw"></i> <?php echo __('Videos'); ?></h1>
	</div>
</div> <!-- /row -->
<div class="row">
	<div class="col-lg-12">
		<div class="panel panel-default">
			<div class="panel-heading">
				<i class="fa fa-list fa-fw"></i> <?php echo __('Videos'); ?>				<div class="pull-right">
					<div class="btn-group">
					    <button type="button" class="btn btn-default btn-xs dropdown-toggle" data-toggle="dropdown">
						Actions
						<span class="caret"></span>
					    </button>
					    <ul class="dropdown-menu pull-right" role="menu">
						<li>   
						    <?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp;&nbsp;New Video'), array('action' => 'add'), array('escape' => false)); ?>						</li>
											    </ul>
					</div> <!-- /btn-group -->
			    </div> <!-- / pull-right -->
			</div> <!-- / panel-heading -->
			<div class="panel-body">			    
				<table cellpadding="0" cellspacing="0" class="table table-striped">
					<thead>
						<tr>
								<th><?php echo $this->Paginator->sort('video_id'); ?></th>
								<th><?php echo $this->Paginator->sort('title'); ?></th>
								<th><?php echo $this->Paginator->sort('featured_image_small'); ?></th>
								<th><?php echo $this->Paginator->sort('featured_image_large'); ?></th>
								<th><?php echo $this->Paginator->sort('video_script'); ?></th>
								<th><?php echo $this->Paginator->sort('is_main_video'); ?></th>
								<th><?php echo $this->Paginator->sort('is_show'); ?></th>
								<th><?php echo $this->Paginator->sort('created_on'); ?></th>
								<th><?php echo $this->Paginator->sort('created_by'); ?></th>
								<th><?php echo $this->Paginator->sort('last_modified_on'); ?></th>
								<th><?php echo $this->Paginator->sort('last_modified_by'); ?></th>
								<th class="actions"></th>
						</tr>
					</thead>
					<tbody>
					<?php foreach ($videos as $video): ?>
					<tr>
						<td><?php echo h($video['Video']['video_id']); ?>&nbsp;</td>
						<td><?php echo h($video['Video']['title']); ?>&nbsp;</td>
						<td><?php echo h($video['Video']['featured_image_small']); ?>&nbsp;</td>
						<td><?php echo h($video['Video']['featured_image_large']); ?>&nbsp;</td>
						<td><?php echo h($video['Video']['video_script']); ?>&nbsp;</td>
						<td><?php echo h($video['Video']['is_main_video']); ?>&nbsp;</td>
						<td><?php echo h($video['Video']['is_show']); ?>&nbsp;</td>
						<td><?php echo h($video['Video']['created_on']); ?>&nbsp;</td>
						<td><?php echo h($video['Video']['created_by']); ?>&nbsp;</td>
						<td><?php echo h($video['Video']['last_modified_on']); ?>&nbsp;</td>
						<td><?php echo h($video['Video']['last_modified_by']); ?>&nbsp;</td>
						<td class="actions">
							<?php echo $this->Html->link('<span class="glyphicon glyphicon-search"></span>', array('action' => 'view', $video['Video']['video_id']), array('escape' => false)); ?>
							<?php echo $this->Html->link('<span class="glyphicon glyphicon-edit"></span>', array('action' => 'edit', $video['Video']['video_id']), array('escape' => false)); ?>
							<?php echo $this->Form->postLink('<span class="glyphicon glyphicon-remove"></span>', array('action' => 'delete', $video['Video']['video_id']), array('escape' => false), __('Are you sure you want to delete # %s?', $video['Video']['video_id'])); ?>
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