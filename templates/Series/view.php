<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Series $series
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Series'), ['action' => 'edit', $series->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Series'), ['action' => 'delete', $series->id], ['confirm' => __('Are you sure you want to delete # {0}?', $series->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Series'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Series'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="series view content">
            <h3><?= h($series->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Episode Name') ?></th>
                    <td><?= h($series->episode_name) ?></td>
                </tr>
                <tr>
                    <th><?= __('List Series') ?></th>
                    <td><?= $series->has('list_series') ? $this->Html->link($series->list_series->id, ['controller' => 'ListSeries', 'action' => 'view', $series->list_series->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($series->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Episode Rank') ?></th>
                    <td><?= $this->Number->format($series->episode_rank) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($series->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified') ?></th>
                    <td><?= h($series->modified) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
