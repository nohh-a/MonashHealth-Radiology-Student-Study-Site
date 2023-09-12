<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Saves Controller
 *
 * @property \App\Model\Table\SavesTable $Saves
 * @method \App\Model\Entity\Save[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class SavesController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Users'],
        ];
        $saves = $this->paginate($this->Saves);

        $this->set(compact('saves'));
    }

    /**
     * View method
     *
     * @param string|null $id Save id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $save = $this->Saves->get($id, [
            'contain' => ['Users'],
        ]);

        $this->set(compact('save'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $save = $this->Saves->newEmptyEntity();
        if ($this->request->is('post')) {
            $save = $this->Saves->patchEntity($save, $this->request->getData());
            if ($this->Saves->save($save)) {
                $this->Flash->success(__('The save has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The save could not be saved. Please, try again.'));
        }
        $users = $this->Saves->Users->find('list', ['limit' => 200])->all();
        $this->set(compact('save', 'users'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Save id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $save = $this->Saves->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $save = $this->Saves->patchEntity($save, $this->request->getData());
            if ($this->Saves->save($save)) {
                $this->Flash->success(__('The save has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The save could not be saved. Please, try again.'));
        }
        $users = $this->Saves->Users->find('list', ['limit' => 200])->all();
        $this->set(compact('save', 'users'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Save id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $save = $this->Saves->get($id);
        if ($this->Saves->delete($save)) {
            $this->Flash->success(__('The case has been unsaved.'));
        } else {
            $this->Flash->error(__('The case could not be unsaved. Please, try again.'));
        }

        return $this->redirect(['controller' => 'moncases', 'action' => 'savedcases']);
    }

    /**
     * Delete All method
     *
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function deleteAll()
    {
        $this->request->allowMethod(['post', 'delete']);

        // 删除所有记录
        if ($this->Saves->deleteAll([])) {
            $this->Flash->success(__('All cases have been unsaved.'));
        } else {
            $this->Flash->error(__('All cases could not be unsaved. Please, try again.'));
        }

        return $this->redirect(['controller' => 'moncases', 'action' => 'savedcases']);
    }



}
