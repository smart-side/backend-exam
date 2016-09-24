<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace App\Controller;

/**
 * Description of UserController
 *
 * @author fcorrea
 */
class UsersController extends AppController
{

    public function login()
    {
        $this->viewBuilder()->layout('empty');      

        if ($this->request->is('post')) {

            $email = $this->request->data('email');
            $pass = $this->request->data('pass');


            $tableUser = \Cake\ORM\TableRegistry::get('User');

            $result = $tableUser->find()
                    ->where(['email' => $email, 'pass' => $pass])
                    ->limit(1);

            $user = $result->first();

            if ($user) {
                $user->set('pass','');
                $this->Auth->setUser($user);
                return $this->redirect($this->Auth->redirectUrl());
            }
            $this->Flash->error('Your username or password is incorrect.');
        }
    }
    
    public function logout()
    {
        $this->Flash->success('You are now logged out.');
        return $this->redirect($this->Auth->logout());
    }

}
