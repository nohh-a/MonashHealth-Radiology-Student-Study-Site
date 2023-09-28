<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Collections Controller
 *
 * @property \App\Model\Table\CollectionsTable $Collections
 * @method \App\Model\Entity\Collection[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class CollectionsController extends AppController
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
        $collections = $this->paginate($this->Collections);

        $this->set(compact('collections'));
    }

    /**
     * View method
     *
     * @param string|null $id Collection id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $collection = $this->Collections->get($id, [
            'contain' => ['Users', 'Moncases'],
        ]);

        $this->set(compact('collection'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $collection = $this->Collections->newEmptyEntity();
        if ($this->request->is('post')) {
            $collection = $this->Collections->patchEntity($collection, $this->request->getData());
            if ($this->Collections->save($collection)) {
                $this->Flash->success(__('The collection has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The collection could not be saved. Please, try again.'));
        }
        $users = $this->Collections->Users->find('list', ['limit' => 200])->all();
        $moncases = $this->Collections->Moncases->find('list', ['limit' => 200])->all();
        $this->set(compact('collection', 'users', 'moncases'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Collection id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $collection = $this->Collections->get($id, [
            'contain' => ['Moncases'],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $collection = $this->Collections->patchEntity($collection, $this->request->getData());
            if ($this->Collections->save($collection)) {
                $this->Flash->success(__('The collection has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The collection could not be saved. Please, try again.'));
        }
        $users = $this->Collections->Users->find('list', ['limit' => 200])->all();
        $moncases = $this->Collections->Moncases->find('list', ['limit' => 200])->all();
        $this->set(compact('collection', 'users', 'moncases'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Collection id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $collection = $this->Collections->get($id);
        if ($this->Collections->delete($collection)) {
            $this->Flash->success(__('The collection has been deleted.'));
        } else {
            $this->Flash->error(__('The collection could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }


    /**
     * create collection method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful collection, renders view otherwise.
     */
    public function createCollection($id = null)
    {
        $userId = $this->getRequest()->getSession()->read('Auth.id');

        $collection = $this->Collections->newEmptyEntity();

        if ($this->request->is('post')) {

            $collectionData = [
                'name' => $this->request->getData('name'),
                'user_id' => $userId,
            ];

            $collection = $this->Collections->patchEntity($collection, $collectionData);

            $this->Collections->save($collection);

            $collectionsMoncasesTable = $this->fetchTable('CollectionsMoncases');
            $collectionsMoncases = $collectionsMoncasesTable->newEmptyEntity();

            $collectionId = $collection->id;
            $moncaseId = $id;

            $collectionsMoncasesData = [
                'collection_id' => $collectionId,
                'moncase_id' => $moncaseId
            ];

            $collectionsMoncases = $collectionsMoncasesTable->patchEntity($collectionsMoncases, $collectionsMoncasesData);

            if ($collectionsMoncasesTable->save($collectionsMoncases)) {

                $this->Flash->success(__('The collection has been saved.'));

                return $this->redirect(['controller' => 'moncases', 'action' => 'savedcases']);
            }
            $this->Flash->error(__('The collection could not be saved. Please, try again.'));
        }

        $users = $this->Collections->Users->find('list', ['limit' => 200])->all();
        $moncases = $this->Collections->Moncases->find('list', ['limit' => 200])->all();
        $this->set(compact('collection', 'users', 'moncases'));

    }

}
