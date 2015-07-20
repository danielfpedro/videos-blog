<?= $this->assign('title', 'Pesquisa por \'' . $this->request->query('q') . '\' - ' . $appName) ?>

<div class="container">
	<div class="row">
		<div class="col-md-12">
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
		</div>
	</div>
	<br>
	<div class="row">
		<div class="col-md-8">
			<?php foreach ($videos as $video): ?>
				<?= $this->element('Site/box_horizontal', ['video' => $video]) ?>
			<?php endforeach ?>

			<?php if (!$videos->toArray()): ?>
				<h4>Nenhum vídeo encontrado com os termos informados na pesquisa.</h4>
			<?php endif ?>
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