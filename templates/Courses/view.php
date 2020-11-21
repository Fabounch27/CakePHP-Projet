<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Course $course
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Course'), ['action' => 'edit', $course->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Course'), ['action' => 'delete', $course->id], ['confirm' => __('Are you sure you want to delete # {0}?', $course->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Courses'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Course'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="courses view content">
            <h3><?= h($course->name) ?></h3>
            <table>
                <tr>
                    <th><?= __('Name') ?></th>
                    <td><?= h($course->name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Teacher') ?></th>
                    <td><?= $course->has('teacher') ? $this->Html->link($course->teacher->last_name, ['controller' => 'Teachers', 'action' => 'view', $course->teacher->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($course->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Course Date') ?></th>
                    <td><?= h($course->course_date) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($course->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified') ?></th>
                    <td><?= h($course->modified) ?></td>
                </tr>
            </table>
            <div class="related">
                <h4><?= __('Related Absences') ?></h4>
                <?php if (!empty($course->absences)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Course Id') ?></th>
                            <th><?= __('Student Id') ?></th>
                            <th><?= __('Absence Date') ?></th>
                            <th><?= __('Created') ?></th>
                            <th><?= __('Modified') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($course->absences as $absences) : ?>
                        <tr>
                            <td><?= h($absences->id) ?></td>
                            <td><?= h($absences->course_id) ?></td>
                            <td><?= h($absences->student_id) ?></td>
                            <td><?= h($absences->absence_date) ?></td>
                            <td><?= h($absences->created) ?></td>
                            <td><?= h($absences->modified) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'Absences', 'action' => 'view', $absences->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Absences', 'action' => 'edit', $absences->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Absences', 'action' => 'delete', $absences->id], ['confirm' => __('Are you sure you want to delete # {0}?', $absences->id)]) ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>
