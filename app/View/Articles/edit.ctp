<div class="row">
	<div class="col-lg-12">
	    <h1 class="page-header"><?php echo __('Edit &raquo; <small>Article</small>'); ?></h1>
	</div>
<!-- /.col-lg-12 -->
</div>
<div class="row">
    <div class="col-lg-12">
	<div class="panel panel-default">
	    <div class="panel-heading">
		<?php echo __('Edit &raquo; <small>Article</small>'); ?>		<div class="pull-right">
			<div class="btn-group">
			    <button type="button" class="btn btn-default btn-xs dropdown-toggle" data-toggle="dropdown">
				Actions
				<span class="caret"></span>
			    </button>
			    <ul class="dropdown-menu pull-right" role="menu">
								<li><?php echo $this->Form->postLink(__('<span class="glyphicon glyphicon-remove"></span>&nbsp;&nbsp;Delete'), array('action' => 'delete', $this->Form->value('Article.article_id')), array('escape' => false), __('Are you sure you want to delete # %s?', $this->Form->value('Article.article_id'))); ?></li>
								<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp;&nbsp;List Articles'), array('action' => 'index'), array('escape' => false)); ?></li>
							    </ul>
			</div> <!-- / pull-right -->
		    </div> <!-- btn-group -->
	    </div> <!-- / panel-heading -->
        <div class="panel-body">
            			<?php echo $this->Form->create('Article', array('role' => 'form')); ?>

	    				<div class="form-group">
					<?php echo $this->Form->input('article_id', array('class' => 'form-control', 'placeholder' => 'Article Id'));?>
				</div>
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
					<?php echo $this->Form->input('display_from', array('class' => 'form-control', 'placeholder' => 'Display From'));?>
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
					<?php echo $this->Form->input('featured_image', array('class' => 'form-control', 'placeholder' => 'Featured Image'));?>
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
					<?php echo $this->Form->input('status', array('class' => 'form-control', 'placeholder' => 'Status'));?>
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
