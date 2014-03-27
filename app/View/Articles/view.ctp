<div class="col-md-12">


    <div class="panel panel-default <?php echo __('article'); ?>">
        <div class="panel-heading">
            <h2>                <small><?php echo __('Article'); ?></small>

                <div class="btn-group pull-right">
                    <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                        Actions <span class="caret"></span>
                    </button>
                    <ul class="dropdown-menu" role="menu">
                        		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-edit"></span>&nbsp&nbsp;Edit Article'), array('action' => 'edit', $article['Article']['article_id']), array('escape' => false)); ?> </li>
		<li><?php echo $this->Form->postLink(__('<span class="glyphicon glyphicon-remove"></span>&nbsp;&nbsp;Delete Article'), array('action' => 'delete', $article['Article']['article_id']), array('escape' => false), __('Are you sure you want to delete # %s?', $article['Article']['article_id'])); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp&nbsp;List Articles'), array('action' => 'index'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp&nbsp;New Article'), array('action' => 'add'), array('escape' => false)); ?> </li>
		<li class="divider"></li>                    </ul>
                </div>

            </h2>
        </div>

        <div class="articles view panel-body">

            <table cellpadding="0" cellspacing="0" class="table table-striped">
		<tbody>
		<tr>
		<th><?php echo __('Article Id'); ?></th>
		<td>
			<?php echo h($article['Article']['article_id']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Title'); ?></th>
		<td>
			<?php echo h($article['Article']['title']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Categories'); ?></th>
		<td>
			<?php echo h($article['Article']['categories']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Meta Description'); ?></th>
		<td>
			<?php echo h($article['Article']['meta_description']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Display From'); ?></th>
		<td>
			<?php echo h($article['Article']['display_from']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Short Desc'); ?></th>
		<td>
			<?php echo h($article['Article']['short_desc']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Content'); ?></th>
		<td>
			<?php echo h($article['Article']['content']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Contact'); ?></th>
		<td>
			<?php echo h($article['Article']['contact']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Email Address'); ?></th>
		<td>
			<?php echo h($article['Article']['email_address']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Website'); ?></th>
		<td>
			<?php echo h($article['Article']['website']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Featured Image'); ?></th>
		<td>
			<?php echo h($article['Article']['featured_image']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Featured Image Title'); ?></th>
		<td>
			<?php echo h($article['Article']['featured_image_title']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Sponsor'); ?></th>
		<td>
			<?php echo h($article['Article']['sponsor']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Video Script'); ?></th>
		<td>
			<?php echo h($article['Article']['video_script']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Status'); ?></th>
		<td>
			<?php echo h($article['Article']['status']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Created On'); ?></th>
		<td>
			<?php echo h($article['Article']['created_on']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Created By'); ?></th>
		<td>
			<?php echo h($article['Article']['created_by']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Last Modified On'); ?></th>
		<td>
			<?php echo h($article['Article']['last_modified_on']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Last Modified By'); ?></th>
		<td>
			<?php echo h($article['Article']['last_modified_by']); ?>
			&nbsp;
		</td>
</tr>
		</tbody>
	    </table>
        </div>


            </div> <!-- /end of panel -->
</div>
