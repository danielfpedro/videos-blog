<div class="media" style="margin-bottom: 35px;">
	<div class="media-left">
		<?= $this->Html->image($video->full_photo_box_horizontal, [
			'class' => 'media-object',
			'width' => 240,
			'url' => $video->url_full
		]) ?>
	</div>
	<div class="media-body">
		<h4 class="media-heading title-video">
			<?= $this->Html->link($video->title, $video->url_full) ?>
			<small class="text-muted">
				<?= $video->duration->format('i:s') ?>
			</small>
		</h4>
		<p>
			<?= $this->Html->link('<span class="label label-danger">'.$video->category->name.'</label>', $video->category->full_url, [
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
</div><!-- 
<div class="row">
	<div class="col-md-4">
		<?= $this->Html->image($video->full_photo_box_horizontal, [
			'class' => 'img-responsive',
			'url' => $video->url_full
		]) ?>
	</div>
	<div class="col-md-8">
		<h4 style="margin-top: 0;">
			<?= $this->Html->link($video->title, $video->url_full) ?>
			<small class="text-muted">
				<?= $video->duration->format('H:i') ?>
			</small>
		</h4>
		<div>
			<span class="label label-primary">
				Clique Musical
			</span>
		</div>
		<p class="text-muted" style="margin-top: 10px;">
			<?= $this->Text->truncate($video->description, 160) ?>
		</p>
		<div>
			<ul class="list-inline text-muted" style="font-size: 13px">
				<li>Compartilhar:</li>
				<li>
					<a href="" class="" >
						<span class="fa fa-facebook-square"></span> Facebook
					</a>
				</li>
				<li>
					<a href="" class="" >
						<span class="fa fa-twitter-square"></span> Twitter
					</a>
				</li>
			</ul>
		</div>						
	</div>
</div> -->