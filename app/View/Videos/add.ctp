<div class="row">
	<div class="col-lg-12">
	    <h1 class="page-header"><?php echo __('Add &raquo; <small>Video</small>'); ?></h1>
	</div>
<!-- /.col-lg-12 -->
</div>
<div class="row">
    <div class="col-lg-12">
	<div class="panel panel-default">
	    <div class="panel-heading">
		<?php echo __('Add &raquo; <small>Video</small>'); ?>		<div class="pull-right">
			<div class="btn-group">
			    <button type="button" class="btn btn-default btn-xs dropdown-toggle" data-toggle="dropdown">
				Actions
				<span class="caret"></span>
			    </button>
			    <ul class="dropdown-menu pull-right" role="menu">
								<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp;&nbsp;List Videos'), array('action' => 'index'), array('escape' => false)); ?></li>
							    </ul>
			</div> <!-- / pull-right -->
		    </div> <!-- btn-group -->
	    </div> <!-- / panel-heading -->
        <div class="panel-body">
            			<?php echo $this->Form->create('Video', array('role' => 'form')); ?>

	    				<div class="form-group">
					<?php echo $this->Form->input('title', array('class' => 'form-control', 'placeholder' => 'Title'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('featured_image_small', array('class' => 'form-control', 'placeholder' => 'Featured Image Small'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('featured_image_large', array('class' => 'form-control', 'placeholder' => 'Featured Image Large'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('video_script', array('class' => 'form-control', 'placeholder' => 'Video Script'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('is_main_video', array('class' => 'form-control', 'placeholder' => 'Is Main Video'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('is_show', array('class' => 'form-control', 'placeholder' => 'Is Show'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('created_on', array('class' => 'form-control', 'placeholder' => 'Created On'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('created_by', array('class' => 'form-control', 'placeholder' => 'Created By'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('last_modified_on', array('class' => 'form-control', 'placeholder' => 'Last Modified On'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('last_modified_by', array('class' => 'form-control', 'placeholder' => 'Last Modified By'));?>
				</div>
	    				<div class="form-group">
					<?php echo $this->Form->submit(__('Submit'), array('class' => 'btn btn-default')); ?>
				</div>

			<?php echo $this->Form->end() ?>

        </div> <!-- / panel-body -->
	</div> <!-- end of panel -->
    </div> <!-- / col-lg-12 -->
</div> <!-- / row -->
