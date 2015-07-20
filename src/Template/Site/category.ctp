<?= $this->assign('title', $category->name . ' - ' . $appName) ?>

<div class="container">
	<div class="row">
		<div class="col-md-9">
			<h3 class="title-section margin-top-sm">
				<?= $category->name ?>
			</h3>
			<?php foreach ($videos as $video): ?>
				<?= $this->element('Site/box_horizontal', ['video' => $video]) ?>
			<?php endforeach ?>

			<div class="row">
				<div class="col-md-12">
					<ul class="pagination">
						<?= $this->Paginator->numbers() ?>
					</ul>
				</div>
			</div>

		</div>
		<div class="col-md-3">
			<div class="row">
				<div class="col-md-12">
					<img src="http://placehold.it/500x400" width="100%">
				</div>
			</div>
			<h3 class="title-section margin-top-sm">
				Populares
			</h3>
			<?= $this->cell('Populars') ?>
		</div>
	</div>

</div>