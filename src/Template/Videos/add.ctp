<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('List Videos'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Categories'), ['controller' => 'Categories', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Category'), ['controller' => 'Categories', 'action' => 'add']) ?></li>
    </ul>
</div>
<div class="videos form large-10 medium-9 columns">
    <?= $this->Form->create($video, ['type' => 'file']) ?>
    <fieldset>
        <legend><?= __('Add Video') ?></legend>
        <?php
            echo $this->Form->input('title');
            echo $this->Form->input('youtube_code');
            echo $this->Form->input('description');
            echo $this->Form->input('duration', ['second' => null]);
            echo $this->Form->input('tags');
            echo $this->Form->input('photo', ['type' => 'file']);
            echo $this->Form->input('category_id', ['options' => $categories]);
            echo $this->Form->input('destaque');
            echo $this->Form->input('destaque_order');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
