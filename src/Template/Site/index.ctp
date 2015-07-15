
<div class="container-fluid" style="margin-top: -20px;">
	<div class="row">
		<div class="col-md-6" style="height: 350px;background-color: green;">
			<h2 style="bottom: 0; left: 0; position: absolute; margin-left: 20px">Iggy Azalea - Work</h2>
		</div>
		<div class="col-md-3" style="background-color: red;height: 350px;">
			<h2 style="bottom: 0; left: 0; position: absolute;">Iggy Azalea - Work</h2>
		</div>
		<div class="col-md-3" style="background-color: yellow; height: 350px;">
			<h2 style="bottom: 0; left: 0; position: absolute;">Iggy Azalea - Work</h2>
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