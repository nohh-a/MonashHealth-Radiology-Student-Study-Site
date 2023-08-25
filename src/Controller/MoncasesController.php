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
                }
            }

            if ($this->Moncases->save($moncase)) {
                $this->Flash->success(__('The case has been saved.'));

                // check access_role, then redirect different page
                $access_role = $this->getRequest()->getSession()->read('Auth.access_role');
                if ($access_role == 'ADMIN') {
                    $this->redirect(['controller' => 'moncases', 'action' => 'userlist']);
                } else {
                    $this->redirect(['controller' => 'moncases', 'action' => 'userlistNotadmin']);
                }
            }
            $this->Flash->error(__('The case could not be saved. Please, try again.'));
        }

        $this->set(compact('moncase'));
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
        $moncase = $this->Moncases->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $moncase = $this->Moncases->patchEntity($moncase, $this->request->getData());
            if ($this->Moncases->save($moncase)) {
                $this->Flash->success(__('The moncase has been saved.'));

                // check access_role, then redirect different page
                $access_role = $this->getRequest()->getSession()->read('Auth.access_role');
                if ($access_role == 'ADMIN') {
                    $this->redirect(['controller' => 'moncases', 'action' => 'userlist']);
                } else {
                    $this->redirect(['controller' => 'moncases', 'action' => 'userlistNotadmin']);
                }
            }
            $this->Flash->error(__('The moncase could not be saved. Please, try again.'));
        }
        $this->set(compact('moncase'));
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
            $this->Flash->success(__('The moncase has been deleted.'));
        } else {
            $this->Flash->error(__('The moncase could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'userlist']);
    }

    public function oscer()
    {
        $moncases = $this->paginate($this->Moncases, [
            'conditions' => ['case_type' => 'Oscer'],
        ]);

        $this->set(compact('moncases'));
    }

    public function long()
    {
        $moncases = $this->paginate($this->Moncases, [
            'conditions' => ['case_type' => 'Long'],
        ]);

        $this->set(compact('moncases'));
    }

    public function medium()
    {
        $moncases = $this->paginate($this->Moncases, [
            'conditions' => ['case_type' => ',Medium'],
        ]);

        $this->set(compact('moncases'));
    }

    public function short()
    {
        $moncases = $this->paginate($this->Moncases, [
            'conditions' => ['case_type' => 'Short'],
        ]);

        $this->set(compact('moncases'));
    }

    public function general()
    {
        $moncases = $this->paginate($this->Moncases, [
            'conditions' => ['case_type' => 'General'],
        ]);

        $this->set(compact('moncases'));
    }

    public function userlist()
    {
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
}
