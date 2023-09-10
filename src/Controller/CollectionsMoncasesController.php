<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * CollectionsMoncases Controller
 *
 * @property \App\Model\Table\CollectionsMoncasesTable $CollectionsMoncases
 * @method \App\Model\Entity\CollectionsMoncase[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class CollectionsMoncasesController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Collections', 'Moncases'],
        ];
        $collectionsMoncases = $this->paginate($this->CollectionsMoncases);

        $this->set(compact('collectionsMoncases'));
    }

    /**
     * View method
     *
     * @param string|null $id Collections Moncase id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $collectionsMoncase = $this->CollectionsMoncases->get($id, [
            'contain' => ['Collections', 'Moncases'],
        ]);

        $this->set(compact('collectionsMoncase'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $collectionsMoncase = $this->CollectionsMoncases->newEmptyEntity();
        if ($this->request->is('post')) {
            $collectionsMoncase = $this->CollectionsMoncases->patchEntity($collectionsMoncase, $this->request->getData());
            if ($this->CollectionsMoncases->save($collectionsMoncase)) {
                $this->Flash->success(__('The collections moncase has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The collections moncase could not be saved. Please, try again.'));
        }
        $collections = $this->CollectionsMoncases->Collections->find('list', ['limit' => 200])->all();
        $moncases = $this->CollectionsMoncases->Moncases->find('list', ['limit' => 200])->all();
        $this->set(compact('collectionsMoncase', 'collections', 'moncases'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Collections Moncase id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $collectionsMoncase = $this->CollectionsMoncases->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $collectionsMoncase = $this->CollectionsMoncases->patchEntity($collectionsMoncase, $this->request->getData());
            if ($this->CollectionsMoncases->save($collectionsMoncase)) {
                $this->Flash->success(__('The collections moncase has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The collections moncase could not be saved. Please, try again.'));
        }
        $collections = $this->CollectionsMoncases->Collections->find('list', ['limit' => 200])->all();
        $moncases = $this->CollectionsMoncases->Moncases->find('list', ['limit' => 200])->all();
        $this->set(compact('collectionsMoncase', 'collections', 'moncases'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Collections Moncase id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $collectionsMoncase = $this->CollectionsMoncases->get($id);
        if ($this->CollectionsMoncases->delete($collectionsMoncase)) {
            $this->Flash->success(__('The collections moncase has been deleted.'));
        } else {
            $this->Flash->error(__('The collections moncase could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
