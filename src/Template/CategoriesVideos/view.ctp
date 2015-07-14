<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('Edit Categories Video'), ['action' => 'edit', $categoriesVideo->category_id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Categories Video'), ['action' => 'delete', $categoriesVideo->category_id], ['confirm' => __('Are you sure you want to delete # {0}?', $categoriesVideo->category_id)]) ?> </li>
        <li><?= $this->Html->link(__('List Categories Videos'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Categories Video'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Categories'), ['controller' => 'Categories', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Category'), ['controller' => 'Categories', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Videos'), ['controller' => 'Videos', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Video'), ['controller' => 'Videos', 'action' => 'add']) ?> </li>
    </ul>
</div>
<div class="categoriesVideos view large-10 medium-9 columns">
    <h2><?= h($categoriesVideo->category_id) ?></h2>
    <div class="row">
        <div class="large-5 columns strings">
            <h6 class="subheader"><?= __('Category') ?></h6>
            <p><?= $categoriesVideo->has('category') ? $this->Html->link($categoriesVideo->category->name, ['controller' => 'Categories', 'action' => 'view', $categoriesVideo->category->id]) : '' ?></p>
            <h6 class="subheader"><?= __('Video') ?></h6>
            <p><?= $categoriesVideo->has('video') ? $this->Html->link($categoriesVideo->video->name, ['controller' => 'Videos', 'action' => 'view', $categoriesVideo->video->id]) : '' ?></p>
        </div>
        <div class="large-2 columns numbers end">
            <h6 class="subheader"><?= __('Id') ?></h6>
            <p><?= $this->Number->format($categoriesVideo->id) ?></p>
        </div>
    </div>
</div>
