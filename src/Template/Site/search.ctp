<div class="container">
	<div class="row">
		<div class="col-md-8">
			<h4 class="title-section">
				Resultado da busca para "<?= h($this->request->query('q')) ?>"
			</h4>
			<?php foreach ($videos as $key => $video): ?>
				<?= $this->element('Site/box_horizontal', ['video' => $video]) ?>
			<?php endforeach ?>
		</div>
	</div>

</div>