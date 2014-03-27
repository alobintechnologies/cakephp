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
$simple_view = true;
$this->model = ClassRegistry::init($modelClass);
$field_type = $this->model->getColumnTypes();
$id = false;
//debug($this->model->id)
?>
<div class="col-md-12">


    <div class="panel panel-default <?php echo "<?php echo __('{$singularVar}'); ?>"; ?>">
        <div class="panel-heading">
            <h2><?php
                if (empty(${$singularVar}[$modelClass][$this->model->displayField])) {
                    echo __d('View');
                } else {
                    echo ${$singularVar}[$modelClass][$this->model->displayField];
                }
                ?>
                <small><?php echo "<?php echo __('{$singularHumanName}'); ?>"; ?></small>

                <div class="btn-group pull-right">
                    <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                        Actions <span class="caret"></span>
                    </button>
                    <ul class="dropdown-menu" role="menu">
                        <?php
                        echo "\t\t<li><?php echo \$this->Html->link(__('<span class=\"glyphicon glyphicon-edit\"></span>&nbsp&nbsp;Edit " . $singularHumanName ."'), array('action' => 'edit', \${$singularVar}['{$modelClass}']['{$primaryKey}']), array('escape' => false)); ?> </li>\n";
			echo "\t\t<li><?php echo \$this->Form->postLink(__('<span class=\"glyphicon glyphicon-remove\"></span>&nbsp;&nbsp;Delete " . $singularHumanName . "'), array('action' => 'delete', \${$singularVar}['{$modelClass}']['{$primaryKey}']), array('escape' => false), __('Are you sure you want to delete # %s?', \${$singularVar}['{$modelClass}']['{$primaryKey}'])); ?> </li>\n";
			echo "\t\t<li><?php echo \$this->Html->link(__('<span class=\"glyphicon glyphicon-list\"></span>&nbsp&nbsp;List " . $pluralHumanName . "'), array('action' => 'index'), array('escape' => false)); ?> </li>\n";
			echo "\t\t<li><?php echo \$this->Html->link(__('<span class=\"glyphicon glyphicon-plus\"></span>&nbsp&nbsp;New " . $singularHumanName . "'), array('action' => 'add'), array('escape' => false)); ?> </li>\n";
			echo "\t\t<li class=\"divider\"></li>";
			$done = array();
			foreach ($associations as $type => $data) {
				foreach ($data as $alias => $details) {
					if ($details['controller'] != $this->name && !in_array($details['controller'], $done)) {
						echo "\t\t<li><?php echo \$this->Html->link(__('<span class=\"glyphicon glyphicon-list\"></span>&nbsp&nbsp;List " . Inflector::humanize($details['controller']) . "'), array('controller' => '{$details['controller']}', 'action' => 'index'), array('escape' => false)); ?> </li>\n";
						echo "\t\t<li><?php echo \$this->Html->link(__('<span class=\"glyphicon glyphicon-plus\"></span>&nbsp&nbsp;New " . Inflector::humanize(Inflector::underscore($alias)) . "'), array('controller' => '{$details['controller']}', 'action' => 'add'), array('escape' => false)); ?> </li>\n";
						$done[] = $details['controller'];
					}
				}
			}
                        ?>
                    </ul>
                </div>

            </h2>
        </div>

        <div class="<?php echo $pluralVar; ?> view panel-body">

            <table cellpadding="0" cellspacing="0" class="table table-striped">
		<tbody>
		<?php
			foreach ($fields as $field) {
				echo "<tr>\n";
				$isKey = false;
				if (!empty($associations['belongsTo'])) {
					foreach ($associations['belongsTo'] as $alias => $details) {
						if ($field === $details['foreignKey']) {
							$isKey = true;
							echo "\t\t<th><?php echo __('" . Inflector::humanize(Inflector::underscore($alias)) . "'); ?></th>\n";
							echo "\t\t<td>\n\t\t\t<?php echo \$this->Html->link(\${$singularVar}['{$alias}']['{$details['displayField']}'], array('controller' => '{$details['controller']}', 'action' => 'view', \${$singularVar}['{$alias}']['{$details['primaryKey']}'])); ?>\n\t\t\t&nbsp;\n\t\t</td>\n";
							break;
						}
					}
				}
				if ($isKey !== true) {
					echo "\t\t<th><?php echo __('" . Inflector::humanize($field) . "'); ?></th>\n";
					echo "\t\t<td>\n\t\t\t<?php echo h(\${$singularVar}['{$modelClass}']['{$field}']); ?>\n\t\t\t&nbsp;\n\t\t</td>\n";
				}
				echo "</tr>\n";
			}
		?>
		</tbody>
	    </table>
        </div>


        <?php
	if (!empty($associations['hasOne'])) :
		foreach ($associations['hasOne'] as $alias => $details): ?>
		<div class="row related">
			<div class="col-md-12">
				<h3><?php echo "<?php echo __('Related " . Inflector::humanize($details['controller']) . "'); ?>"; ?></h3>
				<table class="table table-striped">
				<tbody>
			<?php echo "<?php if (!empty(\${$singularVar}['{$alias}'])): ?>\n"; ?>
				<tr>
			<?php
					foreach ($details['fields'] as $field) {
						echo "\t\t<th><?php echo __('" . Inflector::humanize($field) . "'); ?></th>\n";
						echo "\t\t<td>\n\t<?php echo \${$singularVar}['{$alias}']['{$field}']; ?>\n&nbsp;</td>\n";
					}
			?>
				</tr>
			<?php echo "<?php endif; ?>\n"; ?>
				</tbody>
				</table>
				<div class="actions">
					<?php echo "<?php echo \$this->Html->link(__('Edit " . Inflector::humanize(Inflector::underscore($alias)) . "'), array('controller' => '{$details['controller']}', 'action' => 'edit', \${$singularVar}['{$alias}']['{$details['primaryKey']}']), array('escape' => false, 'class' => 'btn btn-default')); ?>\n"; ?>
				</div>
			</div><!-- end col md 12 -->
		</div>
		<?php
		endforeach;
	endif;
	if (empty($associations['hasMany'])) {
		$associations['hasMany'] = array();
	}
	if (empty($associations['hasAndBelongsToMany'])) {
		$associations['hasAndBelongsToMany'] = array();
	}
	$relations = array_merge($associations['hasMany'], $associations['hasAndBelongsToMany']);
	foreach ($relations as $alias => $details):
		$otherSingularVar = Inflector::variable($alias);
		$otherPluralHumanName = Inflector::humanize($details['controller']);
		?>
	<div class="related row">
		<div class="col-md-12">
		<h3><?php echo "<?php echo __('Related " . $otherPluralHumanName . "'); ?>"; ?></h3>
		<?php echo "<?php if (!empty(\${$singularVar}['{$alias}'])): ?>\n"; ?>
		<table cellpadding = "0" cellspacing = "0" class="table table-striped">
		<thead>
		<tr>
	<?php
				foreach ($details['fields'] as $field) {
					echo "\t\t<th><?php echo __('" . Inflector::humanize($field) . "'); ?></th>\n";
				}
	?>
			<th class="actions"></th>
		</tr>
		<thead>
		<tbody>
	<?php
	echo "\t<?php foreach (\${$singularVar}['{$alias}'] as \${$otherSingularVar}): ?>\n";
			echo "\t\t<tr>\n";
				foreach ($details['fields'] as $field) {
					echo "\t\t\t<td><?php echo \${$otherSingularVar}['{$field}']; ?></td>\n";
				}

				echo "\t\t\t<td class=\"actions\">\n";
				echo "\t\t\t\t<?php echo \$this->Html->link(__('<span class=\"glyphicon glyphicon-search\"></span>'), array('controller' => '{$details['controller']}', 'action' => 'view', \${$otherSingularVar}['{$details['primaryKey']}']), array('escape' => false)); ?>\n";
				echo "\t\t\t\t<?php echo \$this->Html->link(__('<span class=\"glyphicon glyphicon-edit\"></span>'), array('controller' => '{$details['controller']}', 'action' => 'edit', \${$otherSingularVar}['{$details['primaryKey']}']), array('escape' => false)); ?>\n";
				echo "\t\t\t\t<?php echo \$this->Form->postLink(__('<span class=\"glyphicon glyphicon-remove\"></span>'), array('controller' => '{$details['controller']}', 'action' => 'delete', \${$otherSingularVar}['{$details['primaryKey']}']), array('escape' => false), __('Are you sure you want to delete # %s?', \${$otherSingularVar}['{$details['primaryKey']}'])); ?>\n";
				echo "\t\t\t</td>\n";
			echo "\t\t</tr>\n";

	echo "\t<?php endforeach; ?>\n";
	?>
		</tbody>
		</table>
	<?php echo "<?php endif; ?>\n\n"; ?>
		<div class="actions">
			<?php echo "<?php echo \$this->Html->link(__('<span class=\"glyphicon glyphicon-plus\"></span>&nbsp;&nbsp;New " . Inflector::humanize(Inflector::underscore($alias)) . "'), array('controller' => '{$details['controller']}', 'action' => 'add'), array('escape' => false, 'class' => 'btn btn-default')); ?>"; ?> 
		</div>
		</div><!-- end col md 12 -->
	</div>
	<?php endforeach; ?>
    </div> <!-- /end of panel -->
</div>
