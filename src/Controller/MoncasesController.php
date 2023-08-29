<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Moncases Controller
 *
 * @property \App\Model\Table\MoncasesTable $Moncases
 * @method \App\Model\Entity\Moncase[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */

class MoncasesController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $access_role = $this->getRequest()->getSession()->read('Auth.access_role');
        if ($access_role !== 'ADMIN') {
            return $this->redirect(['controller' => 'moncases', 'action' => 'userlistNotadmin']);
        }

        $moncases = $this->paginate($this->Moncases);

        $oscerCount = $this->Moncases->find()
            ->where(['case_type' => 'Oscer'])
            ->count();

        $longCount = $this->Moncases->find()
            ->where(['case_type' => 'Long'])
            ->count();

        $mediumCount = $this->Moncases->find()
            ->where(['case_type' => 'Medium'])
            ->count();

        $shortCount = $this->Moncases->find()
            ->where(['case_type' => 'Short'])
            ->count();

        $generalCount = $this->Moncases->find()
            ->where(['case_type' => 'General'])
            ->count();

        $this->set(compact('moncases', 'oscerCount', 'longCount', 'mediumCount', 'shortCount', 'generalCount'));
    }

    /**
     * View method by admin
     *
     * @param string|null $id Moncase id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $access_role = $this->getRequest()->getSession()->read('Auth.access_role');
        if ($access_role !== 'ADMIN') {
            return $this->redirect(['controller' => 'moncases', 'action' => 'userlistNotadmin']);
        }

        $moncase = $this->Moncases->get($id, [
            'contain' => [],
        ]);

        $this->set(compact('moncase'));
    }

    /**
     * View method by not admin
     *
     * @param string|null $id Moncase id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function viewNotadmin($id = null)
    {

        $moncase = $this->Moncases->get($id, [
            'contain' => [],
        ]);

        $this->set(compact('moncase'));
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

        $moncase = $this->Moncases->newEmptyEntity();
        if ($this->request->is('post')) {
            $data = $this->request->getData();
            $moncase = $this->Moncases->patchEntity($moncase, $data);

            if (!$moncase->getErrors()) {
                $image = $this->request->getUploadedFile('image_url');
                $name = $image->getClientFilename();

                $targetPath = WWW_ROOT . 'img' . DS . 'uploads' . DS . $name;

                if (!empty($name)) {
                    $image->moveTo($targetPath);
                    $moncase->image_url = 'uploads/' . $name;
                } else {
                    $moncase->image_url = 'noimg.png';
                }
            }

            if ($this->Moncases->save($moncase)) {
                $this->Flash->success(__('The case has been saved.'));

                // check access_role, then redirect different page
                $access_role = $this->getRequest()->getSession()->read('Auth.access_role');
                if ($access_role == 'ADMIN') {
                    return $this->redirect(['controller' => 'moncases', 'action' => 'userlist']);
                } else {
                    return $this->redirect(['controller' => 'moncases', 'action' => 'userlistNotadmin']);
                }
            }
            $this->Flash->error(__('The case could not be saved. Please, try again.'));
        }

        $this->set(compact('moncase', 'author'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Moncase id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */

    public function edit($id = null)
    {
        $firstName = $this->getRequest()->getSession()->read('Auth.first_name');
        $lastName = $this->getRequest()->getSession()->read('Auth.last_name');

        $author = $firstName . ' ' . $lastName;

        $moncase = $this->Moncases->get($id, [
            'contain' => [],
        ]);

        $originalImageUrl = $moncase->image_url; // Store the original image URL

        if ($this->request->is(['patch', 'post', 'put'])) {
            $moncase = $this->Moncases->patchEntity($moncase, $this->request->getData());

            $uploadedFile = $this->request->getUploadedFile('image_url');
            if ($uploadedFile && $uploadedFile->getError() === UPLOAD_ERR_OK) {
                $name = $uploadedFile->getClientFilename();
                $targetPath = WWW_ROOT . 'img' . DS . 'uploads' . DS . $name;
                $uploadedFile->moveTo($targetPath);

                // Delete the old image if it exists
                $oldImagePath = WWW_ROOT . 'img' . DS . $originalImageUrl;
                if (file_exists($oldImagePath)) {
                    unlink($oldImagePath);
                }

                $moncase->image_url = 'uploads/' . $name;
            } else {
                // If no new image uploaded, retain the original image URL
                $moncase->image_url = $originalImageUrl;
            }

            if ($this->Moncases->save($moncase)) {
                $this->Flash->success(__('The moncase has been saved.'));

                // Redirect logic based on access_role
                $accessRole = $this->getRequest()->getSession()->read('Auth.access_role');
                $redirectAction = $accessRole == 'ADMIN' ? 'userlist' : 'userlistNotadmin';

                return $this->redirect(['controller' => 'moncases', 'action' => $redirectAction]);
            }

            $this->Flash->error(__('The moncase could not be saved. Please, try again.'));
        }

        $this->set(compact('moncase', 'author'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Moncase id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $moncase = $this->Moncases->get($id);
        if ($this->Moncases->delete($moncase)) {
            $this->Flash->success(__('The case has been deleted.'));
        } else {
            $this->Flash->error(__('The case could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'userlist']);
    }

    public function userlist()
    {
        $access_role = $this->getRequest()->getSession()->read('Auth.access_role');
        if ($access_role !== 'ADMIN') {
            return $this->redirect(['controller' => 'moncases', 'action' => 'userlistNotadmin']);
        }

        // obtain cases list
        $moncases = $this->Moncases->find();

        //search functionality
        $search = $this->request->getQuery('search');
        if ($search) {
            $moncases->where(['OR' => [
                'differential_diagnosis LIKE' => "%$search%",
                'diagnosis LIKE' => "%$search%",
            ]]);
        }

        // filter functionality
        $filter = [];
        $caseTypeFilter = $this->request->getQuery('case_type');
        $contributorFilter = $this->request->getQuery('contributor');
        $ratingFilter = $this->request->getQuery('rating');
        /* $imagingFilter = $this->request->getQuery('imaging'); */

        if ($caseTypeFilter !== '') {
            $filter[] = ['case_type LIKE' => '%' . $caseTypeFilter . '%'];
        }
        if ($contributorFilter !== '') {
            $filter[] = ['contributor LIKE' => '%' . $contributorFilter . '%'];
        }
        if ($ratingFilter !== '') {
            $ratingFilter = (int)$ratingFilter;
            if ($ratingFilter > 0 && $ratingFilter <= 5) {
                $filter[] = ['rating' => $ratingFilter];
            }
        }
        if ($filter) {
            $moncases->where(['AND' => $filter]);
        }

        // Sorting feature
        $sort = $this->request->getQuery('sort');
        switch ($sort) {
            case 'newest':
                $moncases->order(['date' => 'DESC']);
                break;
            case 'oldest':
                $moncases->order(['date' => 'ASC']);
                break;
            case 'az':
                $moncases->order(['differential_diagnosis' => 'ASC']);
                break;
            case 'za':
                $moncases->order(['differential_diagnosis' => 'DESC']);
                break;
            case 'rating_asc':
                $moncases->order(['rating' => 'ASC']);
                break;
            case 'rating_desc':
                $moncases->order(['rating' => 'DESC']);
        }

        $this->set(compact('moncases', 'search', 'filter', 'sort'));
    }

    public function userlistNotadmin()
    {
        $access_role = $this->getRequest()->getSession()->read('Auth.access_role');
        if ($access_role == 'ADMIN') {
            return $this->redirect(['controller' => 'moncases', 'action' => 'userlist']);
        }

        // obtain cases list
        $moncases = $this->Moncases->find();

        //search functionality
        $search = $this->request->getQuery('search');
        if ($search) {
            $moncases->where(['OR' => [
                'differential_diagnosis LIKE' => "%$search%",
                'diagnosis LIKE' => "%$search%",
            ]]);
        }

        // filter functionality
        $filter = [];
        $caseTypeFilter = $this->request->getQuery('case_type');
        $contributorFilter = $this->request->getQuery('contributor');
        $ratingFilter = $this->request->getQuery('rating');
        /* $imagingFilter = $this->request->getQuery('imaging'); */

        if ($caseTypeFilter !== '') {
            $filter[] = ['case_type LIKE' => '%' . $caseTypeFilter . '%'];
        }
        if ($contributorFilter !== '') {
            $filter[] = ['contributor LIKE' => '%' . $contributorFilter . '%'];
        }
        if ($ratingFilter !== '') {
            $ratingFilter = (int)$ratingFilter;
            if ($ratingFilter > 0 && $ratingFilter <= 5) {
                $filter[] = ['rating' => $ratingFilter];
            }
        }
        if ($filter) {
            $moncases->where(['AND' => $filter]);
        }

        // Sorting feature
        $sort = $this->request->getQuery('sort');
        switch ($sort) {
            case 'newest':
                $moncases->order(['date' => 'DESC']);
                break;
            case 'oldest':
                $moncases->order(['date' => 'ASC']);
                break;
            case 'az':
                $moncases->order(['differential_diagnosis' => 'ASC']);
                break;
            case 'za':
                $moncases->order(['differential_diagnosis' => 'DESC']);
                break;
            case 'rating_asc':
                $moncases->order(['rating' => 'ASC']);
                break;
            case 'rating_desc':
                $moncases->order(['rating' => 'DESC']);
        }

        $this->set(compact('moncases', 'search', 'filter', 'sort'));
    }

    public function addnewcase()
    {
        $moncases = $this->paginate($this->Moncases);

        $this->set(compact('moncases'));
    }

    public function addoscer()
    {

        $firstName = $this->getRequest()->getSession()->read('Auth.first_name');
        $lastName = $this->getRequest()->getSession()->read('Auth.last_name');

        $author = $firstName . ' ' . $lastName;

        $moncase = $this->Moncases->newEmptyEntity();
        if ($this->request->is('post')) {
            $data = $this->request->getData();
            $moncase = $this->Moncases->patchEntity($moncase, $data);

            if (!$moncase->getErrors()) {
                $image = $this->request->getUploadedFile('image_url');
//                debug($image);
                $name = $image->getClientFilename();

                $targetPath = WWW_ROOT . 'img' . DS . 'uploads' . DS . $name;

                if ($name) {
                    $image->moveTo($targetPath);
                    $moncase->image_url = 'uploads/' . $name;
                }else {
                    $moncase->image_url = 'noimg.png';
                }
            }

            if ($this->Moncases->save($moncase)) {
                $this->Flash->success(__('The case has been saved.'));

                // check access_role, then redirect different page
                $access_role = $this->getRequest()->getSession()->read('Auth.access_role');
                if ($access_role == 'ADMIN') {
                    return $this->redirect(['controller' => 'moncases', 'action' => 'userlist']);
                } else {
                    return $this->redirect(['controller' => 'moncases', 'action' => 'userlistNotadmin']);
                }
            }
            $this->Flash->error(__('The case could not be saved. Please, try again.'));
        }

        $this->set(compact('moncase', 'author'));
    }

    public function addlong()
    {
        $firstName = $this->getRequest()->getSession()->read('Auth.first_name');
        $lastName = $this->getRequest()->getSession()->read('Auth.last_name');

        $author = $firstName . ' ' . $lastName;

        $moncase = $this->Moncases->newEmptyEntity();
        if ($this->request->is('post')) {
            $data = $this->request->getData();
            $moncase = $this->Moncases->patchEntity($moncase, $data);

            if (!$moncase->getErrors()) {
                $image = $this->request->getUploadedFile('image_url');
//                debug($image);
                $name = $image->getClientFilename();

                $targetPath = WWW_ROOT . 'img' . DS . 'uploads' . DS . $name;

                if ($name) {
                    $image->moveTo($targetPath);
                    $moncase->image_url = 'uploads/' . $name;
                }else {
                    $moncase->image_url = 'noimg.png';
                }
            }

            if ($this->Moncases->save($moncase)) {
                $this->Flash->success(__('The case has been saved.'));

                // check access_role, then redirect different page
                $access_role = $this->getRequest()->getSession()->read('Auth.access_role');
                if ($access_role == 'ADMIN') {
                    return $this->redirect(['controller' => 'moncases', 'action' => 'userlist']);
                } else {
                    return $this->redirect(['controller' => 'moncases', 'action' => 'userlistNotadmin']);
                }
            }
            $this->Flash->error(__('The case could not be saved. Please, try again.'));
        }

        $this->set(compact('moncase', 'author'));
    }

    public function addmedium()
    {

        $firstName = $this->getRequest()->getSession()->read('Auth.first_name');
        $lastName = $this->getRequest()->getSession()->read('Auth.last_name');

        $author = $firstName . ' ' . $lastName;

        $moncase = $this->Moncases->newEmptyEntity();
        if ($this->request->is('post')) {
            $data = $this->request->getData();
            $moncase = $this->Moncases->patchEntity($moncase, $data);

            if (!$moncase->getErrors()) {
                $image = $this->request->getUploadedFile('image_url');
//                debug($image);
                $name = $image->getClientFilename();

                $targetPath = WWW_ROOT . 'img' . DS . 'uploads' . DS . $name;

                if ($name) {
                    $image->moveTo($targetPath);
                    $moncase->image_url = 'uploads/' . $name;
                }else {
                    $moncase->image_url = 'noimg.png';
                }
            }

            if ($this->Moncases->save($moncase)) {
                $this->Flash->success(__('The case has been saved.'));

                // check access_role, then redirect different page
                $access_role = $this->getRequest()->getSession()->read('Auth.access_role');
                if ($access_role == 'ADMIN') {
                    return $this->redirect(['controller' => 'moncases', 'action' => 'userlist']);
                } else {
                    return $this->redirect(['controller' => 'moncases', 'action' => 'userlistNotadmin']);
                }
            }
            $this->Flash->error(__('The case could not be saved. Please, try again.'));
        }

        $this->set(compact('moncase', 'author'));
    }

    public function addshort()
    {
        $firstName = $this->getRequest()->getSession()->read('Auth.first_name');
        $lastName = $this->getRequest()->getSession()->read('Auth.last_name');

        $author = $firstName . ' ' . $lastName;

        $moncase = $this->Moncases->newEmptyEntity();
        if ($this->request->is('post')) {
            $data = $this->request->getData();
            $moncase = $this->Moncases->patchEntity($moncase, $data);

            if (!$moncase->getErrors()) {
                $image = $this->request->getUploadedFile('image_url');
//                debug($image);
                $name = $image->getClientFilename();

                $targetPath = WWW_ROOT . 'img' . DS . 'uploads' . DS . $name;

                if ($name) {
                    $image->moveTo($targetPath);
                    $moncase->image_url = 'uploads/' . $name;
                }else {
                    $moncase->image_url = 'noimg.png';
                }
            }

            if ($this->Moncases->save($moncase)) {
                $this->Flash->success(__('The case has been saved.'));

                // check access_role, then redirect different page
                $access_role = $this->getRequest()->getSession()->read('Auth.access_role');
                if ($access_role == 'ADMIN') {
                    return $this->redirect(['controller' => 'moncases', 'action' => 'userlist']);
                } else {
                    return $this->redirect(['controller' => 'moncases', 'action' => 'userlistNotadmin']);
                }
            }
            $this->Flash->error(__('The case could not be saved. Please, try again.'));
        }

        $this->set(compact('moncase', 'author'));
    }

    public function addgeneral()
    {

        $firstName = $this->getRequest()->getSession()->read('Auth.first_name');
        $lastName = $this->getRequest()->getSession()->read('Auth.last_name');

        $author = $firstName . ' ' . $lastName;

        $moncase = $this->Moncases->newEmptyEntity();
        if ($this->request->is('post')) {
            $data = $this->request->getData();
            $moncase = $this->Moncases->patchEntity($moncase, $data);

            if (!$moncase->getErrors()) {
                $image = $this->request->getUploadedFile('image_url');
//                debug($image);
                $name = $image->getClientFilename();

                $targetPath = WWW_ROOT . 'img' . DS . 'uploads' . DS . $name;

                if ($name) {
                    $image->moveTo($targetPath);
                    $moncase->image_url = 'uploads/' . $name;
                }else {
                    $moncase->image_url = 'noimg.png';
                }
            }

            if ($this->Moncases->save($moncase)) {
                $this->Flash->success(__('The case has been saved.'));

                // check access_role, then redirect different page
                $access_role = $this->getRequest()->getSession()->read('Auth.access_role');
                if ($access_role == 'ADMIN') {
                    return $this->redirect(['controller' => 'moncases', 'action' => 'userlist']);
                } else {
                    return $this->redirect(['controller' => 'moncases', 'action' => 'userlistNotadmin']);
                }
            }
            $this->Flash->error(__('The case could not be saved. Please, try again.'));
        }

        $this->set(compact('moncase', 'author'));
    }
}
