<div style="margin-bottom: 35px">
	<div>
		<?= $this->Html->image($video->full_photo_portrait_md, [
			'class' => 'img-responsive',
			'url' => $video->url_full
		]) ?>
	</div>
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
    <ul class="social-network social-circle">
        <li>
        	<a href="#" class="icoFacebook" title="Compartilhar com Facebook">
        		<i class="fa fa-facebook"></i>
        	</a>
        </li>
        <li>
        	<a href="#" class="icoTwitter" title="Compartilhar com Twitter">
        		<i class="fa fa-twitter"></i>
        	</a>
        </li>
    </ul>
</div>