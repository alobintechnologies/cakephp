<!DOCTYPE html>
<html>

<head>
    <?php echo $this->Html->charset(); ?>    
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title><?php echo $title_for_layout; ?></title>

    <!-- Core CSS - Include with every page -->
    <?php echo $this->Html->css('plugins/bootstrap/bootstrap.min'); ?>
    <?php echo $this->Html->css('plugins/font-awesome/font-awesome.min'); ?>

    <!-- Page-Level Plugin CSS - Dashboard -->
    <?php echo $this->Html->css('plugins/morris/morris-0.4.3.min'); ?>
    <?php echo $this->Html->css('plugins/timeline/timeline.css'); ?>

    <!-- SB Admin CSS - Include with every page -->
    <?php echo $this->Html->css('sb-admin.css'); ?>

</head>
<body>
	<div id="wrapper">