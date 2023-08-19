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
     * View method
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
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $moncase = $this->Moncases->newEmptyEntity();
        if ($this->request->is('post')) {
            $moncase = $this->Moncases->patchEntity($moncase, $this->request->getData());

            if (!$moncase->getErrors()) {
                $image = $this->request->getUploadedFile('image_url');

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

                return $this->redirect(['action' => 'index']);
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


    public function step1() {
        $moncasesTable = TableRegistry::getTableLocator()->get('Moncases');
        $moncase = $moncasesTable->newEntity(['field1' => 'value1', 'field2' => 'value2',]);

        if ($this->request->is('post')) {
            $moncase = $moncasesTable->patchEntity($moncase, $this->request->getData());
            if ($moncasesTable->save($moncase)) {
                $this->Flash->success(__('This step has been saved.'));
                return $this->redirect(['action' => 'step2', $moncase->id]);
            }
            $this->Flash->error(__('This step could not be saved. Please, try again.'));
        }

        $this->set(compact('moncase'));
    }

    public function step2($id) {
        $moncasesTable = TableRegistry::getTableLocator()->get('Moncases');
        $moncase = $moncasesTable->get($id);

        if ($this->request->is('post')) {
            $moncase = $moncasesTable->patchEntity($moncase, $this->request->getData());
            if ($moncasesTable->save($moncase)) {
                $this->Flash->success(__('This step has been saved.'));
                return $this->redirect(['action' => 'step3', $moncase->id]);
            }
            $this->Flash->error(__('This step could not be saved. Please, try again.'));
        }

        $this->set(compact('moncase'));
    }

    public function step3($id) {
        $moncasesTable = TableRegistry::getTableLocator()->get('Moncases');
        $moncase = $moncasesTable->get($id);

        if ($this->request->is('post')) {
            $moncase = $moncasesTable->patchEntity($moncase, $this->request->getData());
            if ($moncasesTable->save($moncase)) {
                $this->Flash->success(__('This step has been saved.'));
                return $this->redirect(['action' => 'step4', $moncase->id]);
            }
            $this->Flash->error(__('This step could not be saved. Please, try again.'));
        }

        $this->set(compact('moncase'));
    }

    public function step4($id) {
        $moncasesTable = TableRegistry::getTableLocator()->get('Moncases');
        $moncase = $moncasesTable->get($id);

        if ($this->request->is('post')) {
            $moncase = $moncasesTable->patchEntity($moncase, $this->request->getData());
            if ($moncasesTable->save($moncase)) {
                $this->Flash->success(__('This step has been saved.'));
                return $this->redirect(['action' => 'step5', $moncase->id]);
            }
            $this->Flash->error(__('This step could not be saved. Please, try again.'));
        }

        $this->set(compact('moncase'));
    }

    public function step5($id) {
        $moncasesTable = TableRegistry::getTableLocator()->get('Moncases');
        $moncase = $moncasesTable->get($id);

        if ($this->request->is('post')) {
            $moncase = $moncasesTable->patchEntity($moncase, $this->request->getData());
            if ($moncasesTable->save($moncase)) {
                $this->Flash->success(__('The case has been saved.'));
                return $this->redirect(['action' => 'userlist']);
            }
            $this->Flash->error(__('The case could not be saved. Please, try again.'));
        }

        $this->set(compact('moncase'));
    }

}
