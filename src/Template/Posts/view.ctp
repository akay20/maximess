<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Post $post
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Post'), ['action' => 'edit', $post->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Post'), ['action' => 'delete', $post->id], ['confirm' => __('Are you sure you want to delete # {0}?', $post->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Posts'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Post'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Post Likes'), ['controller' => 'PostLikes', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Post Like'), ['controller' => 'PostLikes', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="posts view large-9 medium-8 columns content">
    <h3><?= h($post->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('User') ?></th>
            <td><?= $post->has('user') ? $this->Html->link($post->user->id, ['controller' => 'Users', 'action' => 'view', $post->user->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Post Title') ?></th>
            <td><?= h($post->post_title) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($post->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($post->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($post->modified) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Is Published') ?></th>
            <td><?= $post->is_published ? __('Yes') : __('No'); ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Flag') ?></th>
            <td><?= $post->flag ? __('Yes') : __('No'); ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Post Descrpition') ?></h4>
        <?= $this->Text->autoParagraph(h($post->post_descrpition)); ?>
    </div>
    <div class="related">
        <h4><?= __('Related Post Likes') ?></h4>
        <?php if (!empty($post->post_likes)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('User Id') ?></th>
                <th scope="col"><?= __('Post Id') ?></th>
                <th scope="col"><?= __('Post Like') ?></th>
                <th scope="col"><?= __('Post Unlike') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($post->post_likes as $postLikes): ?>
            <tr>
                <td><?= h($postLikes->id) ?></td>
                <td><?= h($postLikes->user_id) ?></td>
                <td><?= h($postLikes->post_id) ?></td>
                <td><?= h($postLikes->post_like) ?></td>
                <td><?= h($postLikes->post_unlike) ?></td>
                <td><?= h($postLikes->created) ?></td>
                <td><?= h($postLikes->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'PostLikes', 'action' => 'view', $postLikes->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'PostLikes', 'action' => 'edit', $postLikes->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'PostLikes', 'action' => 'delete', $postLikes->id], ['confirm' => __('Are you sure you want to delete # {0}?', $postLikes->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
