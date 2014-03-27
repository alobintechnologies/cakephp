<div class="row">
	<div class="col-lg-12">
		<h1 class="page-header"><i class="fa fa-list fa-fw"></i> <?php echo __('Calendars'); ?></h1>
	</div>
</div> <!-- /row -->
<div class="row">
	<div class="col-lg-12">
		<div class="panel panel-default">
			<div class="panel-heading">
				<i class="fa fa-list fa-fw"></i> <?php echo __('Calendars'); ?>				<div class="pull-right">
					<div class="btn-group">
					    <button type="button" class="btn btn-default btn-xs dropdown-toggle" data-toggle="dropdown">
						Actions
						<span class="caret"></span>
					    </button>
					    <ul class="dropdown-menu pull-right" role="menu">
						<li>   
						    <?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp;&nbsp;New Calendar'), array('action' => 'add'), array('escape' => false)); ?>						</li>
											    </ul>
					</div> <!-- /btn-group -->
			    </div> <!-- / pull-right -->
			</div> <!-- / panel-heading -->
			<div class="panel-body">			    
				<table cellpadding="0" cellspacing="0" class="table table-striped">
					<thead>
						<tr>
								<th><?php echo $this->Paginator->sort('calendar_id'); ?></th>
								<th><?php echo $this->Paginator->sort('title'); ?></th>
								<th><?php echo $this->Paginator->sort('calendar_type'); ?></th>
								<th><?php echo $this->Paginator->sort('start_date'); ?></th>
								<th><?php echo $this->Paginator->sort('end_date'); ?></th>
								<th><?php echo $this->Paginator->sort('time'); ?></th>
								<th><?php echo $this->Paginator->sort('location'); ?></th>
								<th><?php echo $this->Paginator->sort('state'); ?></th>
								<th><?php echo $this->Paginator->sort('short_desc'); ?></th>
								<th><?php echo $this->Paginator->sort('content'); ?></th>
								<th><?php echo $this->Paginator->sort('video_url'); ?></th>
								<th><?php echo $this->Paginator->sort('contact'); ?></th>
								<th><?php echo $this->Paginator->sort('email_address'); ?></th>
								<th><?php echo $this->Paginator->sort('website'); ?></th>
								<th><?php echo $this->Paginator->sort('featured_image'); ?></th>
								<th><?php echo $this->Paginator->sort('featured_image_title'); ?></th>
								<th><?php echo $this->Paginator->sort('status'); ?></th>
								<th><?php echo $this->Paginator->sort('created_on'); ?></th>
								<th><?php echo $this->Paginator->sort('created_by'); ?></th>
								<th><?php echo $this->Paginator->sort('last_modified_on'); ?></th>
								<th><?php echo $this->Paginator->sort('last_modified_by'); ?></th>
								<th class="actions"></th>
						</tr>
					</thead>
					<tbody>
					<?php foreach ($calendars as $calendar): ?>
					<tr>
						<td><?php echo h($calendar['Calendar']['calendar_id']); ?>&nbsp;</td>
						<td><?php echo h($calendar['Calendar']['title']); ?>&nbsp;</td>
						<td><?php echo h($calendar['Calendar']['calendar_type']); ?>&nbsp;</td>
						<td><?php echo h($calendar['Calendar']['start_date']); ?>&nbsp;</td>
						<td><?php echo h($calendar['Calendar']['end_date']); ?>&nbsp;</td>
						<td><?php echo h($calendar['Calendar']['time']); ?>&nbsp;</td>
						<td><?php echo h($calendar['Calendar']['location']); ?>&nbsp;</td>
						<td><?php echo h($calendar['Calendar']['state']); ?>&nbsp;</td>
						<td><?php echo h($calendar['Calendar']['short_desc']); ?>&nbsp;</td>
						<td><?php echo h($calendar['Calendar']['content']); ?>&nbsp;</td>
						<td><?php echo h($calendar['Calendar']['video_url']); ?>&nbsp;</td>
						<td><?php echo h($calendar['Calendar']['contact']); ?>&nbsp;</td>
						<td><?php echo h($calendar['Calendar']['email_address']); ?>&nbsp;</td>
						<td><?php echo h($calendar['Calendar']['website']); ?>&nbsp;</td>
						<td><?php echo h($calendar['Calendar']['featured_image']); ?>&nbsp;</td>
						<td><?php echo h($calendar['Calendar']['featured_image_title']); ?>&nbsp;</td>
						<td><?php echo h($calendar['Calendar']['status']); ?>&nbsp;</td>
						<td><?php echo h($calendar['Calendar']['created_on']); ?>&nbsp;</td>
						<td><?php echo h($calendar['Calendar']['created_by']); ?>&nbsp;</td>
						<td><?php echo h($calendar['Calendar']['last_modified_on']); ?>&nbsp;</td>
						<td><?php echo h($calendar['Calendar']['last_modified_by']); ?>&nbsp;</td>
						<td class="actions">
							<?php echo $this->Html->link('<span class="glyphicon glyphicon-search"></span>', array('action' => 'view', $calendar['Calendar']['calendar_id']), array('escape' => false)); ?>
							<?php echo $this->Html->link('<span class="glyphicon glyphicon-edit"></span>', array('action' => 'edit', $calendar['Calendar']['calendar_id']), array('escape' => false)); ?>
							<?php echo $this->Form->postLink('<span class="glyphicon glyphicon-remove"></span>', array('action' => 'delete', $calendar['Calendar']['calendar_id']), array('escape' => false), __('Are you sure you want to delete # %s?', $calendar['Calendar']['calendar_id'])); ?>
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