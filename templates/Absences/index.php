<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Absence[]|\Cake\Collection\CollectionInterface $absences
 */
?>
<div class="absences index content">
    <?= $this->Html->link(__('New Absence'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Absences') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('course_id') ?></th>
                    <th><?= $this->Paginator->sort('student_id') ?></th>
                    <th><?= $this->Paginator->sort('absence_date') ?></th>
                    <th><?= $this->Paginator->sort('created') ?></th>
                    <th><?= $this->Paginator->sort('modified') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($absences as $absence): ?>
                <tr>
                    <td><?= $this->Number->format($absence->id) ?></td>
                    <td><?= $absence->has('course') ? $this->Html->link($absence->course->name, ['controller' => 'Courses', 'action' => 'view', $absence->course->id]) : '' ?></td>
                    <td><?= $absence->has('student') ? $this->Html->link($absence->student->last_name, ['controller' => 'Students', 'action' => 'view', $absence->student->id]) : '' ?></td>
                    <td><?= h($absence->absence_date) ?></td>
                    <td><?= h($absence->created) ?></td>
                    <td><?= h($absence->modified) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $absence->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $absence->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $absence->id], ['confirm' => __('Are you sure you want to delete # {0}?', $absence->id)]) ?>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(__('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')) ?></p>
    </div>
</div>
