<div class="row">
	<?php foreach ($videos as $video): ?>
		<div class="col-md-12">
			<div style="margin-bottom: 35px">
				<?= $this->Html->image($video->full_photo_portrait_md, [
					'class' => '',
					'width' => '100%',
					'url' => $video->player_url
				]) ?>
				<h4 class="title-video">
					<?= $this->Html->link($video->title, $video->player_url) ?>
					<small class="text-muted">
						<?= ($video->duration->format('h') == 12) ? $video->duration->format('i:s') : $video->duration->format('h:i:s') ?>
					</small>
				</h4>
				<p>
					<?= $this->Html->link('<span class="label label-default">'.$video->category->name.'</label>', $video->category->full_url, [
							'class' => 'link-categories',
							'escape' => false
						])
					?>
				</p>
				<?= $this->element('Site/social_share') ?>
			</div>
		</div>
	<?php endforeach ?>
</div>