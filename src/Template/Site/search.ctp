<div class="container">
	<div class="row">
		<div class="col-md-8">
			<h3 class="title-section margin-top-sm">
				Resultado da busca para "<?= h($this->request->query('q')) ?>"
			</h3>
			<?php foreach ($videos as $key => $video): ?>
				<?= $this->element('Site/box_horizontal', ['video' => $video]) ?>
			<?php endforeach ?>
		</div>
	</div>

</div>