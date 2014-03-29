<h2 class="theme-color-bold">Latest News</h2>
<?php echo $this->Html->image('news.jpg') ?>
<div class="well">
	<p class="list-group-item-text theme-color-bold box-container "> 
		Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, 
	</p>
	<?php echo $this->Html->link('Read more &raquo;', array('controller' => 'articles', 'action' => 'view', 1), array('class' => 'read-more', 'escape' => false)); ?>
</div>
<div class="list-group  ">
	<a href="#" class="list-group-item">
		 <p class="list-group-item-text theme-color-bold "> Lorem Ipsum is simply dummy text of the printing and typesetting industry. </p>
	</a>
	<a href="#" class="list-group-item">
		 <p class="list-group-item-text theme-color-bold"> Lorem Ipsum is simply dummy text of the printing </p>
	</a>
	<a href="#" class="list-group-item">
		 <p class="list-group-item-text theme-color-bold"> Lorem Ipsum is simply dummy text of the printing </p>
	</a>
	 <a href="#" class="list-group-item">
		 <span class="search"> Click here for more new stories </span> 
	 </a>
</div> <!-- /end of list-group -->