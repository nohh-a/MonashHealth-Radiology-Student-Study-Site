<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Support Controller
 *
 * @method \App\Model\Entity\Support[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class SupportController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $support = $this->paginate($this->Support);

        $this->set(compact('support'));
    }

    /**
     * View method
     *
     * @param string|null $id Support id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $support = $this->Support->get($id, [
            'contain' => [],
        ]);

        $this->set(compact('support'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $support = $this->Support->newEmptyEntity();
        if ($this->request->is('post')) {
            $support = $this->Support->patchEntity($support, $this->request->getData());
            if ($this->Support->save($support)) {
                $this->Flash->success(__('The support has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The support could not be saved. Please, try again.'));
        }
        $this->set(compact('support'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Support id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $support = $this->Support->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $support = $this->Support->patchEntity($support, $this->request->getData());
            if ($this->Support->save($support)) {
                $this->Flash->success(__('The support has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The support could not be saved. Please, try again.'));
        }
        $this->set(compact('support'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Support id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $support = $this->Support->get($id);
        if ($this->Support->delete($support)) {
            $this->Flash->success(__('The support has been deleted.'));
        } else {
            $this->Flash->error(__('The support could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }

    public function searchingfordata() {

        $firstName = $this->getRequest()->getSession()->read('Auth.first_name');
        $lastName = $this->getRequest()->getSession()->read('Auth.last_name');
        $author = $firstName . ' ' . $lastName;

        $username = $this->getRequest()->getSession()->read('Auth.username');

        $access_role = $this->getRequest()->getSession()->read('Auth.access_role');
        if ($access_role == 'ADMIN') {
            $this->viewBuilder()->setLayout('help');
        } else {
            $this->viewBuilder()->setLayout('help_notadmin');

        }

        $this->set(compact('author', 'username','access_role'));

    }

    public function archivingcases() {

        $firstName = $this->getRequest()->getSession()->read('Auth.first_name');
        $lastName = $this->getRequest()->getSession()->read('Auth.last_name');
        $author = $firstName . ' ' . $lastName;

        $username = $this->getRequest()->getSession()->read('Auth.username');

        $access_role = $this->getRequest()->getSession()->read('Auth.access_role');
        if ($access_role == 'ADMIN') {
            $this->viewBuilder()->setLayout('help');
        } else {
            $this->viewBuilder()->setLayout('help_notadmin');

        }

        $this->set(compact('author', 'username','access_role'));

    }

    public function changeuserpassword() {

        $firstName = $this->getRequest()->getSession()->read('Auth.first_name');
        $lastName = $this->getRequest()->getSession()->read('Auth.last_name');
        $author = $firstName . ' ' . $lastName;

        $username = $this->getRequest()->getSession()->read('Auth.username');

        $access_role = $this->getRequest()->getSession()->read('Auth.access_role');
        if ($access_role == 'ADMIN') {
            $this->viewBuilder()->setLayout('help');
        } else {
            $this->viewBuilder()->setLayout('help_notadmin');

        }

        $this->set(compact('author', 'username','access_role'));

    }

    public function editcase() {

        $firstName = $this->getRequest()->getSession()->read('Auth.first_name');
        $lastName = $this->getRequest()->getSession()->read('Auth.last_name');
        $author = $firstName . ' ' . $lastName;

        $username = $this->getRequest()->getSession()->read('Auth.username');

        $access_role = $this->getRequest()->getSession()->read('Auth.access_role');
        if ($access_role == 'ADMIN') {
            $this->viewBuilder()->setLayout('help');
        } else {
            $this->viewBuilder()->setLayout('help_notadmin');

        }

        $this->set(compact('author', 'username','access_role'));

    }

    public function editusers() {

        $firstName = $this->getRequest()->getSession()->read('Auth.first_name');
        $lastName = $this->getRequest()->getSession()->read('Auth.last_name');
        $author = $firstName . ' ' . $lastName;

        $username = $this->getRequest()->getSession()->read('Auth.username');

        $access_role = $this->getRequest()->getSession()->read('Auth.access_role');
        if ($access_role == 'ADMIN') {
            $this->viewBuilder()->setLayout('help');
        } else {
            $this->viewBuilder()->setLayout('help_notadmin');

        }

        $this->set(compact('author', 'username','access_role'));

    }

    public function newcases() {

        $firstName = $this->getRequest()->getSession()->read('Auth.first_name');
        $lastName = $this->getRequest()->getSession()->read('Auth.last_name');
        $author = $firstName . ' ' . $lastName;

        $username = $this->getRequest()->getSession()->read('Auth.username');

        $access_role = $this->getRequest()->getSession()->read('Auth.access_role');
        if ($access_role == 'ADMIN') {
            $this->viewBuilder()->setLayout('help');
        } else {
            $this->viewBuilder()->setLayout('help_notadmin');

        }

        $this->set(compact('author', 'username','access_role'));

    }

    public function newfolder() {

        $firstName = $this->getRequest()->getSession()->read('Auth.first_name');
        $lastName = $this->getRequest()->getSession()->read('Auth.last_name');
        $author = $firstName . ' ' . $lastName;

        $username = $this->getRequest()->getSession()->read('Auth.username');

        $access_role = $this->getRequest()->getSession()->read('Auth.access_role');
        if ($access_role == 'ADMIN') {
            $this->viewBuilder()->setLayout('help');
        } else {
            $this->viewBuilder()->setLayout('help_notadmin');

        }

        $this->set(compact('author', 'username','access_role'));

    }

    public function newuser() {

        $firstName = $this->getRequest()->getSession()->read('Auth.first_name');
        $lastName = $this->getRequest()->getSession()->read('Auth.last_name');
        $author = $firstName . ' ' . $lastName;

        $username = $this->getRequest()->getSession()->read('Auth.username');

        $access_role = $this->getRequest()->getSession()->read('Auth.access_role');
        if ($access_role == 'ADMIN') {
            $this->viewBuilder()->setLayout('help');
        } else {
            $this->viewBuilder()->setLayout('help_notadmin');

        }

        $this->set(compact('author', 'username','access_role'));

    }

    public function removeuser() {

        $firstName = $this->getRequest()->getSession()->read('Auth.first_name');
        $lastName = $this->getRequest()->getSession()->read('Auth.last_name');
        $author = $firstName . ' ' . $lastName;

        $username = $this->getRequest()->getSession()->read('Auth.username');

        $access_role = $this->getRequest()->getSession()->read('Auth.access_role');
        if ($access_role == 'ADMIN') {
            $this->viewBuilder()->setLayout('help');
        } else {
            $this->viewBuilder()->setLayout('help_notadmin');

        }

        $this->set(compact('author', 'username','access_role'));

    }

    public function savecase() {

        $firstName = $this->getRequest()->getSession()->read('Auth.first_name');
        $lastName = $this->getRequest()->getSession()->read('Auth.last_name');
        $author = $firstName . ' ' . $lastName;

        $username = $this->getRequest()->getSession()->read('Auth.username');

        $access_role = $this->getRequest()->getSession()->read('Auth.access_role');
        if ($access_role == 'ADMIN') {
            $this->viewBuilder()->setLayout('help');
        } else {
            $this->viewBuilder()->setLayout('help_notadmin');

        }

        $this->set(compact('author', 'username','access_role'));

    }

    public function searchcase() {

        $firstName = $this->getRequest()->getSession()->read('Auth.first_name');
        $lastName = $this->getRequest()->getSession()->read('Auth.last_name');
        $author = $firstName . ' ' . $lastName;

        $username = $this->getRequest()->getSession()->read('Auth.username');

        $access_role = $this->getRequest()->getSession()->read('Auth.access_role');
        if ($access_role == 'ADMIN') {
            $this->viewBuilder()->setLayout('help');
        } else {
            $this->viewBuilder()->setLayout('help_notadmin');

        }

        $this->set(compact('author', 'username','access_role'));

    }

    public function viewsavedcases() {

        $firstName = $this->getRequest()->getSession()->read('Auth.first_name');
        $lastName = $this->getRequest()->getSession()->read('Auth.last_name');
        $author = $firstName . ' ' . $lastName;

        $username = $this->getRequest()->getSession()->read('Auth.username');

        $access_role = $this->getRequest()->getSession()->read('Auth.access_role');
        if ($access_role == 'ADMIN') {
            $this->viewBuilder()->setLayout('help');
        } else {
            $this->viewBuilder()->setLayout('help_notadmin');

        }

        $this->set(compact('author', 'username','access_role'));

    }

    public function viewusers() {

        $firstName = $this->getRequest()->getSession()->read('Auth.first_name');
        $lastName = $this->getRequest()->getSession()->read('Auth.last_name');
        $author = $firstName . ' ' . $lastName;

        $username = $this->getRequest()->getSession()->read('Auth.username');

        $access_role = $this->getRequest()->getSession()->read('Auth.access_role');
        if ($access_role == 'ADMIN') {
            $this->viewBuilder()->setLayout('help');
        } else {
            $this->viewBuilder()->setLayout('help_notadmin');

        }

        $this->set(compact('author', 'username','access_role'));

    }
}
