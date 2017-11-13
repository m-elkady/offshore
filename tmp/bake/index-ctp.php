<?php
/**
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @since         0.1.0
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */
?>
<CakePHPBakeOpenTagphp
/**
 * @var \<?= $namespace ?>\View\AppView $this
 * @var \<?= $entityClass ?>[]|\Cake\Collection\CollectionInterface $<?= $pluralVar ?>

 */
CakePHPBakeCloseTag>
<?php
use Cake\Utility\Inflector;

$fields = collection($fields)
    ->filter(function($field) use ($schema) {
        return !in_array($schema->columnType($field), ['binary', 'text']);
    });

if (isset($modelObject) && $modelObject->behaviors()->has('Tree')) {
    $fields = $fields->reject(function ($field) {
        return $field === 'lft' || $field === 'rght';
    });
}

if (!empty($indexColumns)) {
    $fields = $fields->take($indexColumns);
}

?>

<div class="row">
    <div class="col-md-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title"><CakePHPBakeOpenTag= __('<?= $pluralHumanName ?>') CakePHPBakeCloseTag></h3>
            </div>
            <div class="panel-body">
                <form action="<CakePHPBakeOpenTagphp echo $this->Url->build(array("action" => "do-operation")) CakePHPBakeCloseTag>" method="post">
                <!--Table Wrapper Start-->
                <div class="table-responsive ls-table">
                    <table class="table table-bordered table-striped">
                        <thead>
                        <tr>
<?php foreach ($fields as $field):
                            if($field=='id'){
                            ?>
                            <th><input type="checkbox" id="checkall" /></th>
                            <?php
                            }else{ ?>
                <th scope="col"><CakePHPBakeOpenTag= $this->Paginator->sort('<?= $field ?>') CakePHPBakeCloseTag></th>
                            <?php } ?>
<?php endforeach; ?>
                <th scope="col" class="actions"><CakePHPBakeOpenTag= __('Actions') CakePHPBakeCloseTag></th>
            </tr>
        </thead>
        <tbody>
            <CakePHPBakeOpenTagphp foreach ($<?= $pluralVar ?> as $<?= $singularVar ?>): CakePHPBakeCloseTag>
            <tr>
<?php        foreach ($fields as $field) {
                if($field =='id'){?>
                <td> <input  type="checkbox" name="chk[]" value="<CakePHPBakeOpenTagphp echo $<?= $singularVar.'->id' ?> CakePHPBakeCloseTag>" /> </td>
                <?php
                }else{

            $isKey = false;
            if (!empty($associations['BelongsTo'])) {
                foreach ($associations['BelongsTo'] as $alias => $details) {
                    if ($field === $details['foreignKey']) {
                        $isKey = true;
?>
                <td><CakePHPBakeOpenTag= $<?= $singularVar ?>->has('<?= $details['property'] ?>') ? $this->Html->link($<?= $singularVar ?>-><?= $details['property'] ?>-><?= $details['displayField'] ?>, ['controller' => '<?= $details['controller'] ?>', 'action' => 'view', $<?= $singularVar ?>-><?= $details['property'] ?>-><?= $details['primaryKey'][0] ?>]) : '' CakePHPBakeCloseTag></td>
<?php
                        break;
                    }
                }
            }
            if ($isKey !== true) {
                if (!in_array($schema->columnType($field), ['integer', 'float', 'decimal', 'biginteger', 'smallinteger', 'tinyinteger'])) {
?>
                <td><CakePHPBakeOpenTag= h($<?= $singularVar ?>-><?= $field ?>) CakePHPBakeCloseTag></td>
<?php
                } else {
?>
                <td><CakePHPBakeOpenTag= $this->Number->format($<?= $singularVar ?>-><?= $field ?>) CakePHPBakeCloseTag></td>
<?php
                }
            }
        }
    }

        $pk = '$' . $singularVar . '->' . $primaryKey[0];
?>
                <td class="actions">

                    <CakePHPBakeOpenTag= $this->Html->link('<i class="fa fa-pencil"></i> ' .__('Edit'), ['action' => 'edit', <?= $pk ?>], ['class' => 'btn btn-primary', 'escape' => false]) CakePHPBakeCloseTag>
                    <CakePHPBakeOpenTag= $this->Form->postLink('<i class="fa fa-trash-o"></i> ' .__('Delete'), ['action' => 'delete', <?= $pk ?>], ['class' => 'btn btn-danger', 'escape' => false, 'confirm' => __('Are you sure you want to delete # {0}?', <?= $pk ?>)]) CakePHPBakeCloseTag>
                </td>
            </tr>
            <CakePHPBakeOpenTagphp endforeach; CakePHPBakeCloseTag>
        </tbody>
    </table>
                    <div class="row">
                        <div class="col-md-3">
                            <select class="form-control" id="acts" name="operation">
                                <option value=""><CakePHPBakeOpenTagphp echo __("Choose Operation") CakePHPBakeCloseTag></option>
                                <option value="delete"><CakePHPBakeOpenTagphp echo __("Delete") CakePHPBakeCloseTag></option>
                            </select>
                        </div>
                        <div class="col-md-9 text-right">
                            <ul class="pagination ls-pagination">
                                <CakePHPBakeOpenTagphp
                                if ($this->Paginator->hasPrev()) {
                                echo $this->Paginator->prev('< ' . __('previous'));
                                }
                                echo $this->Paginator->numbers();
                                if ($this->Paginator->hasNext()) {
                                echo $this->Paginator->next(__('next') . ' >');
                                }
                                CakePHPBakeCloseTag>
                            </ul>
                        </div>
                    </div>
                </div>
              </form>
            </div>
        </div>
    </div>
</div>
