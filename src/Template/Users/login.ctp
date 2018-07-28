<?php $this->extend('../Layout/TwitterBootstrap/dashboard'); ?>

<div class="container">
    <div class="row">
        <div class="col-sm-6">
            <h1>Login</h1>
            <?= $this->Form->create() ?>
            <?= $this->Form->control('email') ?>
            <?= $this->Form->control('password') ?>
            <?= $this->Form->button('Login') ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
