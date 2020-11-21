<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Absence $absence
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Absences'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="absences form content">
            <?= $this->Form->create($absence) ?>
            <fieldset>
                <legend><?= __('Add Absence') ?></legend>
                <?php
                    echo $this->Form->control('course_id', ['options' => $courses]);
                    echo $this->Form->control('student_id', ['options' => $students]);
                    echo $this->Form->control('absence_date');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
