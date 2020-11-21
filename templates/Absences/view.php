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
            <?= $this->Html->link(__('Edit Absence'), ['action' => 'edit', $absence->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Absence'), ['action' => 'delete', $absence->id], ['confirm' => __('Are you sure you want to delete # {0}?', $absence->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Absences'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Absence'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="absences view content">
            <h3><?= h($absence->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Course') ?></th>
                    <td><?= $absence->has('course') ? $this->Html->link($absence->course->name, ['controller' => 'Courses', 'action' => 'view', $absence->course->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Student') ?></th>
                    <td><?= $absence->has('student') ? $this->Html->link($absence->student->last_name, ['controller' => 'Students', 'action' => 'view', $absence->student->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($absence->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Absence Date') ?></th>
                    <td><?= h($absence->absence_date) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($absence->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified') ?></th>
                    <td><?= h($absence->modified) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
