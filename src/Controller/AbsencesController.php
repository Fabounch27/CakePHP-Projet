<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Absences Controller
 *
 * @property \App\Model\Table\AbsencesTable $Absences
 * @method \App\Model\Entity\Absence[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class AbsencesController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Courses', 'Students'],
        ];
        $absences = $this->paginate($this->Absences);

        $this->set(compact('absences'));
    }

    /**
     * View method
     *
     * @param string|null $id Absence id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $absence = $this->Absences->get($id, [
            'contain' => ['Courses', 'Students'],
        ]);

        $this->set(compact('absence'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $absence = $this->Absences->newEmptyEntity();
        if ($this->request->is('post')) {
            $absence = $this->Absences->patchEntity($absence, $this->request->getData());
            if ($this->Absences->save($absence)) {
                $this->Flash->success(__('The absence has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The absence could not be saved. Please, try again.'));
        }
        $courses = $this->Absences->Courses->find('list', ['limit' => 200]);
        $students = $this->Absences->Students->find('list', ['limit' => 200]);
        $this->set(compact('absence', 'courses', 'students'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Absence id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $absence = $this->Absences->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $absence = $this->Absences->patchEntity($absence, $this->request->getData());
            if ($this->Absences->save($absence)) {
                $this->Flash->success(__('The absence has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The absence could not be saved. Please, try again.'));
        }
        $courses = $this->Absences->Courses->find('list', ['limit' => 200]);
        $students = $this->Absences->Students->find('list', ['limit' => 200]);
        $this->set(compact('absence', 'courses', 'students'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Absence id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $absence = $this->Absences->get($id);
        if ($this->Absences->delete($absence)) {
            $this->Flash->success(__('The absence has been deleted.'));
        } else {
            $this->Flash->error(__('The absence could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
