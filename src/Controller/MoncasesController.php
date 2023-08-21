<?php
declare(strict_types=1);

namespace App\Controller;

use Cake\ORM\TableRegistry;
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

                $targetPath = WWW_ROOT.'img'.DS.'uploads'.DS.$name;

                if ($name) {
                    $image->moveTo($targetPath);
                    $moncase->image_url='uploads/'.$name;
                }
            }

            if ($this->Moncases->save($moncase)) {
                $this->Flash->success(__('The case has been saved.'));

                return $this->redirect(['action' => 'index']);
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

                return $this->redirect(['action' => 'userlist']);
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

        return $this->redirect(['action' => 'index']);
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
            $moncases->where([
                'differential_diagnosis LIKE' => "%$search%",
            ]);
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
            case 'rating':
                $moncases->order(['rating' => 'ASC']);
                break;
        }

        $this->set(compact('moncases','search', 'filter','sort'));
    }

    public function userlistNotadmin()
    {
        // obtain cases list
        $moncases = $this->Moncases->find();
        //search functionality
        $search = $this->request->getQuery('search');
        if ($search) {
            $moncases->where([
                'differential_diagnosis LIKE' => "%$search%",
            ]);
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
            case 'rating':
                $moncases->order(['rating' => 'ASC']);
                break;
        }

        $this->set(compact('moncases','search', 'filter','sort'));
    }

    public function step1() {

        if ($this->request->is('post')) {

            $newCase = $this->request->getSession()->read('newCase') ?? [];

            //
            $step1Data = $this->request->getData();

            $imageUrlValue = $step1Data['image_url'];
            $dateValue = $step1Data['date'];
            $imagingValue = $step1Data['imaging'];
            $case_typeValue = $step1Data['case_type'];
            $accession_noValue = $step1Data['accession_no'];
            $historyValue = $step1Data['history'];
            $authorValue = $step1Data['author'];
            $contributorValue = $step1Data['contributor'];
            $specialityValue = $step1Data['speciality'];

            //
            $newCase['image_url'] = $imageUrlValue;
            $newCase['date'] = $dateValue;
            $newCase['imaging'] = $imagingValue;
            $newCase['case_type'] = $case_typeValue;
            $newCase['accession_no'] = $accession_noValue;
            $newCase['history'] = $historyValue;
            $newCase['author'] = $authorValue;
            $newCase['contributor'] = $contributorValue;
            $newCase['speciality'] = $specialityValue;

            //
            $this->request->getSession()->write('newCase', $newCase);

//            $this->set(compact('newCase'));

            $this->redirect(['controller' => 'moncases', 'action' => 'step2']);
        }

    }

    public function step2() {

        if ($this->request->is('post')) {

            $newCase = $this->request->getSession()->read('newCase') ?? [];

            //
            $step2Data = $this->request->getData();
            $max_marksValue = $step2Data['max_marks'];
            $observationValue = $step2Data['observation'];
            $diagnosisValue = $step2Data['diagnosis'];

            //
            $newCase = array_merge($newCase, [
                'max_marks' => $max_marksValue,
                'observation' => $observationValue,
                'diagnosis' => $diagnosisValue
            ]);

            //
            $this->request->getSession()->write('newCase', $newCase);

//            $this->set(compact('newCase'));

            $this->redirect(['controller' => 'moncases', 'action' => 'step3']);
        }
    }

    public function step3() {
        if ($this->request->is('post')) {

            $newCase = $this->request->getSession()->read('newCase') ?? [];

            //
            $step3Data = $this->request->getData();
            $intepretationValue = $step3Data['intepretation'];
            $intrinsic_rolesValue = $step3Data['intrinsic_roles'];
            $managementValue = $step3Data['management'];
            $safetyValue = $step3Data['safety'];


            //
            $newCase = array_merge($newCase, [
                'intepretation' => $intepretationValue,
                'intrinsic_roles' => $intrinsic_rolesValue,
                'management' => $managementValue,
                'safety' => $safetyValue
            ]);

            //
            $this->request->getSession()->write('newCase', $newCase);

//            $this->set(compact('newCase'));

            $this->redirect(['controller' => 'moncases', 'action' => 'step4']);
        }
    }

    public function step4() {

        if ($this->request->is('post')) {

            $newCase = $this->request->getSession()->read('newCase') ?? [];

            //
            $step4Data = $this->request->getData();
            $anatomyValue = $step4Data['anatomy'];
            $pathologyValue = $step4Data['pathology'];
            $findingsValue = $step4Data['findings'];
            $differential_diagnosisValue = $step4Data['differential_diagnosis'];

            //
            $newCase = array_merge($newCase, [
                'anatomy' => $anatomyValue,
                'pathology' => $pathologyValue,
                'findings' => $findingsValue,
                'differential_diagnosis' => $differential_diagnosisValue
            ]);

            //
            $this->request->getSession()->write('newCase', $newCase);

//            $this->set(compact('newCase'));

            $this->redirect(['controller' => 'moncases', 'action' => 'step5']);
        }
    }

    public function step5() {

        $moncase = $this->Moncases->newEmptyEntity();

        if ($this->request->is('post')) {

            $newCase = $this->request->getSession()->read('newCase') ?? [];

            // step 1 - 4 data
            // 1

            $imageName = $newCase['image_url.name'];

            $targetPath = WWW_ROOT.'img'.DS.'uploads'.DS.$imageName;

            if ($imageName) {
                $imageName->moveTo($targetPath);
                $imageUrlValue = 'uploads/'.$imageName;
            }

            $dateValue = $newCase['date'];
            $imagingValue = $newCase['imaging'];
            $case_typeValue = $newCase['case_type'];
            $accession_noValue = $newCase['accession_no'];
            $historyValue = $newCase['history'];
            $authorValue = $newCase['author'];
            $contributorValue = $newCase['contributor'];
            $specialityValue = $newCase['speciality'];

            // 2
            $max_marksValue = $newCase['max_marks'];
            $observationValue = $newCase['observation'];
            $diagnosisValue = $newCase['diagnosis'];

            // 3
            $intepretationValue = $newCase['intepretation'];
            $intrinsic_rolesValue = $newCase['intrinsic_roles'];
            $managementValue = $newCase['management'];
            $safetyValue = $newCase['safety'];

            // 4
            $anatomyValue = $newCase['anatomy'];
            $pathologyValue = $newCase['pathology'];
            $findingsValue = $newCase['findings'];
            $differential_diagnosisValue = $newCase['differential_diagnosis'];

            //step 5 data
            $step4Data = $this->request->getData();
            $further_investigationValue = $step4Data['further_investigation'];
            $teaching_pointsValue = $step4Data['teaching_points'];
            $seen_byValue = $step4Data['seen_by'];
            $tagsValue = $step4Data['tags'];
            $ratingValue = $step4Data['rating'];

            // database data array
            $moncaseData = array(
                // 1
                'image_url' => $imageUrlValue,
                'date' => $dateValue,
                'imaging' => $imagingValue,
                'case_type' => $case_typeValue,
                'accession_no' => $accession_noValue,
                'history' => $historyValue,
                'author' => $authorValue,
                'contributor' => $contributorValue,
                'speciality' => $specialityValue,
                // 2
                '$max_marks' => $max_marksValue,
                '$observation' => $observationValue,
                '$diagnosis' => $diagnosisValue,
                // 3
                '$intepretation' => $intepretationValue,
                '$safety' => $safetyValue,
                '$intrinsic_roles' => $intrinsic_rolesValue,
                '$management' => $managementValue,
                // 4
                '$anatomy' => $anatomyValue,
                '$pathology' => $pathologyValue,
                '$findings' => $findingsValue,
                '$differential_diagnosis' => $differential_diagnosisValue,
                // 5
                '$further_investigation' => $further_investigationValue,
                '$teaching_points' => $teaching_pointsValue,
                '$seen_by' => $seen_byValue,
                '$tags' => $tagsValue,
                '$rating' => $ratingValue,
            );

            $moncase = $this->Moncases->patchEntity($moncase, $moncaseData);

            if ($this->Moncases->save($moncase)) {
                $this->Flash->success(__('The case has been saved.'));

                // empty newCase session
                $newCase = [];
                $this->request->getSession()->write('newCase', $newCase);

                // check access_role, then redirect different page
                $access_role = $this->getRequest()->getSession()->read('Auth.access_role');
                if($access_role == "ADMIN" ){
                    $this->redirect(['controller' => 'moncases', 'action' => 'userlist']);

                }else{
                    $this->redirect(['controller' => 'moncases', 'action' => 'userlistNotadmin']);
                }
            }
            $this->Flash->error(__('The case could not be saved. Please, try again.'));
        }
    }




}
