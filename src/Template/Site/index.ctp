
<script>
	$(function(){
		$('div.home-main-overlay').hover(function(){
			$(this).addClass('active');
		}, function(){
			$(this).removeClass('active');
		});
	});
</script>
<div class="container-fluid" style="margin-top: -20px;">
	<div class="row">
		<div
			class="col-md-6 cont-home-main"
			style="height: 350px;background-image: url(<?= $this->Url->build($mainVideo1->full_photo_portrait_lg_from_template) ?>)">
			
			<?= $this->Html->link('<div class="home-main-overlay"></div>', $mainVideo1->url_full, [
				'escape' => false
			]) ?>
			<h2 class="home-main-title text-shadow-dark">
				<?= $mainVideo1->title ?>
			</h2>
		</div>
		<div class="col-md-3 cont-home-main"
			style="height: 350px;background-image: url(<?= $this->Url->build($mainVideo2->full_photo_portrait_lg_from_template) ?>)">

			<?= $this->Html->link('<div class="home-main-overlay"></div>', $mainVideo2->url_full, [
				'escape' => false
			]) ?>
			<div>
				<h2 class="home-main-title text-shadow-dark">
					<?= $mainVideo2->title ?>
				</h2>
			</div>
		</div>
		<div class="col-md-3 cont-home-main"
			style="height: 350px;background-image: url(<?= $this->Url->build($mainVideo3->full_photo_portrait_lg_from_template) ?>)">
			<?= $this->Html->link('<div class="home-main-overlay"></div>', $mainVideo3->url_full, [
				'escape' => false
			]) ?>
			<div>
				<h2 class="home-main-title text-shadow-dark">
					<?= $mainVideo3->title ?>
				</h2>
			</div>
		</div>
	</div>
</div>
<div class="container">
	<div class="row">
		<div class="col-md-12 text-center" style="margin: 40px 0;">
<div class="fb-page" data-href="https://www.facebook.com/facebook" data-width="500" data-small-header="true" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="false" data-show-posts="false"><div class="fb-xfbml-parse-ignore"><blockquote cite="https://www.facebook.com/facebook"><a href="https://www.facebook.com/facebook">Facebook</a></blockquote></div></div>
		</div>
	</div>
	<div class="row">
		<div class="col-md-8">
			<h4 class="title-section">Recentes</h4>
			<div class="row">
				<div class="col-md-12">
					<?php foreach ($videos as $key => $video): ?>
						<?php $video->url_full = [
							'action' => 'player',
							$video->slug
						];
							echo $this->element('Site/box_horizontal', ['video' => $video]);
						?>
					<?php endforeach ?>	
				</div>
			</div>
		</div>
		<div class="col-md-4">
			<h3 class="title-section">
				Populares
			</h3>
			<div class="row">
				<?php foreach ($videos as $key => $video): ?>
					<div class="col-md-12">
						<?php $video->url_full = [
							'action' => 'player',
							$video->slug
						];
							echo $this->element('Site/box_vertical', ['video' => $video]);
						?>
					</div>
				<?php endforeach ?>
			</div>
		</div>
	</div>
</div>