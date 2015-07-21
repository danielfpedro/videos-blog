<?= $this->assign('title', 'Pesquisa por \'' . $this->request->query('q') . '\' - ' . $appName) ?>

<div class="container">
	<div class="row">
		<div class="col-md-9">
			<h3 class="title-section margin-top-sm">
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
		    <hr>

			<div class="row">
				<div class="col-md-12" style="margin: 25px 0 35px 0;">
					<img src="http://placehold.it/600x60" width="100%">
				</div>
				<div class="col-md-12">
					<?php foreach ($videos as $video): ?>
						<?= $this->element('Site/box_horizontal', ['video' => $video]) ?>
					<?php endforeach ?>

					<?php if (!$videos->toArray()): ?>
						<h4>Nenhum vídeo encontrado com os termos informados na pesquisa.</h4>
					<?php endif ?>
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