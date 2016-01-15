<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit User'), ['action' => 'edit', $user->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete User'), ['action' => 'delete', $user->id], ['confirm' => __('Are you sure you want to delete # {0}?', $user->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Users'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Playlists'), ['controller' => 'Playlists', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Playlist'), ['controller' => 'Playlists', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="users view large-9 medium-8 columns content">
    <h3><?= h($user->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Name') ?></th>
            <td><?= h($user->name) ?></td>
        </tr>
        <tr>
            <th><?= __('Provider') ?></th>
            <td><?= h($user->provider) ?></td>
        </tr>
        <tr>
            <th><?= __('Username') ?></th>
            <td><?= h($user->username) ?></td>
        </tr>
        <tr>
            <th><?= __('Password') ?></th>
            <td><?= h($user->password) ?></td>
        </tr>
        <tr>
            <th><?= __('Gender') ?></th>
            <td><?= h($user->gender) ?></td>
        </tr>
        <tr>
            <th><?= __('Id') ?></th>
            <td><?= $this->Number->format($user->id) ?></td>
        </tr>
        <tr>
            <th><?= __('Created') ?></th>
            <td><?= h($user->created) ?></td>
        </tr>
        <tr>
            <th><?= __('Midified') ?></th>
            <td><?= h($user->midified) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Playlists') ?></h4>
        <?php if (!empty($user->playlists)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th><?= __('Id') ?></th>
                <th><?= __('Name') ?></th>
                <th><?= __('Created') ?></th>
                <th><?= __('Modified') ?></th>
                <th><?= __('User Id') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($user->playlists as $playlists): ?>
            <tr>
                <td><?= h($playlists->id) ?></td>
                <td><?= h($playlists->name) ?></td>
                <td><?= h($playlists->created) ?></td>
                <td><?= h($playlists->modified) ?></td>
                <td><?= h($playlists->user_id) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Playlists', 'action' => 'view', $playlists->id]) ?>

                    <?= $this->Html->link(__('Edit'), ['controller' => 'Playlists', 'action' => 'edit', $playlists->id]) ?>

                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Playlists', 'action' => 'delete', $playlists->id], ['confirm' => __('Are you sure you want to delete # {0}?', $playlists->id)]) ?>

                </td>
            </tr>
            <?php endforeach; ?>
        </table>
    <?php endif; ?>
    </div>
</div>
