<div class="row">
	<div class="col-lg-12">
	    <h1 class="page-header"><?php echo __('Admin Edit &raquo; <small>Calendar</small>'); ?></h1>
	</div>
<!-- /.col-lg-12 -->
</div>
<div class="row">
    <div class="col-lg-12">
	<div class="panel panel-default">
	    <div class="panel-heading">
		<?php echo __('Admin Edit &raquo; <small>Calendar</small>'); ?>		<div class="pull-right">
			<div class="btn-group">
			    <button type="button" class="btn btn-default btn-xs dropdown-toggle" data-toggle="dropdown">
				Actions
				<span class="caret"></span>
			    </button>
			    <ul class="dropdown-menu pull-right" role="menu">
								<li><?php echo $this->Form->postLink(__('<span class="glyphicon glyphicon-remove"></span>&nbsp;&nbsp;Delete'), array('action' => 'delete', $this->Form->value('Calendar.calendar_id')), array('escape' => false), __('Are you sure you want to delete # %s?', $this->Form->value('Calendar.calendar_id'))); ?></li>
								<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp;&nbsp;List Calendars'), array('action' => 'index'), array('escape' => false)); ?></li>
							    </ul>
			</div> <!-- / pull-right -->
		    </div> <!-- btn-group -->
	    </div> <!-- / panel-heading -->
        <div class="panel-body">
            			<?php echo $this->Form->create('Calendar', array('role' => 'form')); ?>

	    			<div class="form-group">
					<?php echo $this->Form->input('calendar_id', array('class' => 'form-control', 'placeholder' => 'Calendar Id'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('title', array('class' => 'form-control', 'placeholder' => 'Title'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('calendar_type', array('class' => 'form-control', 'placeholder' => 'Calendar Type'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('start_date', array('type' => 'text', 'class' => 'form-control datepicker', 'placeholder' => 'Start Date [dd/mm/yyyy]'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('end_date', array('type' => 'text', 'class' => 'form-control datepicker', 'placeholder' => 'End Date [dd/mm/yyyy]'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('time', array('class' => 'form-control', 'placeholder' => 'Time'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('location', array('class' => 'form-control', 'placeholder' => 'Location'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('state', array('class' => 'form-control', 'placeholder' => 'State'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('short_desc', array('class' => 'form-control', 'placeholder' => 'Short Desc'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('content', array('class' => 'form-control', 'placeholder' => 'Content'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('video_url', array('class' => 'form-control', 'placeholder' => 'Video Url'));?>
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
					<?php echo $this->Form->input('featured_image', array('class' => 'form-control', 'placeholder' => 'Featured Image'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('featured_image_title', array('class' => 'form-control', 'placeholder' => 'Featured Image Title'));?>
				</div>
	    			<div class="form-group">
					<?php echo $this->Form->submit(__('Submit'), array('class' => 'btn btn-default')); ?>
				</div>

			<?php echo $this->Form->end() ?>

        </div> <!-- / panel-body -->
	</div> <!-- end of panel -->
    </div> <!-- / col-lg-12 -->
</div> <!-- / row -->
