<div class="row">
	<div class="col-lg-12">
	    <h1 class="page-header"><?php echo __('Admin Add &raquo; <small>Article</small>'); ?></h1>
	</div>
<!-- /.col-lg-12 -->
</div>
<div class="row">
    <div class="col-lg-12">
	<div class="panel panel-default">
	    <div class="panel-heading">
		<?php echo __('Admin Add &raquo; <small>Article</small>'); ?>		<div class="pull-right">
			<div class="btn-group">
			    <button type="button" class="btn btn-default btn-xs dropdown-toggle" data-toggle="dropdown">
				Actions
				<span class="caret"></span>
			    </button>
			    <ul class="dropdown-menu pull-right" role="menu">
								<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp;&nbsp;List Articles'), array('action' => 'index'), array('escape' => false)); ?></li>
							    </ul>
			</div> <!-- / pull-right -->
		    </div> <!-- btn-group -->
	    </div> <!-- / panel-heading -->
        <div class="panel-body">
            			<?php echo $this->Form->create('Article', array('role' => 'form')); ?>

	    			<div class="form-group">
					<?php echo $this->Form->input('title', array('class' => 'form-control', 'placeholder' => 'Title'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('categories', array('class' => 'form-control', 'placeholder' => 'Categories'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('meta_description', array('class' => 'form-control', 'placeholder' => 'Meta Description'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('display_from', array('type' => 'text', 'class' => 'form-control datepicker', 'placeholder' => 'Display From [dd/mm/yyyy] ex: 31/02/2014'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('short_desc', array('class' => 'form-control', 'placeholder' => 'Short Desc'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('content', array('class' => 'form-control', 'placeholder' => 'Content'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('contact', array('class' => 'form-control', 'placeholder' => 'Contact'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('email_address', array('class' => 'form-control', 'placeholder' => 'Email Address'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('website', array('class' => 'form-control', 'placeholder' => 'Website'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('featured_image', array('type' => 'file'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('featured_image_title', array('class' => 'form-control', 'placeholder' => 'Featured Image Title'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('sponsor', array('class' => 'form-control', 'placeholder' => 'Sponsor'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('video_script', array('class' => 'form-control', 'placeholder' => 'Video Script'));?>
				</div>
	    			<div class="form-group">
					<?php echo $this->Form->submit(__('Submit'), array('class' => 'btn btn-default')); ?>
				</div>

			<?php echo $this->Form->end() ?>

        </div> <!-- / panel-body -->
	</div> <!-- end of panel -->
    </div> <!-- / col-lg-12 -->
</div> <!-- / row -->
