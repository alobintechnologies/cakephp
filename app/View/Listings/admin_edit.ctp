<div class="row">
	<div class="col-lg-12">
	    <h1 class="page-header"><?php echo __('Admin Edit &raquo; <small>Listing</small>'); ?></h1>
	</div>
<!-- /.col-lg-12 -->
</div>
<div class="row">
    <div class="col-lg-12">
	<div class="panel panel-default">
	    <div class="panel-heading">
		<?php echo __('Admin Edit &raquo; <small>Listing</small>'); ?>		<div class="pull-right">
			<div class="btn-group">
			    <button type="button" class="btn btn-default btn-xs dropdown-toggle" data-toggle="dropdown">
				Actions
				<span class="caret"></span>
			    </button>
			    <ul class="dropdown-menu pull-right" role="menu">
								<li><?php echo $this->Form->postLink(__('<span class="glyphicon glyphicon-remove"></span>&nbsp;&nbsp;Delete'), array('action' => 'delete', $this->Form->value('Listing.listing_id')), array('escape' => false), __('Are you sure you want to delete # %s?', $this->Form->value('Listing.listing_id'))); ?></li>
								<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp;&nbsp;List Listings'), array('action' => 'index'), array('escape' => false)); ?></li>
							    </ul>
			</div> <!-- / pull-right -->
		    </div> <!-- btn-group -->
	    </div> <!-- / panel-heading -->
        <div class="panel-body">
            			<?php echo $this->Form->create('Listing', array('role' => 'form')); ?>

	    				<div class="form-group">
					<?php echo $this->Form->input('listing_id', array('class' => 'form-control', 'placeholder' => 'Listing Id'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('title', array('class' => 'form-control', 'placeholder' => 'Title'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('classified_type', array('class' => 'form-control', 'placeholder' => 'Classified Type'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('categories', array('class' => 'form-control', 'placeholder' => 'Categories'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('location', array('class' => 'form-control', 'placeholder' => 'Location'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('website', array('class' => 'form-control', 'placeholder' => 'Website'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('video_url', array('class' => 'form-control', 'placeholder' => 'Video Url'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('description', array('class' => 'form-control', 'placeholder' => 'Description'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('sold', array('class' => 'form-control', 'placeholder' => 'Sold'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('no_of_views', array('class' => 'form-control', 'placeholder' => 'No Of Views'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('short_desc', array('class' => 'form-control', 'placeholder' => 'Short Desc'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->submit(__('Submit'), array('class' => 'btn btn-default')); ?>
				</div>

			<?php echo $this->Form->end() ?>

        </div> <!-- / panel-body -->
	</div> <!-- end of panel -->
    </div> <!-- / col-lg-12 -->
</div> <!-- / row -->
