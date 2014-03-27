<div class="col-md-12">


    <div class="panel panel-default <?php echo __('comment'); ?>">
        <div class="panel-heading">
            <h2>                <small><?php echo __('Comment'); ?></small>

                <div class="btn-group pull-right">
                    <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                        Actions <span class="caret"></span>
                    </button>
                    <ul class="dropdown-menu" role="menu">
                        		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-edit"></span>&nbsp&nbsp;Edit Comment'), array('action' => 'edit', $comment['Comment']['comment_id']), array('escape' => false)); ?> </li>
		<li><?php echo $this->Form->postLink(__('<span class="glyphicon glyphicon-remove"></span>&nbsp;&nbsp;Delete Comment'), array('action' => 'delete', $comment['Comment']['comment_id']), array('escape' => false), __('Are you sure you want to delete # %s?', $comment['Comment']['comment_id'])); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp&nbsp;List Comments'), array('action' => 'index'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp&nbsp;New Comment'), array('action' => 'add'), array('escape' => false)); ?> </li>
		<li class="divider"></li>                    </ul>
                </div>

            </h2>
        </div>

        <div class="comments view panel-body">

            <table cellpadding="0" cellspacing="0" class="table table-striped">
		<tbody>
		<tr>
		<th><?php echo __('Comment Id'); ?></th>
		<td>
			<?php echo h($comment['Comment']['comment_id']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Post Id'); ?></th>
		<td>
			<?php echo h($comment['Comment']['post_id']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Post Type'); ?></th>
		<td>
			<?php echo h($comment['Comment']['post_type']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Author Name'); ?></th>
		<td>
			<?php echo h($comment['Comment']['author_name']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Author Email'); ?></th>
		<td>
			<?php echo h($comment['Comment']['author_email']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Author Ip'); ?></th>
		<td>
			<?php echo h($comment['Comment']['author_ip']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Comment Parent'); ?></th>
		<td>
			<?php echo h($comment['Comment']['comment_parent']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Content'); ?></th>
		<td>
			<?php echo h($comment['Comment']['content']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Status'); ?></th>
		<td>
			<?php echo h($comment['Comment']['status']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Created On'); ?></th>
		<td>
			<?php echo h($comment['Comment']['created_on']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('User Id'); ?></th>
		<td>
			<?php echo h($comment['Comment']['user_id']); ?>
			&nbsp;
		</td>
</tr>
		</tbody>
	    </table>
        </div>


            </div> <!-- /end of panel -->
</div>
