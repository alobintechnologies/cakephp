<div class="row">
	<div class="col-md-4">
		 <div style="height:280px" >
			 <h2>"Photography helps people to see",</h2>
			 <h4 class="theme-color">Berenice Abbott</h4>
			 <h6> Photographer, 1898-1991</h6>
		</div>
		<div class="info-sm-bar pxp-bg-color theme-wt-color">What our clients say</div>
	</div>
	<div class="col-md-8 "> 
		<div class="border_box">
			<div class="box_skitter box_skitter_large">
				<ul>
					<li><?php echo $this->Html->link($this->Html->image('hp.jpg'), array('class' => 'cube')); ?><div class="label_text"><p>cube</p></div></li>
					<li><?php echo $this->Html->link($this->Html->image('hp.jpg'), array('class' => 'cube')); ?><div class="label_text"><p>cube</p></div></li>
					<li><?php echo $this->Html->link($this->Html->image('hp.jpg'), array('class' => 'cube')); ?><div class="label_text"><p>cube</p></div></li>
					<li><?php echo $this->Html->link($this->Html->image('hp.jpg'), array('class' => 'cube')); ?><div class="label_text"><p>cube</p></div></li>
				</ul>
			</div>
		</div>
	</div>
</div>
<div class="row">
	<div class="col-md-4">
		<?php echo $this->element('Blocks/home_latest_news'); ?>		
		<?php echo $this->element('Banners/home_left_banner'); ?>
	</div>

	<div class="col-md-4">
		 <?php echo $this->element('Blocks/home_latest_products'); ?>
		 <?php echo $this->element('Blocks/home_latest_videos'); ?>
		 <?php echo $this->element('Blocks/home_latest_events'); ?>
	</div>
	<div class="col-md-4">
		<?php echo $this->element('Blocks/home_services_of_week'); ?>		
		<?php echo $this->element('Banners/home_right_banner'); ?>
	</div>
</div>
<?php echo $this->element('Blocks/sponsors'); ?>