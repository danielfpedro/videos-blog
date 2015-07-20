<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('Edit Video'), ['action' => 'edit', $video->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Video'), ['action' => 'delete', $video->id], ['confirm' => __('Are you sure you want to delete # {0}?', $video->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Videos'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Video'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Categories'), ['controller' => 'Categories', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Category'), ['controller' => 'Categories', 'action' => 'add']) ?> </li>
    </ul>
</div>
<div class="videos view large-10 medium-9 columns">
    <h2><?= h($video->name) ?></h2>
    <div class="row">
        <div class="large-5 columns strings">
            <h6 class="subheader"><?= __('Title') ?></h6>
            <p><?= h($video->title) ?></p>
            <h6 class="subheader"><?= __('Youtube Code') ?></h6>
            <p><?= h($video->youtube_code) ?></p>
            <h6 class="subheader"><?= __('Description') ?></h6>
            <p><?= h($video->description) ?></p>
            <h6 class="subheader"><?= __('Tags') ?></h6>
            <p><?= h($video->tags) ?></p>
            <h6 class="subheader"><?= __('Photo') ?></h6>
            <p><?= h($video->photo) ?></p>
            <h6 class="subheader"><?= __('Photo Dir') ?></h6>
            <p><?= h($video->photo_dir) ?></p>
            <h6 class="subheader"><?= __('Slug') ?></h6>
            <p><?= h($video->slug) ?></p>
            <h6 class="subheader"><?= __('Category') ?></h6>
            <p><?= $video->has('category') ? $this->Html->link($video->category->name, ['controller' => 'Categories', 'action' => 'view', $video->category->id]) : '' ?></p>
        </div>
        <div class="large-2 columns numbers end">
            <h6 class="subheader"><?= __('Id') ?></h6>
            <p><?= $this->Number->format($video->id) ?></p>
            <h6 class="subheader"><?= __('Destaque') ?></h6>
            <p><?= $this->Number->format($video->destaque) ?></p>
            <h6 class="subheader"><?= __('Destaque Order') ?></h6>
            <p><?= $this->Number->format($video->destaque_order) ?></p>
        </div>
        <div class="large-2 columns dates end">
            <h6 class="subheader"><?= __('Created') ?></h6>
            <p><?= h($video->created) ?></p>
            <h6 class="subheader"><?= __('Modified') ?></h6>
            <p><?= h($video->modified) ?></p>
            <h6 class="subheader"><?= __('Duration') ?></h6>
            <p><?= h($video->duration) ?></p>
        </div>
    </div>
</div>
