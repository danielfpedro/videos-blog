<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Artist'), ['action' => 'edit', $artist->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Artist'), ['action' => 'delete', $artist->id], ['confirm' => __('Are you sure you want to delete # {0}?', $artist->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Artists'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Artist'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Videos'), ['controller' => 'Videos', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Video'), ['controller' => 'Videos', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="artists view large-9 medium-8 columns content">
    <h3><?= h($artist->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Name') ?></th>
            <td><?= h($artist->name) ?></td>
        </tr>
        <tr>
            <th><?= __('Photo Dir') ?></th>
            <td><?= h($artist->photo_dir) ?></td>
        </tr>
        <tr>
            <th><?= __('Photo') ?></th>
            <td><?= h($artist->photo) ?></td>
        </tr>
        <tr>
            <th><?= __('Id') ?></th>
            <td><?= $this->Number->format($artist->id) ?></td>
        </tr>
        <tr>
            <th><?= __('Is Active') ?></th>
            <td><?= $this->Number->format($artist->is_active) ?></td>
        </tr>
        <tr>
            <th><?= __('Created') ?></th>
            <td><?= h($artist->created) ?></td>
        </tr>
        <tr>
            <th><?= __('Modified') ?></th>
            <td><?= h($artist->modified) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Videos') ?></h4>
        <?php if (!empty($artist->videos)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th><?= __('Id') ?></th>
                <th><?= __('Title') ?></th>
                <th><?= __('Created') ?></th>
                <th><?= __('Modified') ?></th>
                <th><?= __('Youtube Code') ?></th>
                <th><?= __('Description') ?></th>
                <th><?= __('Duration') ?></th>
                <th><?= __('Tags') ?></th>
                <th><?= __('Photo') ?></th>
                <th><?= __('Photo Dir') ?></th>
                <th><?= __('Slug') ?></th>
                <th><?= __('Category Id') ?></th>
                <th><?= __('Destaque') ?></th>
                <th><?= __('Destaque Order') ?></th>
                <th><?= __('Artist Id') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($artist->videos as $videos): ?>
            <tr>
                <td><?= h($videos->id) ?></td>
                <td><?= h($videos->title) ?></td>
                <td><?= h($videos->created) ?></td>
                <td><?= h($videos->modified) ?></td>
                <td><?= h($videos->youtube_code) ?></td>
                <td><?= h($videos->description) ?></td>
                <td><?= h($videos->duration) ?></td>
                <td><?= h($videos->tags) ?></td>
                <td><?= h($videos->photo) ?></td>
                <td><?= h($videos->photo_dir) ?></td>
                <td><?= h($videos->slug) ?></td>
                <td><?= h($videos->category_id) ?></td>
                <td><?= h($videos->destaque) ?></td>
                <td><?= h($videos->destaque_order) ?></td>
                <td><?= h($videos->artist_id) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Videos', 'action' => 'view', $videos->id]) ?>

                    <?= $this->Html->link(__('Edit'), ['controller' => 'Videos', 'action' => 'edit', $videos->id]) ?>

                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Videos', 'action' => 'delete', $videos->id], ['confirm' => __('Are you sure you want to delete # {0}?', $videos->id)]) ?>

                </td>
            </tr>
            <?php endforeach; ?>
        </table>
    <?php endif; ?>
    </div>
</div>
