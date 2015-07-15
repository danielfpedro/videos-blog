<?= $this->assign('title', ' - ' . $video->title) ?>
<style>
	.fb-comments, .fb-comments iframe[style] {width: 100% !important;}
</style>

<script>
	$(function(){
		$('.embed-responsive').click(function(){
			var $this = $(this);
			$this.css('background-image', '');

			var src = $('.embed-responsive-item').data('src');
			console.log(src);
			$('.embed-responsive-item').attr('src', src).show();
		});
	});
</script>

<div style="background-color: black; margin-top: -20px;">
	<div class="container">
		<div class="row">
			<div class="col-md-9">
				<div
					class="embed-responsive embed-responsive-16by9"
					style="background-image: url(../../img/<?= $video->full_photo_portrait_md ?>); background-size: cover; background-position: top center">
					<iframe
						data-src="https://www.youtube.com/embed/<?= $video->youtube_code ?>?autohide=1&showinfo=0&rel=0&modestbranding=1&autoplay=1"
						style="display: none;"
						class="embed-responsive-item"
						src=""
						frameborder="0"
						allowfullscreen>
					</iframe>
				</div>
			</div>
			<div class="col-md-3">
				<div class="row">
					<div class="col-md-12">
						<h4>
							<?= $video->title ?>
						</h4>	
						<p>
							<?= $video->description ?>
						</p>
					</div>
					<div class="col-md-12">
						<button class="btn btn-primary btn-block">
							<span class="fa fa-share-alt"></span> Compartilhar
						</button>
					</div>
				</div>		
			</div>	
		</div>
		<div class="row">
			<div class="col-md-8">

			</div>
		</div>
	</div>
</div>

<div class="container" style="margin-top: 60px;">
	<div class="row">
		<div class="col-md-8">
			<h4>Comentários</h4>
			<hr>
			<div
				class="fb-comments"
				data-href="http://localhost/videos-blog"
				data-width="100%"
				data-numposts="10">
			</div>
		</div>
		<div class="col-md-4">
			<h4>Populares</h4>
			<hr>
			<?php foreach ($relatedVideos as $key => $video): ?>
				<?= $this->Html->link($video->title, [
					'action' => 'player',
					$video->slug
				]) ?>
			<?php endforeach ?>
		</div>
	</div>
</div>