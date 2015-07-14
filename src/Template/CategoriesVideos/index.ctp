<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('New Categories Video'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Categories'), ['controller' => 'Categories', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Category'), ['controller' => 'Categories', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Videos'), ['controller' => 'Videos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Video'), ['controller' => 'Videos', 'action' => 'add']) ?></li>
    </ul>
</div>
<div class="categoriesVideos index large-10 medium-9 columns">
    <table cellpadding="0" cellspacing="0">
    <thead>
        <tr>
            <th><?= $this->Paginator->sort('id') ?></th>
            <th><?= $this->Paginator->sort('category_id') ?></th>
            <th><?= $this->Paginator->sort('video_id') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
    </thead>
    <tbody>
    <?php foreach ($categoriesVideos as $categoriesVideo): ?>
        <tr>
            <td><?= $this->Number->format($categoriesVideo->id) ?></td>
            <td>
                <?= $categoriesVideo->has('category') ? $this->Html->link($categoriesVideo->category->name, ['controller' => 'Categories', 'action' => 'view', $categoriesVideo->category->id]) : '' ?>
            </td>
            <td>
                <?= $categoriesVideo->has('video') ? $this->Html->link($categoriesVideo->video->name, ['controller' => 'Videos', 'action' => 'view', $categoriesVideo->video->id]) : '' ?>
            </td>
            <td class="actions">
                <?= $this->Html->link(__('View'), ['action' => 'view', $categoriesVideo->category_id]) ?>
                <?= $this->Html->link(__('Edit'), ['action' => 'edit', $categoriesVideo->category_id]) ?>
                <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $categoriesVideo->category_id], ['confirm' => __('Are you sure you want to delete # {0}?', $categoriesVideo->category_id)]) ?>
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
