<div class="col-md-12">


    <div class="panel panel-default <?php echo __('video'); ?>">
        <div class="panel-heading">
            <h2>                <small><?php echo __('Video'); ?></small>

                <div class="btn-group pull-right">
                    <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                        Actions <span class="caret"></span>
                    </button>
                    <ul class="dropdown-menu" role="menu">
                        		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-edit"></span>&nbsp&nbsp;Edit Video'), array('action' => 'edit', $video['Video']['video_id']), array('escape' => false)); ?> </li>
		<li><?php echo $this->Form->postLink(__('<span class="glyphicon glyphicon-remove"></span>&nbsp;&nbsp;Delete Video'), array('action' => 'delete', $video['Video']['video_id']), array('escape' => false), __('Are you sure you want to delete # %s?', $video['Video']['video_id'])); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp&nbsp;List Videos'), array('action' => 'index'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp&nbsp;New Video'), array('action' => 'add'), array('escape' => false)); ?> </li>
		<li class="divider"></li>                    </ul>
                </div>

            </h2>
        </div>

        <div class="videos view panel-body">

            <table cellpadding="0" cellspacing="0" class="table table-striped">
		<tbody>
		<tr>
		<th><?php echo __('Video Id'); ?></th>
		<td>
			<?php echo h($video['Video']['video_id']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Title'); ?></th>
		<td>
			<?php echo h($video['Video']['title']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Featured Image Small'); ?></th>
		<td>
			<?php echo h($video['Video']['featured_image_small']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Featured Image Large'); ?></th>
		<td>
			<?php echo h($video['Video']['featured_image_large']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Video Script'); ?></th>
		<td>
			<?php echo h($video['Video']['video_script']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Is Main Video'); ?></th>
		<td>
			<?php echo h($video['Video']['is_main_video']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Is Show'); ?></th>
		<td>
			<?php echo h($video['Video']['is_show']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Created On'); ?></th>
		<td>
			<?php echo h($video['Video']['created_on']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Created By'); ?></th>
		<td>
			<?php echo h($video['Video']['created_by']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Last Modified On'); ?></th>
		<td>
			<?php echo h($video['Video']['last_modified_on']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Last Modified By'); ?></th>
		<td>
			<?php echo h($video['Video']['last_modified_by']); ?>
			&nbsp;
		</td>
</tr>
		</tbody>
	    </table>
        </div>


            </div> <!-- /end of panel -->
</div>
