<div class="col-md-12">


    <div class="panel panel-default <?php echo __('listing'); ?>">
        <div class="panel-heading">
            <h2>                <small><?php echo __('Listing'); ?></small>

                <div class="btn-group pull-right">
                    <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                        Actions <span class="caret"></span>
                    </button>
                    <ul class="dropdown-menu" role="menu">
                        		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-edit"></span>&nbsp&nbsp;Edit Listing'), array('action' => 'edit', $listing['Listing']['listing_id']), array('escape' => false)); ?> </li>
		<li><?php echo $this->Form->postLink(__('<span class="glyphicon glyphicon-remove"></span>&nbsp;&nbsp;Delete Listing'), array('action' => 'delete', $listing['Listing']['listing_id']), array('escape' => false), __('Are you sure you want to delete # %s?', $listing['Listing']['listing_id'])); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp&nbsp;List Listings'), array('action' => 'index'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp&nbsp;New Listing'), array('action' => 'add'), array('escape' => false)); ?> </li>
		<li class="divider"></li>                    </ul>
                </div>

            </h2>
        </div>

        <div class="listings view panel-body">

            <table cellpadding="0" cellspacing="0" class="table table-striped">
		<tbody>
		<tr>
		<th><?php echo __('Listing Id'); ?></th>
		<td>
			<?php echo h($listing['Listing']['listing_id']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Title'); ?></th>
		<td>
			<?php echo h($listing['Listing']['title']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Classified Type'); ?></th>
		<td>
			<?php echo h($listing['Listing']['classified_type']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Categories'); ?></th>
		<td>
			<?php echo h($listing['Listing']['categories']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Location'); ?></th>
		<td>
			<?php echo h($listing['Listing']['location']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Website'); ?></th>
		<td>
			<?php echo h($listing['Listing']['website']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Video Url'); ?></th>
		<td>
			<?php echo h($listing['Listing']['video_url']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Description'); ?></th>
		<td>
			<?php echo h($listing['Listing']['description']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Sold'); ?></th>
		<td>
			<?php echo h($listing['Listing']['sold']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('No Of Views'); ?></th>
		<td>
			<?php echo h($listing['Listing']['no_of_views']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Short Desc'); ?></th>
		<td>
			<?php echo h($listing['Listing']['short_desc']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Status'); ?></th>
		<td>
			<?php echo h($listing['Listing']['status']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Comment Count'); ?></th>
		<td>
			<?php echo h($listing['Listing']['comment_count']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Comment Status'); ?></th>
		<td>
			<?php echo h($listing['Listing']['comment_status']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Created On'); ?></th>
		<td>
			<?php echo h($listing['Listing']['created_on']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Created By'); ?></th>
		<td>
			<?php echo h($listing['Listing']['created_by']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Last Modified On'); ?></th>
		<td>
			<?php echo h($listing['Listing']['last_modified_on']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Last Modified By'); ?></th>
		<td>
			<?php echo h($listing['Listing']['last_modified_by']); ?>
			&nbsp;
		</td>
</tr>
		</tbody>
	    </table>
        </div>


            </div> <!-- /end of panel -->
</div>
