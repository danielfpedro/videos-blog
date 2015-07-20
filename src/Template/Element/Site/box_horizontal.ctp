<div class="row">
	<?php foreach ($videos as $video): ?>
		<div class="col-md-12">
			<div class="media" style="margin-bottom: 35px;">
				<div class="media-left">
					<?= $this->Html->image($video->full_photo_box_horizontal, [
						'class' => 'media-object',
						'width' => 240,
						'url' => $video->player_url
					]) ?>
				</div>
				<div class="media-body">
					<h4 class="media-heading title-video">
						<?= $this->Html->link($video->title, $video->player_url) ?>
						<small class="text-muted">
							<?= ($video->duration->format('h') == '12') ? $video->duration->format('i:s') : $video->duration->format('h:i:s') ?>
						</small>
					</h4>
					<p>
						<?= $this->Html->link('<span class="label label-default">'.$video->category->name.'</label>', $video->category->full_url, [
								'class' => 'link-categories',
								'escape' => false
							])
						?>
					</p>
					<p class="text-muted hidden-xs">
						<?= $this->Text->truncate($video->description, 160) ?>
					</p>
					<?= $this->element('Site/social_share') ?>
				</div>
			</div>
		</div>
	<?php endforeach ?>
</div>