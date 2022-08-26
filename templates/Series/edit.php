<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Series $series
 * @var string[]|\Cake\Collection\CollectionInterface $listSeries
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $series->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $series->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Series'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="series form content">
            <?= $this->Form->create($series) ?>
            <fieldset>
                <legend><?= __('Edit Series') ?></legend>
                <?php
                    echo $this->Form->control('episode_name');
                    echo $this->Form->control('episode_rank');
                    echo $this->Form->control('listSerie_id', ['options' => $listSeries]);
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
