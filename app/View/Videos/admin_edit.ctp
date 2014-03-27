<div class="row">
	<div class="col-lg-12">
	    <?php echo $this->Session->flash(); ?>
	    <h1 class="page-header"><?php echo __('Admin Edit &raquo; <small>Video</small>'); ?></h1>
	</div>
<!-- /.col-lg-12 -->
</div>
<div class="row">
    <div class="col-lg-12">
	<div class="panel panel-default">
	    <div class="panel-heading">
		<?php echo __('Admin Edit &raquo; <small>Video</small>'); ?>		<div class="pull-right">
			<div class="btn-group">
			    <button type="button" class="btn btn-default btn-xs dropdown-toggle" data-toggle="dropdown">
				Actions
				<span class="caret"></span>
			    </button>
			    <ul class="dropdown-menu pull-right" role="menu">
								<li><?php echo $this->Form->postLink(__('<span class="glyphicon glyphicon-remove"></span>&nbsp;&nbsp;Delete'), array('action' => 'delete', $this->Form->value('Video.video_id')), array('escape' => false), __('Are you sure you want to delete # %s?', $this->Form->value('Video.video_id'))); ?></li>
								<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp;&nbsp;List Videos'), array('action' => 'index'), array('escape' => false)); ?></li>
							    </ul>
			</div> <!-- / pull-right -->
		    </div> <!-- btn-group -->
	    </div> <!-- / panel-heading -->
        <div class="panel-body">
		<?php echo $this->Form->create('Video', array('role' => 'form', 'type' => 'file')); ?>

			<div class="form-group">
				<?php echo $this->Form->input('video_id', array('class' => 'form-control', 'placeholder' => 'Video Id'));?>
			</div>
			<div class="form-group">
				<?php echo $this->Form->input('title', array('class' => 'form-control', 'placeholder' => 'Title'));?>
			</div>
			<div class="form-group">
				<?php echo $this->Form->input('featured_small', array('label' => 'Featured Image Small', 'type' => 'file'));?>
			</div>
			<div class="form-group">
				<?php echo $this->Form->input('featured_large', array('label' => 'Featured Image Large', 'type' => 'file'));?>
			</div>
			<div class="form-group">
				<?php echo $this->Nicedit->textarea('video_script');?>
			</div>
			<div class="form-group">
				<?php echo $this->Form->input('is_main_video', array('type' => 'checkbox', 'label' => 'Main Video', 'hiddenField' => 'N', 'value' => 'Y'));?>
			</div>
			<div class="form-group">
				<?php echo $this->Form->input('is_show', array('type' => 'checkbox', 'label' => 'Show Video', 'hiddenField' => 'N', 'value' => 'Y'));?>
			</div>
			<div class="form-group">
				<?php echo $this->Form->submit(__('Submit'), array('class' => 'btn btn-default')); ?>
			</div>

		<?php echo $this->Form->end() ?>

        </div> <!-- / panel-body -->
	</div> <!-- end of panel -->
    </div> <!-- / col-lg-12 -->
</div> <!-- / row -->
