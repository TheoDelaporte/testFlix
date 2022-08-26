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
            <?= $this->Html->link(__('List List Series'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="listSeries form content">
            <?= $this->Form->create($listSeries) ?>
            <fieldset>
                <legend><?= __('Add List Series') ?></legend>
                <?php
                    echo $this->Form->control('serie_name');
                    echo $this->Form->control('serie_image');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
