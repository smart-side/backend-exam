<?php

/**
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link      http://cakephp.org CakePHP(tm) Project
 * @since     0.2.9
 * @license   http://www.opensource.org/licenses/mit-license.php MIT License
 */

namespace App\Controller;

use Cake\Controller\Controller;
use Cake\Event\Event;

/**
 * Application Controller
 *
 * Add your application-wide methods in the class below, your controllers
 * will inherit them.
 *
 * @link http://book.cakephp.org/3.0/en/controllers.html#the-app-controller
 */
class AppController extends Controller {

    /**
     * Initialization hook method.
     *
     * Use this method to add common initialization code like loading components.
     *
     * e.g. `$this->loadComponent('Security');`
     *
     * @return void
     */
    public function initialize() {
        parent::initialize();
        $this->loadComponent('RequestHandler');
        $this->request->session()->start();
        $this->loadComponent('Flash');


        $this->buildAuth();
        $this->setHeaderName($this->module_name);
        $this->getUser();
    }

    /**
     * Before render callback.
     *
     * @param \Cake\Event\Event $event The beforeRender event.
     * @return void
     */
    public function beforeRender(Event $event) {
        if (!array_key_exists('_serialize', $this->viewVars) &&
                in_array($this->response->type(), ['application/json', 'application/xml'])
        ) {
            $this->set('_serialize', true);
        }
    }

    private function buildAuth() {
        $this->loadComponent('Auth', [
            'authenticate' => [
                'Form' => [
                    'userModel' => 'User',
                    'passwordHasher' => false,
                    'fields' => [
                        'username' => 'email',
                        'password' => 'pass'
                    ]
                ]
            ],
            'loginAction' => [
                'controller' => 'Users',
                'action' => 'login'
            ]
        ]);

        $this->Auth->allow(['display']);
    }

    protected function setHeaderName($module_name)
    {
        $this->set(compact('module_name'));
    }

    protected function getUser()
    {
        $User = $this->request->session()->read('Auth.User');
        
        if (!$User) {
            return false;
        }

        $this->set('User', $User);
        return $User;
    }

}
