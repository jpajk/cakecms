<?php
/**
 * @var $this \Cake\View\View
 * @var array|null $currentUser
 */
use Cake\Core\Configure;

$this->Html->css('BootstrapUI.dashboard', ['block' => true]);
$this->prepend('tb_body_attrs', ' class="' . implode(' ', [$this->request->controller, $this->request->action]) . '" ');
$this->start('tb_body_start');
?>
<body <?= $this->fetch('tb_body_attrs') ?>>
    <nav class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0">
        <?= $this->Html->link(Configure::read('App.title'), '/', ['class' => 'navbar-brand col-sm-3 col-md-2 mr-0']) ?>
        <input class="form-control form-control-dark w-100" type="text" placeholder="Search" aria-label="Search">

        <?php if ($currentUser): ?>
            <ul class="navbar-nav px-3">
                <li class="nav-item text-nowrap">
                    <a class="nav-link" href="<?= $this->Url->build(['controller' => 'users', 'action' => 'logout']) ?>">Sign out</a>
                </li>
            </ul>
        <?php endif; ?>
    </nav>

    <div class="container-fluid">
        <div class="row">
            <nav class="col-md-2 d-none d-md-block bg-light sidebar">
                <div class="sidebar-sticky">
                    <?= $this->fetch('tb_sidebar') ?>
                </div>
            </nav>
            <main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">
                <h1 class="page-header"><?= $this->request->controller; ?></h1>
<?php
/**
 * Default `flash` block.
 */
if (!$this->fetch('tb_flash')) {
    $this->start('tb_flash');
    if (isset($this->Flash))
        echo $this->Flash->render();
    $this->end();
}
$this->end();

$this->start('tb_body_end');
echo '</body>';
$this->end();

$this->append('content', '</main></div></div>');
echo $this->fetch('content');
