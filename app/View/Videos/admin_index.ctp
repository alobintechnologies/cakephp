<?php

if (!isset($modules)) {
    $modulus = 11;
}
?>
<div class="row">
	<div class="col-lg-12">
		<?php echo $this->Session->flash(); ?>
		<h1 class="page-header"><i class="fa fa-list fa-fw"></i> <?php echo __('Videos'); ?></h1>
	</div>
</div> <!-- /row -->
<div class="row">
	<div class="col-lg-12">
		<div class="panel panel-default">
			<div class="panel-heading">
				<i class="fa fa-list fa-fw"></i> <?php echo __('Videos'); ?>				
				<div class="pull-right">
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
								<th><?php echo $this->Paginator->sort('title'); ?></th>
								<th><?php echo $this->Paginator->sort('video_script'); ?></th>
								<th><?php echo $this->Paginator->sort('is_main_video'); ?></th>
								<th><?php echo $this->Paginator->sort('is_show'); ?></th>
								<th><?php echo $this->Paginator->sort('created_by'); ?></th>
								<th class="actions"></th>
						</tr>
					</thead>
					<tbody>
					<?php foreach ($videos as $video): ?>
					<tr>
						<td><?php echo h($video['Video']['title']); ?>&nbsp;</td>
						<td><?php echo h($video['Video']['video_script']); ?>&nbsp;</td>
						<td><?php echo h($video['Video']['is_main_video']); ?>&nbsp;</td>
						<td><?php echo h($video['Video']['is_show']); ?>&nbsp;</td>
						<td><?php echo h($video['Video']['created_by']); ?>&nbsp;</td>
						<td class="actions">
							<?php echo $this->Html->link('<span class="glyphicon glyphicon-search"></span>', array('action' => 'view', $video['Video']['video_id']), array('escape' => false)); ?>
							<?php echo $this->Html->link('<span class="glyphicon glyphicon-edit"></span>', array('action' => 'edit', $video['Video']['video_id']), array('escape' => false)); ?>
							<?php echo $this->Form->postLink('<span class="glyphicon glyphicon-remove"></span>', array('action' => 'delete', $video['Video']['video_id']), array('escape' => false), __('Are you sure you want to delete # %s?', $video['Video']['video_id'])); ?>
						</td>
					</tr>
				<?php endforeach; ?>
					</tbody>
				</table>

				<p><?php
				echo $this->Paginator->counter(array(
				    'format' => __d('cake', 'Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
				));
				?></p>
			    <ul class="pagination  pagination-sm">

				<?php echo $this->Paginator->first('<span class="glyphicon glyphicon-step-backward"></span>&nbsp;', array('tag' => 'li', 'title' => 'First', 'escape' => false)); ?>
				<?php
				echo $this->Paginator->prev('<span class="glyphicon glyphicon-backward"></span>&nbsp;', array(
				    'tag' => 'li',
				    'escape' => false,
				    'title' => 'Prevous page',
				    'class' => 'prev',
					), $this->Paginator->link('<span class="glyphicon glyphicon-backward"></span>&nbsp;', array(), array(
					    'escape' => false,
					)), array(
				    'tag' => 'li',
				    'escape' => false,
				    'class' => 'prev disabled',
				));
				?>
				<?php
				
			       // debug($model);
			      //  debug($this->params['paging']);
				
				$page = $this->params['paging']['Video']['page'];
				$pageCount = $this->params['paging']['Video']['pageCount'];
				if ($modulus > $pageCount) {
				    $modulus = $pageCount;
				}
				$start = $page - intval($modulus / 2);
				if ($start < 1) {
				    $start = 1;
				}
				$end = $start + $modulus;
				if ($end > $pageCount) {
				    $end = $pageCount + 1;
				    $start = $end - $modulus;
				}
				for ($i = $start; $i < $end; $i++) {
				    $url = array('page' => $i);
				    $class = null;
				    if ($i == $page) {
					$url = array();
					$class = 'active';
				    }
				    echo $this->Html->tag('li', $this->Paginator->link($i, $url), array(
					'class' => $class,
				    ));
				}
				echo $this->Paginator->next('<span class="glyphicon glyphicon-forward"></span>&nbsp;', array(
				    'tag' => 'li',
				    'class' => 'next',
				    'escape' => false,
				    'title' => 'Next page',
					), $this->Paginator->link('<span class="glyphicon glyphicon-forward"></span>&nbsp;', array(), array('escape' => false,)), array(
				    'tag' => 'li',
				    'escape' => false,
				    'class' => 'next disabled',
				));
				?>
				<?php
				echo $this->Paginator->last('<span class="glyphicon glyphicon-step-forward"></span>&nbsp;', array('tag' => 'li', 'title' => 'Last', 'escape' => false,));
				?>
			</div> <!-- panel-body -->
		</div> <!-- / panel -->
	</div> <!-- / col-lg-12 -->
</div> <!-- / row -->