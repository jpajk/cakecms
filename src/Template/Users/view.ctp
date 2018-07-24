<?php $this->extend('../Layout/TwitterBootstrap/dashboard'); ?>

<?php $this->start('tb_actions'); ?>
<li><?= $this->Html->link(__('Edit User'), ['action' => 'edit', $user->id], ['class' => 'nav-link']) ?></li>
<li><?= $this->Form->postLink( __('Delete User'), ['action' => 'delete', $user->id], ['confirm' => __('Are you sure you want to delete # {0}?', $user->id), 'class' => 'nav-link'] ) ?></li>
<li><?= $this->Html->link(__('List Users'), ['action' => 'index'], ['class' => 'nav-link']) ?> </li>
<li><?= $this->Html->link(__('New User'), ['action' => 'add'], ['class' => 'nav-link']) ?> </li>
<li><?= $this->Html->link(__('List User Groups'), ['controller' => 'UserGroups', 'action' => 'index'], ['class' => 'nav-link']) ?></li>
<li><?= $this->Html->link(__('New User Group'), ['controller' => 'UserGroups', 'action' => 'add'], ['class' => 'nav-link']) ?></li>
<li><?= $this->Html->link(__('List Pages'), ['controller' => 'Pages', 'action' => 'index'], ['class' => 'nav-link']) ?></li>
<li><?= $this->Html->link(__('New Page'), ['controller' => 'Pages', 'action' => 'add'], ['class' => 'nav-link']) ?></li>
<li><?= $this->Html->link(__('List Posts'), ['controller' => 'Posts', 'action' => 'index'], ['class' => 'nav-link']) ?></li>
<li><?= $this->Html->link(__('New Post'), ['controller' => 'Posts', 'action' => 'add'], ['class' => 'nav-link']) ?></li>
<?php $this->end(); ?>
<?php $this->assign('tb_sidebar', '<ul class="nav flex-column">' . $this->fetch('tb_actions') . '</ul>'); ?>

<div class="users view large-9 medium-8 columns content">
    <h3><?= h($user->id) ?></h3>
    <div class="table-responsive">
        <table class="table table-striped">
            <tr>
                <th scope="row"><?= __('Email') ?></th>
                <td><?= h($user->email) ?></td>
            </tr>
            <tr>
                <th scope="row"><?= __('Password') ?></th>
                <td><?= h($user->password) ?></td>
            </tr>
            <tr>
                <th scope="row"><?= __('User Group') ?></th>
                <td><?= $user->has('user_group') ? $this->Html->link($user->user_group->name, ['controller' => 'UserGroups', 'action' => 'view', $user->user_group->id]) : '' ?></td>
            </tr>
            <tr>
                <th scope="row"><?= __('Id') ?></th>
                <td><?= $this->Number->format($user->id) ?></td>
            </tr>
            <tr>
                <th scope="row"><?= __('Created') ?></th>
                <td><?= h($user->created) ?></td>
            </tr>
            <tr>
                <th scope="row"><?= __('Updated') ?></th>
                <td><?= h($user->updated) ?></td>
            </tr>
        </table>
    </div>
    <div class="related">
        <h4><?= __('Related Pages') ?></h4>
        <?php if (!empty($user->pages)): ?>
        <div class="table-responsive">
            <table class="table table-striped">
                <tr>
                    <th scope="col"><?= __('Id') ?></th>
                    <th scope="col"><?= __('Slug') ?></th>
                    <th scope="col"><?= __('Title') ?></th>
                    <th scope="col"><?= __('Description') ?></th>
                    <th scope="col"><?= __('Contents') ?></th>
                    <th scope="col"><?= __('User Id') ?></th>
                    <th scope="col"><?= __('Created') ?></th>
                    <th scope="col"><?= __('Updated') ?></th>
                    <th scope="col" class="actions"><?= __('Actions') ?></th>
                </tr>
                <?php foreach ($user->pages as $pages): ?>
                <tr>
                    <td><?= h($pages->id) ?></td>
                    <td><?= h($pages->slug) ?></td>
                    <td><?= h($pages->title) ?></td>
                    <td><?= h($pages->description) ?></td>
                    <td><?= h($pages->contents) ?></td>
                    <td><?= h($pages->user_id) ?></td>
                    <td><?= h($pages->created) ?></td>
                    <td><?= h($pages->updated) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['controller' => 'Pages', 'action' => 'view', $pages->id], ['class' => 'btn btn-secondary']) ?>
                        <?= $this->Html->link(__('Edit'), ['controller' => 'Pages', 'action' => 'edit', $pages->id], ['class' => 'btn btn-secondary']) ?>
                        <?= $this->Form->postLink( __('Delete'), ['controller' => 'Pages', 'action' => 'delete', $pages->id], ['confirm' => __('Are you sure you want to delete # {0}?', $pages->id), 'class' => 'btn btn-danger']) ?>
                    </td>
                </tr>
                <?php endforeach; ?>
            </table>
        </div>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Posts') ?></h4>
        <?php if (!empty($user->posts)): ?>
        <div class="table-responsive">
            <table class="table table-striped">
                <tr>
                    <th scope="col"><?= __('Id') ?></th>
                    <th scope="col"><?= __('Title') ?></th>
                    <th scope="col"><?= __('Description') ?></th>
                    <th scope="col"><?= __('Contents') ?></th>
                    <th scope="col"><?= __('User Id') ?></th>
                    <th scope="col"><?= __('Created') ?></th>
                    <th scope="col"><?= __('Updated') ?></th>
                    <th scope="col" class="actions"><?= __('Actions') ?></th>
                </tr>
                <?php foreach ($user->posts as $posts): ?>
                <tr>
                    <td><?= h($posts->id) ?></td>
                    <td><?= h($posts->title) ?></td>
                    <td><?= h($posts->description) ?></td>
                    <td><?= h($posts->contents) ?></td>
                    <td><?= h($posts->user_id) ?></td>
                    <td><?= h($posts->created) ?></td>
                    <td><?= h($posts->updated) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['controller' => 'Posts', 'action' => 'view', $posts->id], ['class' => 'btn btn-secondary']) ?>
                        <?= $this->Html->link(__('Edit'), ['controller' => 'Posts', 'action' => 'edit', $posts->id], ['class' => 'btn btn-secondary']) ?>
                        <?= $this->Form->postLink( __('Delete'), ['controller' => 'Posts', 'action' => 'delete', $posts->id], ['confirm' => __('Are you sure you want to delete # {0}?', $posts->id), 'class' => 'btn btn-danger']) ?>
                    </td>
                </tr>
                <?php endforeach; ?>
            </table>
        </div>
        <?php endif; ?>
    </div>
</div>
