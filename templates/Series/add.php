<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Series $series
 * @var \Cake\Collection\CollectionInterface|string[] $listSeries
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Series'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="series form content">
            <?= $this->Form->create($series) ?>
            <fieldset>
                <legend><?= __('Add Series') ?></legend>
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
