<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Playlist'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Videos'), ['controller' => 'Videos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Video'), ['controller' => 'Videos', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="playlists index large-9 medium-8 columns content">
    <h3><?= __('Playlists') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th><?= $this->Paginator->sort('id') ?></th>
                <th><?= $this->Paginator->sort('name') ?></th>
                <th><?= $this->Paginator->sort('created') ?></th>
                <th><?= $this->Paginator->sort('modified') ?></th>
                <th><?= $this->Paginator->sort('user_id') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($playlists as $playlist): ?>
            <tr>
                <td><?= $this->Number->format($playlist->id) ?></td>
                <td><?= h($playlist->name) ?></td>
                <td><?= h($playlist->created) ?></td>
                <td><?= h($playlist->modified) ?></td>
                <td><?= $playlist->has('user') ? $this->Html->link($playlist->user->name, ['controller' => 'Users', 'action' => 'view', $playlist->user->id]) : '' ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $playlist->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $playlist->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $playlist->id], ['confirm' => __('Are you sure you want to delete # {0}?', $playlist->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
        </ul>
        <p><?= $this->Paginator->counter() ?></p>
    </div>
</div>
