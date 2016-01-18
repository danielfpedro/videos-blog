<div class="container">
    <div class="row">
        <div class="col-md-12">
            <?php foreach ($playlists as $playlist): ?>
                <li>
                    <?= $this->Html->link($playlist->name, ['controller' => 'Site', 'action' => 'player', '?' => ['playlist' => $playlist->id], 'krazy']) ?>
                </li>
            <?php endforeach ?>
        </div>
    </div>
</div>