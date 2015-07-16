<div style="margin-bottom: 35px">
	<?= $this->Html->image($video->full_photo_portrait_md, [
		'class' => '',
		'width' => '100%',
		'url' => $video->url_full
	]) ?>
	<h4 class="title-video">
		<?= $this->Html->link($video->title, $video->url_full) ?>
		<small class="text-muted">
			<?= $video->duration->format('H:i') ?>
		</small>
	</h4>
	<p>
		<?= $this->Html->link('<span class="label label-default">Clique Musical</label>', [
				'action' => 'categories'
			], [
				'class' => 'link-categories',
				'escape' => false
			])
		?>
	</p>
	<?= $this->element('Site/social_share') ?>
</div>