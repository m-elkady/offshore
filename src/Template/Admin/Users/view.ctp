<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit User'), ['action' => 'edit', $uuser->id]) ?> </li>
        <li><?= $this->Html->link(__('Delete User'), ['action' => 'delete', $uuser->id], ['confirm' => __('Are you sure you want to delete # {0}?', $uuser->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Users'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="users view large-9 medium-8 columns content">
    <h3><?= h($uuser->username) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Username') ?></th>
            <td><?= h($uuser->username) ?></td>
        </tr>
        <tr>
            <th><?= __('Password') ?></th>
            <td><?= h($uuser->password) ?></td>
        </tr>
        <tr>
            <th><?= __('Role') ?></th>
            <td><?= h($uuser->role) ?></td>
        </tr>
        <tr>
            <th><?= __('Id') ?></th>
            <td><?= $this->Number->format($uuser->id) ?></td>
        </tr>
        <tr>
            <th><?= __('Created') ?></th>
            <td><?= h($uuser->created) ?></td>
        </tr>
        <tr>
            <th><?= __('Updated') ?></th>
            <td><?= h($uuser->updated) ?></td>
        </tr>
    </table>
</div>
