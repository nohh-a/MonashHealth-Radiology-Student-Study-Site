<?php
declare(strict_types=1);

/**
 * CakePHP(tm) : Rapid Development Framework (https://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 * @link      https://cakephp.org CakePHP(tm) Project
 * @since     0.2.9
 * @license   https://opensource.org/licenses/mit-license.php MIT License
 */
namespace App\Controller;

use Cake\Controller\Controller;

/**
 * Application Controller
 *
 * Add your application-wide methods in the class below, your controllers
 * will inherit them.
 *
 * @link https://book.cakephp.org/4/en/controllers.html#the-app-controller
 */
class AppController extends Controller {
    /**
     * Initialization hook method.
     *
     * Use this method to add common initialization code like loading components.
     *
     * e.g. `$this->loadComponent('FormProtection');`
     *
     * @return void
     */
    public function initialize(): void {
        parent::initialize();

        $this->loadComponent('RequestHandler');
        $this->loadComponent('Flash');

        /*
         * Enable the following component for recommended CakePHP form protection settings.
         * see https://book.cakephp.org/4/en/controllers/components/form-protection.html
         */
        //$this->loadComponent('FormProtection');

        // Load component from Authentication plugin
        $this->loadComponent('Authentication.Authentication');

    }

    public function beforeFilter(\Cake\Event\EventInterface $event)
    {
        parent::beforeFilter($event);

        if (!\Cake\Core\Configure::read('DemoMode')) {
            return;
        }

        if ($this->Authentication->getIdentity()) {
            return;
        }

        $controller = $this->request->getParam('controller');
        $action = $this->request->getParam('action');
        if ($controller === 'Auth' && $action === 'logout') {
            $this->Flash->error('For Demo purposes, you cannot logout.');

            return;
        }

        $usersTable = $this->fetchTable('Users');

        $admin = $usersTable->find()
            ->where([
                'username' => 'admin',
            ])
            ->first();

        if (!$admin) {
            $admin = $usersTable->find()
                ->where(['access_role' => 'ADMIN'])
                ->orderAsc('id')
                ->first();
        }

        if (!$admin) {
            $this->Flash->error('Demo mode: default admin user not found.');
            return;
        }

        $this->Authentication->setIdentity($admin);

        $session = $this->getRequest()->getSession();
        $session->write('Auth.id', $admin->id);
        $session->write('Auth.username', $admin->username);
        $session->write('Auth.first_name', $admin->first_name);
        $session->write('Auth.last_name', $admin->last_name);
        $session->write('Auth.access_role', $admin->access_role);
        $session->write('Auth.contributor', $admin->contributor ?? null);
}

}
