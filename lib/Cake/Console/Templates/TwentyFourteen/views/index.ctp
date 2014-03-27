<?php
/**
 * Bootstrap Scaffold for CakePHP
 *
 * @author        Fedotov Victor (xv1t@yandex.ru)
 * @link          https://github.com/xv1t/cakephp-scaffold-bootstrap3
 * @package       Cake.View.Scaffolds
 * @version       0.1.2014-02-24
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */
?>
<?php
$this->model = ClassRegistry::init($modelClass);
$field_type = $this->model->getColumnTypes();

if (!isset($modules)) {
    $modulus = 11;
}
if (!isset($model)) {
   // $models = ClassRegistry::keys();
  //  $model = Inflector::camelize(current($models));
    $model = $modelClass;
}


$simple_view = true;
$table_fields = $scaffoldFields;
if ($simple_view) {
    /*
     * hide
     */
    for ($i = count($table_fields) - 1; $i >= 0; $i--) {
        if (in_array($table_fields[$i], array('id', 'created', 'create_user_id', 'update_user_id', 'updated', 'created_on', 'updated_on', 'updated_by', 'last_modified_on')))
            unset($table_fields[$i]);
    }
}

//debug($scaffoldFields);
?>
<div class="row">
	<div class="col-lg-12">
		<h1 class="page-header"><i class="fa fa-list fa-fw"></i> <?php echo "<?php echo __('{$pluralHumanName}'); ?>"; ?></h1>
	</div>
</div> <!-- /row -->
<div class="row">
	<div class="col-lg-12">
		<div class="panel panel-default">
			<div class="panel-heading">
				<i class="fa fa-list fa-fw"></i> <?php echo "<?php echo __('{$pluralHumanName}'); ?>"; ?>
				<div class="pull-right">
					<div class="btn-group">
					    <button type="button" class="btn btn-default btn-xs dropdown-toggle" data-toggle="dropdown">
						Actions
						<span class="caret"></span>
					    </button>
					    <ul class="dropdown-menu pull-right" role="menu">
						<li>   
						    <?php echo "<?php echo \$this->Html->link(__('<span class=\"glyphicon glyphicon-plus\"></span>&nbsp;&nbsp;New " . $singularHumanName . "'), array('action' => 'add'), array('escape' => false)); ?>"; ?>
						</li>
						<?php
						$done = array();
						foreach ($associations as $_type => $_data) {
						    foreach ($_data as $_alias => $_details) {
							if ($_details['controller'] != $this->name && !in_array($_details['controller'], $done)) {

							    echo '<li class="divider"></li>';
							    echo "\t\t<li><?php echo \$this->Html->link(__('<span class=\"glyphicon glyphicon-list\"></span>&nbsp;&nbsp;List " . Inflector::humanize($details['controller']) . "'), array('controller' => '{$details['controller']}', 'action' => 'index'), array('escape' => false)); ?> </li>\n";
										echo "\t\t<li><?php echo \$this->Html->link(__('<span class=\"glyphicon glyphicon-plus\"></span>&nbsp;&nbsp;New " . Inflector::humanize(Inflector::underscore($alias)) . "'), array('controller' => '{$details['controller']}', 'action' => 'add'), array('escape' => false)); ?> </li>\n";
							    $done[] = $_details['controller'];
							}
						    }
						}
						?>
					    </ul>
					</div> <!-- /btn-group -->
			    </div> <!-- / pull-right -->
			</div> <!-- / panel-heading -->
			<div class="panel-body">			    
				<table cellpadding="0" cellspacing="0" class="table table-striped">
					<thead>
						<tr>
				<?php foreach ($fields as $field): ?>
				<th><?php echo "<?php echo \$this->Paginator->sort('{$field}'); ?>"; ?></th>
				<?php endforeach; ?>
				<th class="actions"></th>
						</tr>
					</thead>
					<tbody>
				<?php
				echo "\t<?php foreach (\${$pluralVar} as \${$singularVar}): ?>\n";
				echo "\t\t\t\t\t<tr>\n";
					foreach ($fields as $field) {
						$isKey = false;
						if (!empty($associations['belongsTo'])) {
							foreach ($associations['belongsTo'] as $alias => $details) {
								if ($field === $details['foreignKey']) {
									$isKey = true;
									echo "\t\t\t\t\t\t\t\t<td>\n\t\t\t<?php echo \$this->Html->link(\${$singularVar}['{$alias}']['{$details['displayField']}'], array('controller' => '{$details['controller']}', 'action' => 'view', \${$singularVar}['{$alias}']['{$details['primaryKey']}'])); ?>\n\t\t</td>\n";
									break;
								}
							}
						}
						if ($isKey !== true) {
							echo "\t\t\t\t\t\t<td><?php echo h(\${$singularVar}['{$modelClass}']['{$field}']); ?>&nbsp;</td>\n";
						}
					}

					echo "\t\t\t\t\t\t<td class=\"actions\">\n";
					echo "\t\t\t\t\t\t\t<?php echo \$this->Html->link('<span class=\"glyphicon glyphicon-search\"></span>', array('action' => 'view', \${$singularVar}['{$modelClass}']['{$primaryKey}']), array('escape' => false)); ?>\n";
					echo "\t\t\t\t\t\t\t<?php echo \$this->Html->link('<span class=\"glyphicon glyphicon-edit\"></span>', array('action' => 'edit', \${$singularVar}['{$modelClass}']['{$primaryKey}']), array('escape' => false)); ?>\n";
					echo "\t\t\t\t\t\t\t<?php echo \$this->Form->postLink('<span class=\"glyphicon glyphicon-remove\"></span>', array('action' => 'delete', \${$singularVar}['{$modelClass}']['{$primaryKey}']), array('escape' => false), __('Are you sure you want to delete # %s?', \${$singularVar}['{$modelClass}']['{$primaryKey}'])); ?>\n";
					echo "\t\t\t\t\t\t</td>\n";
				echo "\t\t\t\t\t</tr>\n";

				echo "\t\t\t\t<?php endforeach; ?>\n";
				?>
					</tbody>
				</table>

				<p>
					<small><?php echo "<?php echo \$this->Paginator->counter(array('format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')));?>"; ?></small>
				</p>

				<?php
					echo "<?php\n";
					echo "\t\t\t\$params = \$this->Paginator->params();\n";
					echo "\t\t\tif (\$params['pageCount'] > 1) {\n";
					echo "\t\t\t?>\n";
				?>
				<ul class="pagination pagination-sm">
				<?php
					echo "\t<?php\n";
					echo "\t\t\t\t\techo \$this->Paginator->prev('&larr; Previous', array('class' => 'prev','tag' => 'li','escape' => false), '<a onclick=\"return false;\">&larr; Previous</a>', array('class' => 'prev disabled','tag' => 'li','escape' => false));\n";
					echo "\t\t\t\t\techo \$this->Paginator->numbers(array('separator' => '','tag' => 'li','currentClass' => 'active','currentTag' => 'a'));\n";
					echo "\t\t\t\t\techo \$this->Paginator->next('Next &rarr;', array('class' => 'next','tag' => 'li','escape' => false), '<a onclick=\"return false;\">Next &rarr;</a>', array('class' => 'next disabled','tag' => 'li','escape' => false));\n";
					echo "\t\t\t\t?>\n";
				?>
				</ul>
				<?php 
					echo "<?php } ?>\n";
				?>
			</div> <!-- panel-body -->
		</div> <!-- / panel -->
	</div> <!-- / col-lg-12 -->
</div> <!-- / row -->