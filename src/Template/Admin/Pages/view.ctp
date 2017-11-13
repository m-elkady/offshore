<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Page'), ['action' => 'edit', $page->id]) ?> </li>
        <li><?= $this->Html->link(__('Delete Page'), ['action' => 'delete', $page->id], ['confirm' => __('Are you sure you want to delete # {0}?', $page->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Pages'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Page'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="pages view large-9 medium-8 columns content">
    <h3><?= h($page->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Ar Title') ?></th>
            <td><?= h($page->ar_title) ?></td>
        </tr>
        <tr>
            <th><?= __('En Title') ?></th>
            <td><?= h($page->en_title) ?></td>
        </tr>
        <tr>
            <th><?= __('Image') ?></th>
            <td><?= h($page->image) ?></td>
        </tr>
        <tr>
            <th><?= __('Id') ?></th>
            <td><?= $this->Number->format($page->id) ?></td>
        </tr>
        <tr>
            <th><?= __('Add To Mainmenu') ?></th>
            <td><?= $page->add_to_mainmenu ? __('Yes') : __('No'); ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Ar Content') ?></h4>
        <?= $this->Text->autoParagraph(h($page->ar_content)); ?>
    </div>
    <div class="row">
        <h4><?= __('En Content') ?></h4>
        <?= $this->Text->autoParagraph(h($page->en_content)); ?>
    </div>
</div>
