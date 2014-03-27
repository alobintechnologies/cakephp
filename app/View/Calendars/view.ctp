<div class="col-md-12">


    <div class="panel panel-default <?php echo __('calendar'); ?>">
        <div class="panel-heading">
            <h2>                <small><?php echo __('Calendar'); ?></small>

                <div class="btn-group pull-right">
                    <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                        Actions <span class="caret"></span>
                    </button>
                    <ul class="dropdown-menu" role="menu">
                        		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-edit"></span>&nbsp&nbsp;Edit Calendar'), array('action' => 'edit', $calendar['Calendar']['calendar_id']), array('escape' => false)); ?> </li>
		<li><?php echo $this->Form->postLink(__('<span class="glyphicon glyphicon-remove"></span>&nbsp;&nbsp;Delete Calendar'), array('action' => 'delete', $calendar['Calendar']['calendar_id']), array('escape' => false), __('Are you sure you want to delete # %s?', $calendar['Calendar']['calendar_id'])); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp&nbsp;List Calendars'), array('action' => 'index'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp&nbsp;New Calendar'), array('action' => 'add'), array('escape' => false)); ?> </li>
		<li class="divider"></li>                    </ul>
                </div>

            </h2>
        </div>

        <div class="calendars view panel-body">

            <table cellpadding="0" cellspacing="0" class="table table-striped">
		<tbody>
		<tr>
		<th><?php echo __('Calendar Id'); ?></th>
		<td>
			<?php echo h($calendar['Calendar']['calendar_id']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Title'); ?></th>
		<td>
			<?php echo h($calendar['Calendar']['title']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Calendar Type'); ?></th>
		<td>
			<?php echo h($calendar['Calendar']['calendar_type']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Start Date'); ?></th>
		<td>
			<?php echo h($calendar['Calendar']['start_date']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('End Date'); ?></th>
		<td>
			<?php echo h($calendar['Calendar']['end_date']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Time'); ?></th>
		<td>
			<?php echo h($calendar['Calendar']['time']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Location'); ?></th>
		<td>
			<?php echo h($calendar['Calendar']['location']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('State'); ?></th>
		<td>
			<?php echo h($calendar['Calendar']['state']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Short Desc'); ?></th>
		<td>
			<?php echo h($calendar['Calendar']['short_desc']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Content'); ?></th>
		<td>
			<?php echo h($calendar['Calendar']['content']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Video Url'); ?></th>
		<td>
			<?php echo h($calendar['Calendar']['video_url']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Contact'); ?></th>
		<td>
			<?php echo h($calendar['Calendar']['contact']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Email Address'); ?></th>
		<td>
			<?php echo h($calendar['Calendar']['email_address']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Website'); ?></th>
		<td>
			<?php echo h($calendar['Calendar']['website']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Featured Image'); ?></th>
		<td>
			<?php echo h($calendar['Calendar']['featured_image']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Featured Image Title'); ?></th>
		<td>
			<?php echo h($calendar['Calendar']['featured_image_title']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Status'); ?></th>
		<td>
			<?php echo h($calendar['Calendar']['status']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Created On'); ?></th>
		<td>
			<?php echo h($calendar['Calendar']['created_on']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Created By'); ?></th>
		<td>
			<?php echo h($calendar['Calendar']['created_by']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Last Modified On'); ?></th>
		<td>
			<?php echo h($calendar['Calendar']['last_modified_on']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Last Modified By'); ?></th>
		<td>
			<?php echo h($calendar['Calendar']['last_modified_by']); ?>
			&nbsp;
		</td>
</tr>
		</tbody>
	    </table>
        </div>


            </div> <!-- /end of panel -->
</div>
