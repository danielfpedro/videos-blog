<div class="container">
	<div class="row">
		<div class="col-md-12">
			<h5>Resultado da pesquisa para "<?= h($this->request->query('q')) ?>"</h5>
		</div>
	</div>
	<div class="row">
		<div class="col-md-8">
			<?php foreach ($videos as $key => $video): ?>
				<?= $this->Html->link($video->title, [
					'action' => 'player',
					$video->slug
				]) ?>
			<?php endforeach ?>
		</div>
	</div>
</div>