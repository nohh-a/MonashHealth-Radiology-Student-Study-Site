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
        } else {
            return $this->redirect(['controller' => 'moncases', 'action' => 'userlist']);
        }
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
        $firstName = $this->getRequest()->getSession()->read('Auth.first_name');
        $lastName = $this->getRequest()->getSession()->read('Auth.last_name');
        $author = $firstName . ' ' . $lastName;

        $username = $this->getRequest()->getSession()->read('Auth.username');
        $userId = $this->getRequest()->getSession()->read('Auth.id');

        $access_role = $this->getRequest()->getSession()->read('Auth.access_role');
        if ($access_role !== 'ADMIN') {
            return $this->redirect(['controller' => 'moncases', 'action' => 'userlistNotadmin']);
        }

        $moncase = $this->Moncases->get($id, [
            'contain' => [],
        ]);

        // Get the model instance of the Collections table
        $collectionsTable = $this->fetchTable('Collections');

        $collectionCount = $collectionsTable->find()
            ->where(['user_id' => $userId])
            ->count();

        $this->set(compact('moncase', 'author', 'username', 'collectionCount'));
        $this->viewBuilder()->setLayout('admin');

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
        $firstName = $this->getRequest()->getSession()->read('Auth.first_name');
        $lastName = $this->getRequest()->getSession()->read('Auth.last_name');
        $author = $firstName . ' ' . $lastName;

        $username = $this->getRequest()->getSession()->read('Auth.username');
        $userId = $this->getRequest()->getSession()->read('Auth.id');

        $moncase = $this->Moncases->get($id, [
            'contain' => [],
        ]);

        $caseAuthor = $moncase->author; // get the author of the case

        // Get the model instance of the Collections table
        $collectionsTable = $this->fetchTable('Collections');

        $collectionCount = $collectionsTable->find()
            ->where(['user_id' => $userId])
            ->count();

        $this->set(compact('moncase', 'author', 'username', 'caseAuthor', 'collectionCount'));
        $this->viewBuilder()->setLayout('notadmin');

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

                if ($name) {
                    $image->moveTo($targetPath);
                    $moncase->image_url = 'uploads/' . $name;
                } else {
                    $moncase->image_url = 'noimg.png';
                }
            }

            if ($this->Moncases->save($moncase)) {
                $this->Flash->success(__('The case has been saved.'));

                // Redirect logic based on access_role
                $accessRole = $this->getRequest()->getSession()->read('Auth.access_role');
                $redirectAction = $accessRole == 'ADMIN' ? 'userlist' : 'userlistNotadmin';

                return $this->redirect(['controller' => 'moncases', 'action' => $redirectAction]);

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
        $username = $this->getRequest()->getSession()->read('Auth.username');


        $author = $firstName . ' ' . $lastName;

        $contributor = $this->getRequest()->getSession()->read('Auth.contributor');

        $moncase = $this->Moncases->get($id, [
            'contain' => [],
        ]);

//        debug($moncase);

        $accessRole = $this->getRequest()->getSession()->read('Auth.access_role');
        $caseAuthor = $moncase->author; // get the author of the case

        // redirect when a user want edit others cases.
        // admin can edit anyone
        if ($caseAuthor != $author && $accessRole != 'ADMIN') {
            $this->Flash->error(__('You do not have permission to edit cases from other people'));
            return $this->redirect(['controller' => 'moncases', 'action' => 'userlistNotadmin']);
        }

        $originalImageUrl = $moncase->image_url; // Store the original image URL

//        debug($originalImageUrl);

        if ($this->request->is(['patch', 'post', 'put'])) {
            $moncase = $this->Moncases->patchEntity($moncase, $this->request->getData());

//            debug($moncase);
//            debug(!$moncase->getErrors());

            if (!$moncase->getErrors()) {

                $uploadedFile = $this->request->getUploadedFile('image_url');
//                debug($uploadedFile);
//
//                debug($uploadedFile->getError() === UPLOAD_ERR_OK);
//
//                debug($uploadedFile && $uploadedFile->getError() === UPLOAD_ERR_OK);

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
            }

//            debug($this->Moncases->save($moncase));

            if ($this->Moncases->save($moncase)) {
                $this->Flash->success(__('The case has been saved.'));

                // Redirect logic based on access_role
                $redirectAction = $accessRole == 'ADMIN' ? 'view' : 'viewNotadmin';

                return $this->redirect(['controller' => 'moncases', 'action' => $redirectAction, $id]);
            }

            $this->Flash->error(__('The case could not be saved. Please, try again.'));
        }

        $this->set(compact('moncase', 'author', 'contributor','username'));
        $this->viewBuilder()->setLayout('moncase');

    }

    /**
     * Delete method
     *
     * @param string|null $id Moncase id.
     * @return \Cake\Http\Response|null|void Redirects to .
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

        return $this->redirect(['action' => 'archivedcases']);
    }

    /**
     * Delete all archived cases method
     *
     * @param string|null $id Moncase id.
     * @return \Cake\Http\Response|null|void Redirects to userlist.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function deleteall() {
        $this->request->allowMethod(['post', 'delete']);

        // Add a condition to delete all cases that meet certain criteria.
        $conditions = [
            // Define your criteria to delete cases here.
            // For example, you can delete all cases with 'archive_status' equal to 'yes'.
            'archive_status' => 'yes',
        ];

        if ($this->Moncases->deleteAll($conditions)) {
            $this->Flash->success(__('All cases have been deleted.'));
        } else {
            $this->Flash->error(__('The cases could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'archivedcases']);
    }

    /**
     * userlist page for admin users method
     *
     * @param string|null $id Moncase id.
     * @return \Cake\Http\Response|null|void Redirects to userlist page.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function userlist()
    {
        $firstName = $this->getRequest()->getSession()->read('Auth.first_name');
        $lastName = $this->getRequest()->getSession()->read('Auth.last_name');
        $author = $firstName . ' ' . $lastName;

        $username = $this->getRequest()->getSession()->read('Auth.username');


        $access_role = $this->getRequest()->getSession()->read('Auth.access_role');
        if ($access_role !== 'ADMIN') {
            return $this->redirect(['controller' => 'moncases', 'action' => 'userlistNotadmin']);
        }

        // obtain cases list
        $moncases = $this->Moncases->find()
            // Add a condition to filter archive_status
            ->where(['archive_status' => 'no'])
            // Add sorting order
            ->order(['date' => 'DESC']);


        // PC
        // search functionality PC
        $search = $this->request->getQuery('search');
        if ($search) {
            $moncases->where(['OR' => [
                'differential_diagnosis LIKE' => "%$search%",
                'diagnosis LIKE' => "%$search%",
                'author LIKE' => "%$search%",
                'seen_by LIKE' => "%$search%",
                'teaching_points LIKE' => "%$search%",
                'accession_no LIKE' => "%$search%",
            ]]);
        }

        // filter functionality PC
        $filter = [];
        $caseTypeFilter = $this->request->getQuery('case_type');
        $contributorFilter = $this->request->getQuery('contributor');
        $ratingFilter = $this->request->getQuery('rating');
        $specialtyFilter = $this->request->getQuery('specialty');
        $imagingFilter = $this->request->getQuery('imaging');

        if (!empty($caseTypeFilter)) {
            foreach ($caseTypeFilter as $caseTypeFilter) {
                $filter[] = ['case_type LIKE' => '%' . $caseTypeFilter . '%'];
            }
        }

        if (!empty($contributorFilter)) {
            foreach ($contributorFilter as $contributorFilter) {
                $filter[] = ['contributor LIKE' => '%' . $contributorFilter . '%'];
            }
        }

        if (!empty($ratingFilter) && is_array($ratingFilter)) {
            $ratingFilter = array_map('intval', $ratingFilter);
            $filter[] = ['rating IN' => $ratingFilter];
        }
        if (!empty($specialtyFilter)) {
            foreach ($specialtyFilter as $specialtyFilter) {
                $filter[] = ['specialty LIKE' => '%' . $specialtyFilter . '%'];
            }
        }

        if (!empty($imagingFilter)) {
            foreach ($imagingFilter as $imagingFilter) {
                $filter[] = ['imaging LIKE' => '%' . $imagingFilter . '%'];
            }
        }

        if ($filter) {
            $moncases->where(['OR' => $filter]);
        }

        // Mobile
        // search functionality Mobile
        $search_mobile = $this->request->getQuery('search_mobile');
        if ($search_mobile) {
            $moncases->where(['OR' => [
                'differential_diagnosis LIKE' => "%$search_mobile%",
                'diagnosis LIKE' => "%$search_mobile%",
                'author LIKE' => "%$search_mobile%",
                'seen_by LIKE' => "%$search_mobile%",
                'teaching_points LIKE' => "%$search_mobile%",
                'accession_no LIKE' => "%$search_mobile%",
            ]]);
        }

        // filter functionality Mobile
        $filter_mobile = [];
        $caseTypeFilter_mobile = $this->request->getQuery('case_type_mobile');
        $contributorFilter_mobile = $this->request->getQuery('contributor_mobile');
        $ratingFilter_mobile = $this->request->getQuery('rating_mobile');
        $specialtyFilter_mobile = $this->request->getQuery('specialty_mobile');
        $imagingFilter_mobile = $this->request->getQuery('imaging_mobile');

        if (!empty($caseTypeFilter_mobile)) {
            foreach ($caseTypeFilter_mobile as $caseTypeFilter_mobile) {
                $filter_mobile[] = ['case_type LIKE' => '%' . $caseTypeFilter_mobile . '%'];
            }
        }

        if (!empty($contributorFilter_mobile)) {
            foreach ($contributorFilter_mobile as $contributorFilter_mobile) {
                $filter_mobile[] = ['contributor LIKE' => '%' . $contributorFilter_mobile . '%'];
            }
        }

        if (!empty($ratingFilter_mobile) && is_array($ratingFilter_mobile)) {
            $ratingFilter_mobile = array_map('intval', $ratingFilter_mobile);
            $filter_mobile[] = ['rating IN' => $ratingFilter_mobile];
        }
        if (!empty($specialtyFilter_mobile)) {
            foreach ($specialtyFilter_mobile as $specialtyFilter_mobile) {
                $filter_mobile[] = ['specialty LIKE' => '%' . $specialtyFilter_mobile . '%'];
            }
        }

        if (!empty($imagingFilter_mobile)) {
            foreach ($imagingFilter_mobile as $imagingFilter_mobile) {
                $filter_mobile[] = ['imaging LIKE' => '%' . $imagingFilter_mobile . '%'];
            }
        }

        if ($filter_mobile) {
            $moncases->where(['OR' => $filter_mobile]);
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
                $moncases->order(['diagnosis' => 'ASC']);
                break;
            case 'za':
                $moncases->order(['diagnosis' => 'DESC']);
                break;
            case 'rating_asc':
                $moncases->order(['rating' => 'ASC']);
                break;
            case 'rating_desc':
                $moncases->order(['rating' => 'DESC']);
        }

        // Use the Paginator component to paginate the query
        $moncases = $this->paginate($moncases, [
            'limit' => 9, // Number of records per page
            'order' => ['date' => 'DESC'], // Default sorting order
        ]);

        $this->set(compact('moncases', 'search', 'filter', 'search_mobile', 'filter_mobile','sort', 'author', 'username'));
        $this->viewBuilder()->setLayout('admin');
    }

    /**
     * userlist page for Not admin users method
     *
     * @param string|null $id Moncase id.
     * @return \Cake\Http\Response|null|void Redirects to userlistNotadmin page.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function userlistNotadmin()
    {
        $firstName = $this->getRequest()->getSession()->read('Auth.first_name');
        $lastName = $this->getRequest()->getSession()->read('Auth.last_name');
        $author = $firstName . ' ' . $lastName;

        $username = $this->getRequest()->getSession()->read('Auth.username');

        $access_role = $this->getRequest()->getSession()->read('Auth.access_role');
        if ($access_role == 'ADMIN') {
            return $this->redirect(['controller' => 'moncases', 'action' => 'userlist']);
        }

        // obtain cases list
        $moncases = $this->Moncases->find()
            // Add a condition to filter archive_status
            ->where(['archive_status' => 'no'])
            // Add sorting order
            ->order(['date' => 'DESC']);

        //search functionality
        $search = $this->request->getQuery('search');
        if ($search) {
            $moncases->where(['OR' => [
                'differential_diagnosis LIKE' => "%$search%",
                'diagnosis LIKE' => "%$search%",
                'author LIKE' => "%$search%",
                'seen_by LIKE' => "%$search%",
                'teaching_points LIKE' => "%$search%",
                'imaging LIKE' => "%$search%",
                'accession_no LIKE' => "%$search%",
            ]]);
        }

        // filter functionality
        $filter = [];
        $caseTypeFilter = $this->request->getQuery('case_type');
        $contributorFilter = $this->request->getQuery('contributor');
        $ratingFilter = $this->request->getQuery('rating');
        $specialtyFilter = $this->request->getQuery('specialty');
        $imagingFilter = $this->request->getQuery('imaging');


        if (!empty($caseTypeFilter)) {
            foreach ($caseTypeFilter as $caseTypeFilter) {
                $filter[] = ['case_type LIKE' => '%' . $caseTypeFilter . '%'];
            }
        }

        if (!empty($contributorFilter)) {
            foreach ($contributorFilter as $contributorFilter) {
                $filter[] = ['contributor LIKE' => '%' . $contributorFilter . '%'];
            }
        }

        if (!empty($ratingFilter) && is_array($ratingFilter)) {
            $ratingFilter = array_map('intval', $ratingFilter);
            $filter[] = ['rating IN' => $ratingFilter];
        }
        if (!empty($specialtyFilter)) {
            foreach ($specialtyFilter as $specialtyFilter) {
                $filter[] = ['specialty LIKE' => '%' . $specialtyFilter . '%'];
            }
        }

        if (!empty($imagingFilter)) {
            foreach ($imagingFilter as $imagingFilter) {
                $filter[] = ['imaging LIKE' => '%' . $imagingFilter . '%'];
            }
        }

        if ($filter) {
            $moncases->where(['OR' => $filter]);
        }

        // Mobile
        // search functionality Mobile
        $search_mobile = $this->request->getQuery('search_mobile');
        if ($search_mobile) {
            $moncases->where(['OR' => [
                'differential_diagnosis LIKE' => "%$search_mobile%",
                'diagnosis LIKE' => "%$search_mobile%",
                'author LIKE' => "%$search_mobile%",
                'seen_by LIKE' => "%$search_mobile%",
                'teaching_points LIKE' => "%$search_mobile%",
                'accession_no LIKE' => "%$search_mobile%",
            ]]);
        }

        // filter functionality Mobile
        $filter_mobile = [];
        $caseTypeFilter_mobile = $this->request->getQuery('case_type_mobile');
        $contributorFilter_mobile = $this->request->getQuery('contributor_mobile');
        $ratingFilter_mobile = $this->request->getQuery('rating_mobile');
        $specialtyFilter_mobile = $this->request->getQuery('specialty_mobile');
        $imagingFilter_mobile = $this->request->getQuery('imaging_mobile');

        if (!empty($caseTypeFilter_mobile)) {
            foreach ($caseTypeFilter_mobile as $caseTypeFilter_mobile) {
                $filter_mobile[] = ['case_type LIKE' => '%' . $caseTypeFilter_mobile . '%'];
            }
        }

        if (!empty($contributorFilter_mobile)) {
            foreach ($contributorFilter_mobile as $contributorFilter_mobile) {
                $filter_mobile[] = ['contributor LIKE' => '%' . $contributorFilter_mobile . '%'];
            }
        }

        if (!empty($ratingFilter_mobile) && is_array($ratingFilter_mobile)) {
            $ratingFilter_mobile = array_map('intval', $ratingFilter_mobile);
            $filter_mobile[] = ['rating IN' => $ratingFilter_mobile];
        }
        if (!empty($specialtyFilter_mobile)) {
            foreach ($specialtyFilter_mobile as $specialtyFilter_mobile) {
                $filter_mobile[] = ['specialty LIKE' => '%' . $specialtyFilter_mobile . '%'];
            }
        }

        if (!empty($imagingFilter_mobile)) {
            foreach ($imagingFilter_mobile as $imagingFilter_mobile) {
                $filter_mobile[] = ['imaging LIKE' => '%' . $imagingFilter_mobile . '%'];
            }
        }

        if ($filter_mobile) {
            $moncases->where(['OR' => $filter_mobile]);
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
                $moncases->order(['diagnosis' => 'ASC']);
                break;
            case 'za':
                $moncases->order(['diagnosis' => 'DESC']);
                break;
            case 'rating_asc':
                $moncases->order(['rating' => 'ASC']);
                break;
            case 'rating_desc':
                $moncases->order(['rating' => 'DESC']);
        }

        $this->set(compact('moncases', 'search', 'filter', 'search_mobile', 'filter_mobile', 'sort', 'author', 'username'));
        $this->viewBuilder()->setLayout('notadmin');

    }

    /**
     * Archived cases page method
     *
     * @return \Cake\Http\Response|null|void Redirects to archivedcases page.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function archivedcases() {
        $firstName = $this->getRequest()->getSession()->read('Auth.first_name');
        $lastName = $this->getRequest()->getSession()->read('Auth.last_name');
        $author = $firstName . ' ' . $lastName;

        $username = $this->getRequest()->getSession()->read('Auth.username');

        $access_role = $this->getRequest()->getSession()->read('Auth.access_role');
        if ($access_role !== 'ADMIN') {
            return $this->redirect(['controller' => 'moncases', 'action' => 'userlistNotadmin']);
        }

        // obtain cases list
        $moncases = $this->Moncases->find()
            // Add a condition to filter archive_status
            ->where(['archive_status' => 'yes']);


        $this->set(compact('moncases','author','username'));
        $this->viewBuilder()->setLayout('admin');


    }

    /**
     * Change case archive status method
     *
     * archive status from 'no' to 'yes'
     *
     * @param string|null $id Moncase id.
     * @return \Cake\Http\Response|null|void Redirects to userlist.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function changecasestatus($id = null) {
        $moncase = $this->Moncases->get($id, [
            'contain' => [],
        ]);

        if ($this->request->is(['patch', 'post', 'put'])) {
            $moncase = $this->Moncases->patchEntity($moncase, $this->request->getData());

            // check status
            if ($moncase->archive_status === 'no') {
                $moncase->archive_status = 'yes';
            } else {
                $moncase->archive_status = 'no';
            }

            if ($this->Moncases->save($moncase)) {
                $this->Flash->success(__('The case has been archived. Check it in Archived Case!'));

                // Redirect logic based on access_role
                $accessRole = $this->getRequest()->getSession()->read('Auth.access_role');
                $redirectAction = $accessRole == 'ADMIN' ? 'userlist' : 'userlistNotadmin';

                return $this->redirect(['controller' => 'moncases', 'action' => $redirectAction]);
            }

            $this->Flash->error(__('The case could not be archived. Please, try again.'));
        }

        $this->set(compact('moncase'));

    }

    /**
     * restore case method
     *
     * archive status from 'yes' to 'no'
     *
     * @param string|null $id Moncase id.
     * @return \Cake\Http\Response|null|void Redirects to userlist.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function restore($id = null) {
        $moncase = $this->Moncases->get($id, [
            'contain' => [],
        ]);

        if ($this->request->is(['patch', 'post', 'put'])) {
            $moncase = $this->Moncases->patchEntity($moncase, $this->request->getData());

            // check status
            if ($moncase->archive_status === 'no') {
                $moncase->archive_status = 'yes';
            } else {
                $moncase->archive_status = 'no';
            }

            if ($this->Moncases->save($moncase)) {
                $this->Flash->success(__('The case has been restored.'));

                return $this->redirect(['action' => 'archivedcases']);
            }

            $this->Flash->error(__('The case could not be restored. Please, try again.'));
        }

        $this->set(compact('moncase'));

    }

    /**
     * Saved cases page method for admin users
     *
     * @return \Cake\Http\Response|null|void Redirects to archivedcases page.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function savedcases() {
        $firstName = $this->getRequest()->getSession()->read('Auth.first_name');
        $lastName = $this->getRequest()->getSession()->read('Auth.last_name');
        $author = $firstName . ' ' . $lastName;

        $username = $this->getRequest()->getSession()->read('Auth.username');

        // Get the current user's ID
        $authorId = $this->getRequest()->getSession()->read('Auth.id');

        $access_role = $this->getRequest()->getSession()->read('Auth.access_role');
        if ($access_role !== 'ADMIN') {
            return $this->redirect(['controller' => 'moncases', 'action' => 'savedcasesNotadmin']);
        }

        // Get the model instance of the Saves table
        $saveTable = $this->fetchTable('Saves');

        // Find the case ID of all saved records matching the user ID from the Saves table
        $saves = $saveTable->find()
            ->where([
                'user_id' => $authorId
            ])
            ->toArray();

        // Extract case ID from saved record and store in an array
        $caseIds = [];
        foreach ($saves as $save) {
            $caseIds[] = $save->moncase_id;
        }

        // Initialize Moncases query
        $moncasesQuery = $this->Moncases->find();

        // Execute query only if case ID array is not empty
        if (!empty($caseIds)) {
            // Retrieve the corresponding cases from
            // the Moncases table using an array of case IDs
            $moncasesQuery->where([
                'id IN' => $caseIds
            ]);
        }

        // Get query results
        $moncases = $moncasesQuery->toArray();


        // Get the model instance of the Saves table
        $collectionsTable = $this->fetchTable('Collections');

        $collectionCount = $collectionsTable->find()
            ->where(['user_id' => $authorId])
            ->count();

        // Set view variables
        $this->set(compact('moncases', 'saves','author','username', 'collectionCount'));
        $this->viewBuilder()->setLayout('admin');

    }

    /**
     * Saved cases page method for admin users
     *
     * @return \Cake\Http\Response|null|void Redirects to archivedcases page.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function savedcasesNotadmin() {
        $firstName = $this->getRequest()->getSession()->read('Auth.first_name');
        $lastName = $this->getRequest()->getSession()->read('Auth.last_name');
        $author = $firstName . ' ' . $lastName;

        $username = $this->getRequest()->getSession()->read('Auth.username');

        // Get the current user's ID
        $authorId = $this->getRequest()->getSession()->read('Auth.id');

        $access_role = $this->getRequest()->getSession()->read('Auth.access_role');
        if ($access_role == 'ADMIN') {
            return $this->redirect(['controller' => 'moncases', 'action' => 'savedcases']);
        }

        // Get the model instance of the Saves table
        $saveTable = $this->fetchTable('Saves');

        // Find the case ID of all saved records matching the user ID from the Saves table
        $saves = $saveTable->find()
            ->where([
                'user_id' => $authorId
            ])
            ->toArray();

        // Extract case ID from saved record and store in an array
        $caseIds = [];
        foreach ($saves as $save) {
            $caseIds[] = $save->moncase_id;
        }

        // Initialize Moncases query
        $moncasesQuery = $this->Moncases->find();

        // Execute query only if case ID array is not empty
        if (!empty($caseIds)) {
            // Retrieve the corresponding cases from
            // the Moncases table using an array of case IDs
            $moncasesQuery->where([
                'id IN' => $caseIds
            ]);
        }

        // Get query results
        $moncases = $moncasesQuery->toArray();

        // Get the model instance of the Saves table
        $collectionsTable = $this->fetchTable('Collections');

        $collectionCount = $collectionsTable->find()
            ->where(['user_id' => $authorId])
            ->count();

        // Set view variables
        $this->set(compact('moncases', 'saves','author','username', 'collectionCount'));
        $this->viewBuilder()->setLayout('notadmin');


    }

    /**
     * save case action method
     *
     *
     * @param string|null $id Moncase id.
     * @return \Cake\Http\Response|null|void Redirects to userlist.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function savecaseaction($id = null)
    {
        $authorId = $this->getRequest()->getSession()->read('Auth.id');

        $moncase = $this->Moncases->get($id, [
            'contain' => [],
        ]);
        $caseId = $moncase->id;

        if ($this->request->is(['patch', 'post', 'put'])) {
            // Check if the user has already saved this case
            $saveTable = $this->fetchTable('Saves');
            $existingSave = $saveTable->find()
                ->where(['user_id' => $authorId, 'moncase_id' => $caseId])
                ->first();

//            debug($existingSave);
            if ($existingSave != null) {
                $this->Flash->error(__('You have already saved this case.'));

                return $this->redirect(['controller' => 'moncases', 'action' => 'userlist']);
            } else {
                $moncase = $this->Moncases->patchEntity($moncase, $this->request->getData());

                $save = $saveTable->newEmptyEntity();

                $saveData = [
                    'user_id' => $authorId,
                    'moncase_id' => $caseId,
                ];
                $save = $saveTable->patchEntity($save, $saveData);

                if ($saveTable->save($save)) {
                    $this->Flash->success(__('Your case has been saved. Check it in the My Favorites tab.'));

                    // Redirect logic based on access_role
                    $accessRole = $this->getRequest()->getSession()->read('Auth.access_role');
                    $redirectAction = $accessRole == 'ADMIN' ? 'userlist' : 'userlistNotadmin';

                    return $this->redirect(['controller' => 'moncases', 'action' => $redirectAction]);
                }

                $this->Flash->error(__('Your case could not be saved. Please, try again.'));
            }
        }

        $this->set(compact('moncase', 'save'));
    }


    public function addnewcase()
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

        $moncases = $this->paginate($this->Moncases);

        $this->set(compact('moncases','author','username'));

    }

    public function addoscer()
    {

        $firstName = $this->getRequest()->getSession()->read('Auth.first_name');
        $lastName = $this->getRequest()->getSession()->read('Auth.last_name');

        $contributor = $this->getRequest()->getSession()->read('Auth.contributor');
        $username = $this->getRequest()->getSession()->read('Auth.username');

        $access_role = $this->getRequest()->getSession()->read('Auth.access_role');
        if ($access_role == 'ADMIN') {
            $this->viewBuilder()->setLayout('admin');
        } else {
            $this->viewBuilder()->setLayout('notadmin');

        }


        $author = $firstName . ' ' . $lastName;

        $moncase = $this->Moncases->newEmptyEntity();
        if ($this->request->is('post')) {
            $data = $this->request->getData();
            $moncase = $this->Moncases->patchEntity($moncase, $data);

//            debug(!$moncase->getErrors());

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

//            debug($this->Moncases->save($moncase));

            if ($this->Moncases->save($moncase)) {
                $this->Flash->success(__('Your case has been created.'));

                // Redirect logic based on access_role
                $accessRole = $this->getRequest()->getSession()->read('Auth.access_role');
                $redirectAction = $accessRole == 'ADMIN' ? 'userlist' : 'userlistNotadmin';

                return $this->redirect(['controller' => 'moncases', 'action' => $redirectAction]);
            }
            $this->Flash->error(__('Your case could not be created. Please, try again.'));
        }

        $this->set(compact('moncase', 'author', 'contributor','username'));

    }

    public function addlong()
    {
        $firstName = $this->getRequest()->getSession()->read('Auth.first_name');
        $lastName = $this->getRequest()->getSession()->read('Auth.last_name');

        $contributor = $this->getRequest()->getSession()->read('Auth.contributor');
        $username = $this->getRequest()->getSession()->read('Auth.username');

        $access_role = $this->getRequest()->getSession()->read('Auth.access_role');
        if ($access_role == 'ADMIN') {
            $this->viewBuilder()->setLayout('admin');
        } else {
            $this->viewBuilder()->setLayout('notadmin');

        }

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
                $this->Flash->success(__('Your case has been created.'));

                // Redirect logic based on access_role
                $accessRole = $this->getRequest()->getSession()->read('Auth.access_role');
                $redirectAction = $accessRole == 'ADMIN' ? 'userlist' : 'userlistNotadmin';

                return $this->redirect(['controller' => 'moncases', 'action' => $redirectAction]);
            }
            $this->Flash->error(__('Your case could not be created. Please, try again.'));
        }

        $this->set(compact('moncase', 'author', 'contributor','username'));


    }

    public function addmedium()
    {

        $firstName = $this->getRequest()->getSession()->read('Auth.first_name');
        $lastName = $this->getRequest()->getSession()->read('Auth.last_name');

        $contributor = $this->getRequest()->getSession()->read('Auth.contributor');
        $username = $this->getRequest()->getSession()->read('Auth.username');

        $access_role = $this->getRequest()->getSession()->read('Auth.access_role');
        if ($access_role == 'ADMIN') {
            $this->viewBuilder()->setLayout('admin');
        } else {
            $this->viewBuilder()->setLayout('notadmin');

        }

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
                $this->Flash->success(__('Your case has been created.'));

                // Redirect logic based on access_role
                $accessRole = $this->getRequest()->getSession()->read('Auth.access_role');
                $redirectAction = $accessRole == 'ADMIN' ? 'userlist' : 'userlistNotadmin';

                return $this->redirect(['controller' => 'moncases', 'action' => $redirectAction]);
            }
            $this->Flash->error(__('Your case could not be created. Please, try again.'));
        }

        $this->set(compact('moncase', 'author', 'contributor','username'));

    }

    public function addshort()
    {
        $firstName = $this->getRequest()->getSession()->read('Auth.first_name');
        $lastName = $this->getRequest()->getSession()->read('Auth.last_name');

        $contributor = $this->getRequest()->getSession()->read('Auth.contributor');
        $username = $this->getRequest()->getSession()->read('Auth.username');

        $access_role = $this->getRequest()->getSession()->read('Auth.access_role');
        if ($access_role == 'ADMIN') {
            $this->viewBuilder()->setLayout('admin');
        } else {
            $this->viewBuilder()->setLayout('notadmin');

        }

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
                $this->Flash->success(__('Your case has been created.'));

                // Redirect logic based on access_role
                $accessRole = $this->getRequest()->getSession()->read('Auth.access_role');
                $redirectAction = $accessRole == 'ADMIN' ? 'userlist' : 'userlistNotadmin';

                return $this->redirect(['controller' => 'moncases', 'action' => $redirectAction]);
            }
            $this->Flash->error(__('Your case could not be created. Please, try again.'));
        }

        $this->set(compact('moncase', 'author', 'contributor','username'));

    }

    public function addgeneral()
    {

        $firstName = $this->getRequest()->getSession()->read('Auth.first_name');
        $lastName = $this->getRequest()->getSession()->read('Auth.last_name');

        $contributor = $this->getRequest()->getSession()->read('Auth.contributor');
        $username = $this->getRequest()->getSession()->read('Auth.username');

        $access_role = $this->getRequest()->getSession()->read('Auth.access_role');
        if ($access_role == 'ADMIN') {
            $this->viewBuilder()->setLayout('admin');
        } else {
            $this->viewBuilder()->setLayout('notadmin');

        }
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

//                debug($targetPath);
//                exit();


                if ($name) {
                    $image->moveTo($targetPath);
                    $moncase->image_url = 'uploads/' . $name;
                }else {
                    $moncase->image_url = 'noimg.png';
                }
            }

            if ($this->Moncases->save($moncase)) {
                $this->Flash->success(__('Your case has been created.'));

                // Redirect logic based on access_role
                $accessRole = $this->getRequest()->getSession()->read('Auth.access_role');
                $redirectAction = $accessRole == 'ADMIN' ? 'userlist' : 'userlistNotadmin';

                return $this->redirect(['controller' => 'moncases', 'action' => $redirectAction]);
            }
            $this->Flash->error(__('Your case could not be created. Please, try again.'));
        }

        $this->set(compact('moncase', 'author', 'contributor','username'));

    }

    public function help() {

        $firstName = $this->getRequest()->getSession()->read('Auth.first_name');
        $lastName = $this->getRequest()->getSession()->read('Auth.last_name');
        $author = $firstName . ' ' . $lastName;

        $username = $this->getRequest()->getSession()->read('Auth.username');

        $access_role = $this->getRequest()->getSession()->read('Auth.access_role');
        if ($access_role !== 'ADMIN') {
            return $this->redirect(['controller' => 'moncases', 'action' => 'helpNotadmin']);
        }

        $this->viewBuilder()->setLayout('help');
        $this->set(compact( 'author', 'username'));


    }

    public function helpNotadmin() {

        $firstName = $this->getRequest()->getSession()->read('Auth.first_name');
        $lastName = $this->getRequest()->getSession()->read('Auth.last_name');
        $author = $firstName . ' ' . $lastName;

        $username = $this->getRequest()->getSession()->read('Auth.username');

        $this->viewBuilder()->setLayout('help_notadmin');
        $this->set(compact( 'author', 'username'));



    }


}
