<?= $this->assign('title', $video->title) ?>

<?= $this->Html->script('http://www.youtube.com/player_api', ['inline' => false]) ?>

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

<div class="player-cont">
	<div class="container">
		<div class="row">
			<div class="col-md-8">
				<div class="wrap-player">
					<div
						class="embed-responsive embed-responsive-16by9"
						style="background-color: #000">
<!-- 						<iframe
							id="player"
							data-src="https://www.youtube.com/embed/<?= $video->youtube_code ?>?autohide=1&showinfo=0&rel=0&modestbranding=1&autoplay=1"
							style=""
							class="embed-responsive-item"
							src="https://www.youtube.com/embed/<?= $video->youtube_code ?>?autohide=1&showinfo=0&rel=0&modestbranding=1&autoplay=1"
							frameborder="0"
							allowfullscreen>
						</iframe> -->
						<div
							id="player"
							data-youtube-code="<?= $video->youtube_code ?>">
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-4">
				<div class="row">
					<div class="col-md-12">
						<div style="margin-top: 10px;">
							<?= $this->Html->link($video->artist->name, [
									'action' => 'artistProfile',
									$video->artist->slug
								], [
								'escape' => false,
								'class' => 'link-categories-player',
								'style' => 'color: #EEE; font-weigth: bold;text-decoration: none;'
							]) ?>
						</div>
						<h3 class="player-video-title">
							<?= $video->title ?>
						</h3>	
<!-- 						<p>
							<?= $this->Html->link('<span class="label label-default label-custom">Entrevista</span>', [
									'action' => 'category',
									$video->category->slug
								], [
								'escape' => false,
								'class' => 'link-categories-lg'
							]) ?>
							
						</p> -->
						<p class="player-video-desc">
							<?= $video->description ?>
						</p>
					</div>
					<div class="col-md-12" style="margin-top: 20px;">
						<div class="row">
							<div class="col-md-12 text-right">
								<a
									style="width: 36px; color: #FFF!important"
									href="#"
									title="Compartilhar no Facebook"
									class="btn btn-primary">
									<span class="fa fa-facebook"></span>
								</a>
								<a
									style="width: 36px;color: #FFF!important"
									href="#"
									title="Compartilhar no Twitter"
									class="btn btn-info">
									<span class="fa fa-twitter"></span>
								</a>
							</div>
						</div>
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
			<h4 class="title-section">Comentários</h4>
			<div
				class="fb-comments"
				data-href="http://localhost/videos-blog"
				data-width="100%"
				data-numposts="10">
			</div>
		</div>
		<div class="col-md-4">
			<h4 class="title-section">Populares</h4>
			<?= $this->cell('Populars', ['limit' => 20, 'excluirIds' => $video->id]) ?>
		</div>
	</div>
</div>

<script>
	var player;
	function onYouTubePlayerAPIReady() {
		player = new YT.Player('player', {
			autoplay: 1,
			videoId: $('#player').data('youtube-code'),
			playerVars: {
				'autoplay': 1
			},
			events: {
				'onReady': onPlayerReady,
				'onStateChange': onPlayerStateChange
			}
		});
	}

	function onPlayerStateChange(event){
		if (event.data === 0) {
			// player.loadVideoById({videoId: 'KV2ssT8lzj8'});
			window.location = 'http://localhost:777/videos-blog/p/no-love';
		}
	}
	function onPlayerReady(event){
		// event.target.playVideo();
		//player.setSize({height: '1200px'});
		//enterFullScreen();
	}

		$(window).keyup(function(e){
			console.log(e.which);
			if (e.which == 17) {	
				enterFullScreen();
			} else if(e.which == 27) {
				exitFullScreen();
			}
		});

		function enterFullScreen(){
			var windowWidth = $('body').width();
			var windowHeight = $('body').height();

			$('.wrap-player').css({
				left: 0,
				top: 0,
				bottom: 0,
				right: 0,
				position: 'fixed',
				width: windowWidth + 'px',
				height: windowHeight,
				'z-index': 9999
			});
		}
		function exitFullScreen(){
			var windowWidth = $(document).width();
			var windowHeight = $(document).height();

			$('.wrap-player').css({
				left: 'auto',
				top: 'auto',
				position: 'relative',
				width: 'auto',
				height: 'auto',
				'z-index': 1
			});
		}
</script>