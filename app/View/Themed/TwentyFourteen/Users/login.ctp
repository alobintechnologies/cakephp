<?php $this->Html->css('modules/login')?>
<div class="row" style="margin-top:20px">
    <div class="col-xs-12 col-sm-8 col-md-6 col-sm-offset-2 col-md-offset-3">
	<form role="form">
	    <fieldset>
		<h2>Please Sign In</h2>
		<hr class="colorgraph">
		<div class="form-group">
		     <?php echo $this->Form->input('email_address', array('class' => 'form-control input-lg', 'placeholder' => 'Email Address', 'label' => false));?>
		</div>
		<div class="form-group">		    
		    <?php echo $this->Form->input('email_address', array('class' => 'form-control input-lg', 'placeholder' => 'Password', 'label' => false, 'type' => 'password'));?>
		</div>
		<span class="button-checkbox">
		    <button type="button" class="btn" data-color="info">Remember Me</button>
		    <input type="checkbox" name="remember_me" id="remember_me" checked="checked" class="hidden">
		    <a href="" class="btn btn-link pull-right">Forgot Password?</a>
		</span>
		<hr class="colorgraph">
		<div class="row">
		    <div class="col-xs-6 col-sm-6 col-md-6">
  			<input type="submit" class="btn btn-lg btn-success btn-block" value="Sign In">
		    </div>
		    <div class="col-xs-6 col-sm-6 col-md-6">
			<?php echo $this->Html->link('Register', array('controller' => 'users', 'action' => 'register'), array('class' => 'btn btn-primary btn-block btn-lg')); ?>
		    </div>
		</div> 
	    </fieldset>
	</form>
    </div>
</div>
<?php $this->Html->script('modules/login'); ?>