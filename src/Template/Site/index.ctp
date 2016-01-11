<?= $this->assign('title', $appName) ?>
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
			style="height: 350px;background-image: url(<?= $this->Url->build($destaques[0]->full_photo_portrait_lg_from_template) ?>)">
			
			<?= $this->Html->link('<div class="home-main-overlay"></div>', $destaques[0]->player_url, [
				'escape' => false
			]) ?>
			<h2 class="home-main-title text-shadow-dark">
				<?= $destaques[0]->title ?>
			</h2>
			<span class="">
				<?= $destaques[0]->title ?>
			</span>
		</div>
		<div class="col-md-3 cont-home-main"
			style="height: 350px;background-image: url(<?= $this->Url->build($destaques[1]->full_photo_portrait_lg_from_template) ?>)">

			<?= $this->Html->link('<div class="home-main-overlay"></div>', $destaques[1]->player_url, [
				'escape' => false
			]) ?>
			<div>
				<h2 class="home-main-title home-main-title-sm text-shadow-dark">
					<?= $destaques[1]->title ?>
				</h2>
			</div>
		</div>
		<div class="col-md-3 cont-home-main"
			style="height: 350px;background-image: url(<?= $this->Url->build($destaques[2]->full_photo_portrait_lg_from_template) ?>)">
			<?= $this->Html->link('<div class="home-main-overlay"></div>', $destaques[2]->player_url, [
				'escape' => false
			]) ?>
			<div>
				<h2 class="home-main-title home-main-title-sm text-shadow-dark">
					<?= $destaques[2]->title ?>
				</h2>
			</div>
		</div>
	</div>
</div>

<div class="text-center" style="margin: 40px 0;height: 70px;">
	<div class="fb-page" data-href="https://www.facebook.com/facebook" data-width="500" data-small-header="true" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="false" data-show-posts="false"><div class="fb-xfbml-parse-ignore"><blockquote cite="https://www.facebook.com/facebook"><a href="https://www.facebook.com/facebook">Facebook</a></blockquote></div>
	</div>	
</div>

<div class="container">
	<div class="row">
		<div class="col-md-8">
			<h3 class="title-section">Recentes</h3>
			<div class="row">
				<div class="col-md-12">
					<?= $this->element('Site/box_horizontal', ['videos' => $newestsVideos ]); ?>
				</div>
			</div>
		</div>
		<div class="col-md-4">
			<h3 class="title-section">
				Populares
			</h3>
			<?= $this->cell('Populars', [
				'limit' => 20,
				null,
				false
			]); ?>
		</div>
	</div>
</div>