
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
			<h4>Recentes</h4>
			<?php foreach ($lastVideos as $key => $video): ?>
				<?php $url =[
					'action' => 'player',
					$video->slug
				] ?>
				<div class="row">
					<div class="col-md-4">
						<?= $this->Html->image($video->full_photo_box_horizontal, [
							'class' => 'img-responsive',
							'url' => $url
						]) ?>
					</div>
					<div class="col-md-8">
						<h4 style="margin-top: 0;">
							<?= $this->Html->link($video->title, $url) ?>
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
				</div>
			<?php endforeach ?>
		</div>
		<div class="col-md-4">
			<h4>Populares</h4>
			<?php foreach ($lastVideos as $key => $video): ?>
				<?php $url = [
					'action' => 'player',
					$video->slug
				] ?>				
				<?= $this->Html->image($video->full_photo_portrait_md, [
					'class' => 'img-responsive',
					'url' => $url
				]) ?>
				<h3>
				<?= $this->Html->link($video->title, $url) ?>
				</h3>
				<div>
					<a href="" class="btn btn-primary btn-sm">
						<span class="fa fa-facebook"></span>
					</a>
					<a href="" class="btn btn-info btn-sm">
						<span class="fa fa-twitter"></span>
					</a>
				</div>
			<?php endforeach ?>
		</div>
	</div>
</div>