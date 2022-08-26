<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\ListSeries $listSeries
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit List Series'), ['action' => 'edit', $listSeries->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete List Series'), ['action' => 'delete', $listSeries->id], ['confirm' => __('Are you sure you want to delete # {0}?', $listSeries->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List List Series'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New List Series'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="listSeries view content">
            <h3><?= h($listSeries->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Serie Name') ?></th>
                    <td><?= h($listSeries->serie_name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Serie Image') ?></th>
                    <td><?= h($listSeries->serie_image) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($listSeries->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($listSeries->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified') ?></th>
                    <td><?= h($listSeries->modified) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
