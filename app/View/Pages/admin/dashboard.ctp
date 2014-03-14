<div class="row">
	<div class="col-lg-12">
	    <h1 class="page-header"><i class="fa fa-dashboard fa-fw"></i> Dashboard</h1>
	</div>
<!-- /.col-lg-12 -->
</div>
<!-- /.row -->
<div class="row">
	<div class="col-lg-12">	
	    <!-- /.panel -->
	    <div class="panel panel-default">
		<div class="panel-heading">
		    <i class="fa fa-list fa-fw"></i> Latest Listings
		    <div class="pull-right">
			<div class="btn-group">
			    <button type="button" class="btn btn-default btn-xs dropdown-toggle" data-toggle="dropdown">
				Actions
				<span class="caret"></span>
			    </button>
			    <ul class="dropdown-menu pull-right" role="menu">
				<li><a href="#">Action</a>
				</li>
				<li><a href="#">Another action</a>
				</li>
				<li><a href="#">Something else here</a>
				</li>
				<li class="divider"></li>
				<li><a href="#">Separated link</a>
				</li>
			    </ul>
			</div>
		    </div>
		</div>
		<!-- /.panel-heading -->
		<div class="panel-body">
		    <div class="table-responsive">
			<table class="table table-bordered table-hover table-striped">
			    <thead>
				<tr>
				    <th>Listing Title</th>
				    <th>Type</th>
				    <th>Username</th>
				    <th>User Firstname</th>
				    <th>User Lastname</th>
				    <th>Contact No</th>
				    <th>Start Date</th>
				    <th>End Date</th>
				</tr>
			    </thead>
			    <tbody>
				<tr>
				    <td>3326</td>
				    <td>10/21/2013</td>
				    <td>3:29 PM</td>
				    <td>$321.33</td>
				    <td>$321.33</td>
				    <td>$321.33</td>
				    <td>$321.33</td>
				    <td>$321.33</td>
				</tr>
				<tr>
				    <td>3326</td>
				    <td>10/21/2013</td>
				    <td>3:29 PM</td>
				    <td>$321.33</td>
				    <td>$321.33</td>
				    <td>$321.33</td>
				    <td>$321.33</td>
				    <td>$321.33</td>
				</tr>
				<tr>
				    <td>3326</td>
				    <td>10/21/2013</td>
				    <td>3:29 PM</td>
				    <td>$321.33</td>
				    <td>$321.33</td>
				    <td>$321.33</td>
				    <td>$321.33</td>
				    <td>$321.33</td>
				</tr>
				<tr>
				    <td>3326</td>
				    <td>10/21/2013</td>
				    <td>3:29 PM</td>
				    <td>$321.33</td>
				    <td>$321.33</td>
				    <td>$321.33</td>
				    <td>$321.33</td>
				    <td>$321.33</td>
				</tr>
			    </tbody>
			</table>
		    </div>
		    <!-- /.table-responsive -->
		    <?php echo $this->Form->create('User', array(
'class' => 'form-horizontal', 
'role' => 'form',
'inputDefaults' => array(
    'format' => array('before', 'label', 'between', 'input', 'error', 'after'),
    'div' => array('class' => 'form-group'),
    'class' => array('form-control'),
    'label' => array('class' => 'col-lg-2 control-label'),
    'between' => '<div class="col-lg-3">',
    'after' => '</div>',
    'error' => array('attributes' => array('wrap' => 'span', 'class' => 'help-inline')),
))); ?>
<fieldset>
    <legend><?php echo __('Username and password'); ?></legend>
    <?php echo $this->Form->input('username'); ?>
    <?php echo $this->Form->input('password'); ?>
</fieldset>
<?php echo $this->Form->end(__('Login')); ?>
		</div>
		<!-- /.panel-body -->
	    </div>
	</div>
</div>