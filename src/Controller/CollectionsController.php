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
        $firstName = $this->getRequest()->getSession()->read('Auth.first_name');
        $lastName = $this->getRequest()->getSession()->read('Auth.last_name');
        $author = $firstName . ' ' . $lastName;

        $username = $this->getRequest()->getSession()->read('Auth.username');
        // Get the current user's ID
        $userId = $this->getRequest()->getSession()->read('Auth.id');

        $access_role = $this->getRequest()->getSession()->read('Auth.access_role');
        if ($access_role == 'ADMIN') {
            $this->viewBuilder()->setLayout('admin');
        } else {
            $this->viewBuilder()->setLayout('notadmin');

        }

        $this->paginate = [
            'contain' => ['Users'],
            'conditions' => ['Collections.user_id' => $userId], // Add criteria to filter users
        ];
        $collections = $this->paginate($this->Collections);

        $this->set(compact('collections','author','username'));

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
        $firstName = $this->getRequest()->getSession()->read('Auth.first_name');
        $lastName = $this->getRequest()->getSession()->read('Auth.last_name');
        $author = $firstName . ' ' . $lastName;

        $username = $this->getRequest()->getSession()->read('Auth.username');

        $access_role = $this->getRequest()->getSession()->read('Auth.access_role');
        if ($access_role == 'ADMIN') {
            $this->viewBuilder()->setLayout('admin');
        } else {
            $this->viewBuilder()->setLayout('notadmin');

        }

        $collection = $this->Collections->get($id, [
            'contain' => ['Users', 'Moncases'],
        ]);

        $this->set(compact('collection','author','username'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $firstName = $this->getRequest()->getSession()->read('Auth.first_name');
        $lastName = $this->getRequest()->getSession()->read('Auth.last_name');
        $author = $firstName . ' ' . $lastName;

        $username = $this->getRequest()->getSession()->read('Auth.username');

        $access_role = $this->getRequest()->getSession()->read('Auth.access_role');
        if ($access_role == 'ADMIN') {
            $this->viewBuilder()->setLayout('admin');
        } else {
            $this->viewBuilder()->setLayout('notadmin');

        }

        // Get the current user's ID
        $userId = $this->getRequest()->getSession()->read('Auth.id');

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

        $diagnosis = $this->Collections->Moncases->find('list', [
            'keyField' => 'id', // Set case ID as key
            'valueField' => 'diagnosis', // Set the diagnosis attribute of the case as the display text
            'limit' => 200
        ])->toArray();

        $accession_no = $this->Collections->Moncases->find('list', [
            'keyField' => 'id', // Set case ID as key
            'valueField' => 'accession_no', // Set the accession_no attribute of the case as the display text
            'limit' => 200
        ])->toArray();

        $this->set(compact('collection', 'users', 'moncases', 'diagnosis', 'accession_no', 'userId','author','username'));
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

        $firstName = $this->getRequest()->getSession()->read('Auth.first_name');
        $lastName = $this->getRequest()->getSession()->read('Auth.last_name');
        $author = $firstName . ' ' . $lastName;

        $username = $this->getRequest()->getSession()->read('Auth.username');

        $access_role = $this->getRequest()->getSession()->read('Auth.access_role');
        if ($access_role == 'ADMIN') {
            $this->viewBuilder()->setLayout('admin');
        } else {
            $this->viewBuilder()->setLayout('notadmin');

        }
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

        $diagnosis = $this->Collections->Moncases->find('list', [
            'keyField' => 'id', // Set case ID as key
            'valueField' => 'diagnosis', // Set the diagnosis attribute of the case as the display text
            'limit' => 200
        ])->toArray();

        $accession_no = $this->Collections->Moncases->find('list', [
            'keyField' => 'id', // Set case ID as key
            'valueField' => 'accession_no', // Set the accession_no attribute of the case as the display text
            'limit' => 200
        ])->toArray();

        $this->set(compact('collection', 'users', 'moncases', 'diagnosis', 'accession_no','author','username'));
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

            if ($this->Collections->save($collection)) {
                $collectionsMoncasesTable = $this->fetchTable('CollectionsMoncases');
                $collectionsMoncases = $collectionsMoncasesTable->newEmptyEntity();

                $collectionId = $collection->id;
                $moncaseId = $id;

                $collectionsMoncasesData = [
                    'collection_id' => $collectionId,
                    'moncase_id' => $moncaseId
                ];

                $collectionsMoncases = $collectionsMoncasesTable->patchEntity($collectionsMoncases, $collectionsMoncasesData);

                $collectionsMoncasesTable->save($collectionsMoncases);

                $this->Flash->success(__('The collection folder has been created and the current case has been automatically added to the folder. Check it in My Collections!'));

                return $this->redirect(['controller' => 'moncases', 'action' => 'savedcases']);
            }
            $this->Flash->error(__('The collection could not be created. Please, try again.'));
        }

        $users = $this->Collections->Users->find('list', ['limit' => 200])->all();
        $moncases = $this->Collections->Moncases->find('list', ['limit' => 200])->all();
        $this->set(compact('collection', 'users', 'moncases'));

    }

    /**
     * select collection Folder method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful collection, renders view otherwise.
     */
    public function selectFolder($id = null) {

        $firstName = $this->getRequest()->getSession()->read('Auth.first_name');
        $lastName = $this->getRequest()->getSession()->read('Auth.last_name');
        $author = $firstName . ' ' . $lastName;

        $username = $this->getRequest()->getSession()->read('Auth.username');

        $access_role = $this->getRequest()->getSession()->read('Auth.access_role');
        if ($access_role == 'ADMIN') {
            $this->viewBuilder()->setLayout('admin');
        } else {
            $this->viewBuilder()->setLayout('notadmin');

        }

        // Get the current user's ID
        $userId = $this->getRequest()->getSession()->read('Auth.id');

        // for page checkbox, showing collection name
        $collections = $this->Collections->find()
            ->select(['name'])
            ->where(['user_id' => $userId])
            ->toList();

        $name = $this->Collections->find('list', [
            'keyField' => 'id',
            'valueField' => 'name',
            'limit' => 200,
        ])->where(['user_id' => $userId])->toArray();

        //submit form
        if ($this->request->is('post')) {
            $collectionId = $this->request->getData('collection_name');

            $collectionsMoncasesTable = $this->fetchTable('CollectionsMoncases');
            $collectionsMoncases = $collectionsMoncasesTable->newEmptyEntity();

            $moncaseId = $id;

            $collectionsMoncasesData = [
                'collection_id' => $collectionId,
                'moncase_id' => $moncaseId
            ];

            $collectionsMoncases = $collectionsMoncasesTable->patchEntity($collectionsMoncases, $collectionsMoncasesData);

            if ($collectionsMoncasesTable->save($collectionsMoncases)) {
                $this->Flash->success(__('The case has been added to the collection folder. Check it in My Collections!'));

                return $this->redirect(['controller' => 'moncases', 'action' => 'savedcases']);
            }
            $this->Flash->error(__('The collection could not be added to the collection folder. Please, try again.'));

        }

        $this->set(compact('collections', 'name','username','author'));

    }



}
