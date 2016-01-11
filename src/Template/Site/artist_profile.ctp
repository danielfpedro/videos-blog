<?= $this->assign('title', $artist->name . ' - ' . $appName) ?>

<div class="container">
	<div class="row">
		<div class="col-md-9">
<!-- 			<h3 class="title-section margin-top-sm">
				Resultado da busca para "<?= h($this->request->query('q')) ?>"
			</h3>
		    <form
		        role="search"
		        id="form-search"
		        class="form-inline"
		        action="<?= $this->url->build([
		            'action' => 'search'
		        ]) ?>">
		        <div class="form-group">
		        	<input
		        		value="<?= $this->request->query('q') ?>"
		        		type="search"
		        		placeholder="Digite aqui..."
		        		name="q"
		        		autocomplete="off"
		        		class="form-control" />
		        </div>
		        <div class="form-group">
			        <button type="submit" class="btn btn-info btn-warning-custom">
			            Pesquisar
			        </button>
		        </div>
		    </form>

		    -->
		    <hr>

			<div>
				<div class="row">
					<div class="col-md-12">
						<div class="row">
							<div class="col-md-2 col-sm-2">
								<?= $this->Html->image($artist->profile_picture, [
									'width' => '100%',
									'class' => 'img-circle'
								]) ?>
							</div>
							<div class="col-md-10 col-sm-10">
								<h3>
									<?= $artist->name ?>
								</h3>
							</div>
						</div>
					</div>
				</div>
			</div>

			<hr>

			<div class="row">
<!-- 				<div class="col-md-12" style="margin: 25px 0 35px 0;">
					<img src="http://placehold.it/600x60" width="100%">
				</div> -->
				<div class="col-md-12">
					<h3 class="title-section">
						Vídeos
					</h3>
					<?php foreach ($videos as $video): ?>
						<?= $this->element('Site/box_horizontal', ['video' => $video]) ?>
					<?php endforeach ?>
				</div>
			</div>

		</div>
		<div class="col-md-3">
			<div class="row">
				<div class="col-md-12">
					<img src="http://placehold.it/500x400" width="100%">
				</div>
			</div>
			<h3 class="title-section margin-top-sm">
				Populares
			</h3>
			<?= $this->cell('Populars') ?>
		</div>
	</div>

	<div class="row">
		<div class="col-md-12">
			<ul class="pagination">
				<?= $this->Paginator->numbers() ?>
			</ul>
		</div>
	</div>

</div>