<div class="row">
	<div class="col-lg-12">
	    <h1 class="page-header"><?php echo __('Edit &raquo; <small>Comment</small>'); ?></h1>
	</div>
<!-- /.col-lg-12 -->
</div>
<div class="row">
    <div class="col-lg-12">
	<div class="panel panel-default">
	    <div class="panel-heading">
		<?php echo __('Edit &raquo; <small>Comment</small>'); ?>		<div class="pull-right">
			<div class="btn-group">
			    <button type="button" class="btn btn-default btn-xs dropdown-toggle" data-toggle="dropdown">
				Actions
				<span class="caret"></span>
			    </button>
			    <ul class="dropdown-menu pull-right" role="menu">
								<li><?php echo $this->Form->postLink(__('<span class="glyphicon glyphicon-remove"></span>&nbsp;&nbsp;Delete'), array('action' => 'delete', $this->Form->value('Comment.comment_id')), array('escape' => false), __('Are you sure you want to delete # %s?', $this->Form->value('Comment.comment_id'))); ?></li>
								<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp;&nbsp;List Comments'), array('action' => 'index'), array('escape' => false)); ?></li>
							    </ul>
			</div> <!-- / pull-right -->
		    </div> <!-- btn-group -->
	    </div> <!-- / panel-heading -->
        <div class="panel-body">
            			<?php echo $this->Form->create('Comment', array('role' => 'form')); ?>

	    				<div class="form-group">
					<?php echo $this->Form->input('comment_id', array('class' => 'form-control', 'placeholder' => 'Comment Id'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('post_id', array('class' => 'form-control', 'placeholder' => 'Post Id'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('post_type', array('class' => 'form-control', 'placeholder' => 'Post Type'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('author_name', array('class' => 'form-control', 'placeholder' => 'Author Name'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('author_email', array('class' => 'form-control', 'placeholder' => 'Author Email'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('author_ip', array('class' => 'form-control', 'placeholder' => 'Author Ip'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('comment_parent', array('class' => 'form-control', 'placeholder' => 'Comment Parent'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('content', array('class' => 'form-control', 'placeholder' => 'Content'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('status', array('class' => 'form-control', 'placeholder' => 'Status'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('created_on', array('class' => 'form-control', 'placeholder' => 'Created On'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('user_id', array('class' => 'form-control', 'placeholder' => 'User Id'));?>
				</div>
	    				<div class="form-group">
					<?php echo $this->Form->submit(__('Submit'), array('class' => 'btn btn-default')); ?>
				</div>

			<?php echo $this->Form->end() ?>

        </div> <!-- / panel-body -->
	</div> <!-- end of panel -->
    </div> <!-- / col-lg-12 -->
</div> <!-- / row -->
