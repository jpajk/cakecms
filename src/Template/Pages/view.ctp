<?php $this->extend('../Layout/TwitterBootstrap/dashboard'); ?>

<?php $this->start('tb_actions'); ?>
<li><?= $this->Html->link(__('Edit Page'), ['action' => 'edit', $page->id], ['class' => 'nav-link']) ?></li>
<li><?= $this->Form->postLink( __('Delete Page'), ['action' => 'delete', $page->id], ['confirm' => __('Are you sure you want to delete # {0}?', $page->id), 'class' => 'nav-link'] ) ?></li>
<li><?= $this->Html->link(__('List Pages'), ['action' => 'index'], ['class' => 'nav-link']) ?> </li>
<li><?= $this->Html->link(__('New Page'), ['action' => 'add'], ['class' => 'nav-link']) ?> </li>
<li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index'], ['class' => 'nav-link']) ?></li>
<li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add'], ['class' => 'nav-link']) ?></li>
<?php $this->end(); ?>
<?php $this->assign('tb_sidebar', '<ul class="nav flex-column">' . $this->fetch('tb_actions') . '</ul>'); ?>

<div class="pages view large-9 medium-8 columns content">
    <h3><?= h($page->title) ?></h3>
    <div class="table-responsive">
        <table class="table table-striped">
            <tr>
                <th scope="row"><?= __('Slug') ?></th>
                <td><?= h($page->slug) ?></td>
            </tr>
            <tr>
                <th scope="row"><?= __('Title') ?></th>
                <td><?= h($page->title) ?></td>
            </tr>
            <tr>
                <th scope="row"><?= __('Contents') ?></th>
                <td><?= h($page->contents) ?></td>
            </tr>
            <tr>
                <th scope="row"><?= __('User') ?></th>
                <td><?= $page->has('user') ? $this->Html->link($page->user->id, ['controller' => 'Users', 'action' => 'view', $page->user->id]) : '' ?></td>
            </tr>
            <tr>
                <th scope="row"><?= __('Id') ?></th>
                <td><?= $this->Number->format($page->id) ?></td>
            </tr>
            <tr>
                <th scope="row"><?= __('Created') ?></th>
                <td><?= h($page->created) ?></td>
            </tr>
            <tr>
                <th scope="row"><?= __('Updated') ?></th>
                <td><?= h($page->updated) ?></td>
            </tr>
        </table>
    </div>
    <div class="row">
        <h4><?= __('Description') ?></h4>
        <?= $this->Text->autoParagraph(h($page->description)); ?>
    </div>
</div>
