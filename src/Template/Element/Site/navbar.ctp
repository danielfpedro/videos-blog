<nav class="navbar navbar-default">
    <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Alternar navegação</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <?= $this->Html->link('App Name', ['action' => 'index'], ['class' => 'navbar-brand']) ?>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <li>
                    <?= $this->Html->link('Cliques Musicais', []) ?>
                </li>
            </ul>

            <form
                class="navbar-form navbar-left"
                role="search"
                action="<?= $this->url->build([
                    'action' => 'search'
                ]) ?>">
                <div class="form-group">
                    <input
                        type="text"
                        class="form-control"
                        placeholder="Pesquisar"
                        name="q"
                        value="<?= $this->request->query('q') ?>">
                </div>
                <button type="submit" class="btn btn-default">
                    <span class="fa fa-search"></span>
                </button>
            </form>

            <ul class="nav navbar-nav navbar-right">
                <li>
                    <button type="button" class="btn btn-primary navbar-btn">Criar conta</button>
                    <button type="button" class="btn btn-danger navbar-btn">Entrar</button>
                </li>
            </ul>
        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>