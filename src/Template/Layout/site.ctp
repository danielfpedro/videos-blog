<!DOCTYPE html>
<html>
<head>
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?= $this->fetch('title') ?>
    </title>
    <?= $this->Html->meta('icon') ?>

    <?= $this->Html->css('../components/bootstrap/dist/css/bootstrap.min') ?>
    <?= $this->Html->css('../components/fontawesome/css/font-awesome.min') ?>
    <?= $this->Html->css('style') ?>

    <link href='http://fonts.googleapis.com/css?family=Open+Sans:700,400' rel='stylesheet' type='text/css'>  
    <?= $this->Html->script('../components/jquery/dist/jquery.min') ?>
    <?= $this->Html->script('../components/bootstrap/dist/js/bootstrap.min') ?>

    <?= $this->Html->script('common') ?>

    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
    <?= $this->fetch('script') ?>

    <script>
        $(function(){
            $('#form-search').submit(function(){
                if ($('input[name="q"]').val() === '') {
                    return false;
                }
            });
        })
    </script>
</head>
<body>
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/pt_BR/sdk.js#xfbml=1&version=v2.4&appId=476102929232547";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

    <?= $this->element('Site/navbar') ?>

    <?= $this->Flash->render() ?>
    <?= $this->fetch('content') ?>

<div id="search">
    <button type="button" class="close">×</button>
    <form
        id="form-search"
        role="search"
        action="<?= $this->url->build([
            'action' => 'search'
        ]) ?>">
        <input
            type="search"
            placeholder="Digite aqui a sua pesquisa..."
            name="q"
            autocomplete="off" />
        <button type="submit" class="btn btn-lg btn-custom btn-warning-custom">
            PESQUISAR
        </button>
    </form>
</div>

</body>
</html>
