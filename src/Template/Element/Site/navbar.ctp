<nav class="navbar navbar-default navbar-static-top">
    <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Alternar navegação</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <?php
                // $image = $this->Html->image('https://cdn0.iconfinder.com/data/icons/social-networks-and-media-flat-icons/136/Social_Media_Socialmedia_network_share_socialnetwork_network-21-128.png', ['height' => 20]);
                // echo $this->Html->link($image, [
                //     'action' => 'index'
                // ],
                // [
                //     'escape' => false,
                //     'class' => 'navbar-brand'
                // ])
            ?>
            <?= $this->Html->link('Logo here', ['action' => 'index'], ['class' => 'navbar-brand navbar-logo']) ?>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
<!--             <ul class="nav navbar-nav">
                <li>
                    <?= $this->Html->link('Minhas Playslists', [
                        'controller' => 'Playlists',
                        'action' => 'index',
                    ]) ?>
                </li>
            </ul> -->
<!--             <ul class="nav navbar-nav">
                <li>
                    <?= $this->Html->link('Clipe', [
                        'action' => 'category',
                        'clipe'
                    ]) ?>
                </li>
                <li>
                    <?= $this->Html->link('Ao vivo', [
                        'action' => 'category',
                        'ao-vivo'
                    ]) ?>
                </li>
                <li>
                    <?= $this->Html->link('Entrevista', [
                        'action' => 'category',
                        'entrevista'
                    ]) ?>
                </li>
            </ul> -->

            

            <div class="">
                <ul class="nav navbar-nav navbar-right">
    <!--                 <li>
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
                    <button type="submit" class="btn btn-default" style="margin-left: -40px; border: 0; background: none">
                        <span class="fa fa-search"></span>
                    </button>
                </form>
                    </li> -->
                    <li style="margin-right: 10px">
                        <a
                            href="#search"
                            class="navbar-link navbar-icons">
                            <span class="fa fa-search"></span>
                        </a>
                    </li>
                    <li>
                        <a
                            title="Nossa página no Facebook"
                            href="#"
                            class="navbar-link navbar-icons navbar-icons-facebook">
                            <span class="fa fa-facebook"></span>
                        </a>
                    </li>
                    <li>
                        <a
                            title="Nossa conta no Twitter"
                            href="#"
                            class="navbar-link navbar-icons navbar-icons-twitter">
                            <span class="fa fa-twitter"></span>
                        </a>
                    </li>
                </ul>
                <div class="navbar-right">
                    <?= $this->Html->link('Entrar', [], ['class' => 'btn btn-primary navbar-btn ']) ?>
                    <div class="dropdown">
                        <a href="#" class="btn btn-default btn-sm dropdown-toggle" data-toggle="dropdown">Dropdown <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li>
                                <?= $this->Html->link('Minhas Playslists', [
                                    'controller' => 'Playlists',
                                    'action' => 'index',
                                ]) ?>
                            </li>
                            <li role="separator" class="divider"></li>
                            <li>
                                <?= $this->Html->link('Logout', ['controller' => 'Users', 'action' => 'logout']) ?>
                            </li>
                        </ul>
                    </div>
                </div>
                
            </div>
        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>