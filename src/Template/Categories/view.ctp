<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('Edit Category'), ['action' => 'edit', $category->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Category'), ['action' => 'delete', $category->id], ['confirm' => __('Are you sure you want to delete # {0}?', $category->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Categories'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Category'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Videos'), ['controller' => 'Videos', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Video'), ['controller' => 'Videos', 'action' => 'add']) ?> </li>
    </ul>
</div>
<div class="categories view large-10 medium-9 columns">
    <h2><?= h($category->name) ?></h2>
    <div class="row">
        <div class="large-5 columns strings">
            <h6 class="subheader"><?= __('Name') ?></h6>
            <p><?= h($category->name) ?></p>
            <h6 class="subheader"><?= __('Slug') ?></h6>
            <p><?= h($category->slug) ?></p>
        </div>
        <div class="large-2 columns numbers end">
            <h6 class="subheader"><?= __('Id') ?></h6>
            <p><?= $this->Number->format($category->id) ?></p>
        </div>
        <div class="large-2 columns dates end">
            <h6 class="subheader"><?= __('Created') ?></h6>
            <p><?= h($category->created) ?></p>
            <h6 class="subheader"><?= __('Modified') ?></h6>
            <p><?= h($category->modified) ?></p>
        </div>
    </div>
</div>
<div class="related row">
    <div class="column large-12">
    <h4 class="subheader"><?= __('Related Videos') ?></h4>
    <?php if (!empty($category->videos)): ?>
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
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
        <?php foreach ($category->videos as $videos): ?>
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
