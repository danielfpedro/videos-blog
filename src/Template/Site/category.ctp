<div class="container">
	<div class="row">
		<div class="col-md-9">
			<h3 class="title-section margin-top-sm"><?= $category->name ?></h3>
			<?php foreach ($videos as $key => $video): ?>
				<?= $this->element('Site/box_horizontal', ['video' => $video]) ?>
			<?php endforeach ?>
		</div>
		<div class="col-md-3">
			<img src="http://placehold.it/400x200" width="100%">
			<img src="http://placehold.it/400x200" width="100%" style="margin-top: 40px;">
			<img src="http://placehold.it/400x200" width="100%">
		</div>
	</div>

</div>