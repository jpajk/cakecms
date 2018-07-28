<?php
/**
 * @var \BootstrapUI\View\UIView $this
 */
$this->extend('../Layout/TwitterBootstrap/dashboard');
?>

<?php $this->start('tb_actions'); ?>
<li>
    <a href="<?= $this->Url->build(['controller' => 'Users', 'action' => 'index']) ?>" class="nav-link">
        <i class="fa fa-fw fa-users"></i> Users
    </a>
</li>
<li>
    <a href="<?= $this->Url->build(['controller' => 'Pages', 'action' => 'index']) ?>" class="nav-link">
        <i class="fa fa-fw fa-file"></i> Pages
    </a>
</li>
<li>
    <a href="<?= $this->Url->build(['controller' => 'Posts', 'action' => 'index']) ?>" class="nav-link">
        <i class="fa fa-fw fa-files-o"></i> Posts
    </a>
</li>
<li>
    <a href="#" class="nav-link">
        <i class="fa fa-fw fa-cogs"></i> Settings
    </a>
</li>
<?php $this->end(); ?>
<?php $this->assign('tb_sidebar', '<ul class="nav flex-column">' . $this->fetch('tb_actions') . '</ul>'); ?>

Pages, settings
